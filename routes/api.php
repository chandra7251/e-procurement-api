<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// ─────────────────────────────────────────────
//  HELPER: cek token & role
// ─────────────────────────────────────────────
function getAuthRole(Request $req): ?string
{
    $token = $req->bearerToken();
    if ($token === '1|sample_vendor_token_abc123xyz') return 'vendor';
    if ($token === '2|sample_admin_token_abc123xyz')  return 'admin';
    return null;
}

function resp401()
{
    return response()->json([
        'status'  => 'error',
        'message' => 'Unauthenticated',
    ], 401);
}

function resp403Admin()
{
    return response()->json([
        'status'  => 'error',
        'message' => 'Forbidden. Admin access only.',
    ], 403);
}

function resp403Vendor()
{
    return response()->json([
        'status'  => 'error',
        'message' => 'Forbidden. Vendor access only.',
    ], 403);
}

// ─────────────────────────────────────────────
//  AUTH — public (tidak butuh token)
// ─────────────────────────────────────────────

// POST /api/auth/register
Route::post('auth/register', function () {
    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor registered successfully',
        'data'    => [
            'user_id'       => 1,
            'name'          => 'Budi Santoso',
            'email'         => 'vendor@mail.com',
            'role'          => 'vendor',
            'vendor_status' => 'pending',
        ],
    ], 201);
});

// POST /api/auth/login
Route::post('auth/login', function (Request $req) {
    $body = $req->json()->all();
    $email = $body['email'] ?? '';

    // Tentukan role dari email
    if (str_contains($email, 'admin')) {
        return response()->json([
            'status'  => 'success',
            'message' => 'Login successful',
            'data'    => [
                'access_token' => '2|sample_admin_token_abc123xyz',
                'token_type'   => 'Bearer',
                'user'         => [
                    'id'    => 2,
                    'name'  => 'Admin Sistem',
                    'email' => 'admin@mail.com',
                    'role'  => 'admin',
                ],
            ],
        ], 200);
    }

    return response()->json([
        'status'  => 'success',
        'message' => 'Login successful',
        'data'    => [
            'access_token' => '1|sample_vendor_token_abc123xyz',
            'token_type'   => 'Bearer',
            'user'         => [
                'id'    => 1,
                'name'  => 'Budi Santoso',
                'email' => 'vendor@mail.com',
                'role'  => 'vendor',
            ],
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  AUTH — butuh token (vendor atau admin)
// ─────────────────────────────────────────────

// POST /api/auth/logout
Route::post('auth/logout', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();

    return response()->json([
        'status'  => 'success',
        'message' => 'Logout successful',
    ], 200);
});

// GET /api/auth/me
Route::get('auth/me', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();

    if ($role === 'admin') {
        return response()->json([
            'status'  => 'success',
            'message' => 'User data fetched successfully',
            'data'    => [
                'id'    => 2,
                'name'  => 'Admin Sistem',
                'email' => 'admin@mail.com',
                'role'  => 'admin',
            ],
        ], 200);
    }

    return response()->json([
        'status'  => 'success',
        'message' => 'User data fetched successfully',
        'data'    => [
            'id'    => 1,
            'name'  => 'Budi Santoso',
            'email' => 'vendor@mail.com',
            'role'  => 'vendor',
        ],
    ], 200);
});

// PUT /api/auth/change-password
Route::put('auth/change-password', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();

    return response()->json([
        'status'  => 'success',
        'message' => 'Password changed successfully',
    ], 200);
});

// ─────────────────────────────────────────────
//  VENDOR PROFILE — vendor only
// ─────────────────────────────────────────────

// GET /api/vendors/me
Route::get('vendors/me', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor profile fetched successfully',
        'data'    => [
            'id'                  => 1,
            'name'                => 'Budi Santoso',
            'email'               => 'vendor@mail.com',
            'role'                => 'vendor',
            'company_name'        => 'PT Maju Jaya',
            'phone'               => '08123456789',
            'address'             => 'Jakarta',
            'verification_status' => 'approved',
        ],
    ], 200);
});

// PUT /api/vendors/me
Route::put('vendors/me', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor profile updated successfully',
        'data'    => [
            'id'           => 1,
            'company_name' => 'PT Maju Jaya Updated',
            'phone'        => '08123456789',
            'address'      => 'Jakarta Selatan',
        ],
    ], 200);
});

// GET /api/vendors/status
Route::get('vendors/status', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor status fetched successfully',
        'data'    => [
            'vendor_id'           => 1,
            'company_name'        => 'PT Maju Jaya',
            'verification_status' => 'approved',
            'verified_at'         => '2026-05-02 09:00:00',
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  VENDOR DOCUMENTS — vendor only
// ─────────────────────────────────────────────

// GET /api/vendors/documents
Route::get('vendors/documents', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor documents fetched successfully',
        'data'    => [
            [
                'id'            => 1,
                'document_type' => 'legalitas',
                'file_name'     => 'legalitas-pt-maju-jaya.pdf',
                'file_url'      => 'http://127.0.0.1:8080/storage/vendor-documents/legalitas-pt-maju-jaya.pdf',
                'uploaded_at'   => '2026-05-01 10:00:00',
            ],
            [
                'id'            => 2,
                'document_type' => 'izin_usaha',
                'file_name'     => 'izin-usaha-pt-maju-jaya.pdf',
                'file_url'      => 'http://127.0.0.1:8080/storage/vendor-documents/izin-usaha-pt-maju-jaya.pdf',
                'uploaded_at'   => '2026-05-01 10:10:00',
            ],
        ],
    ], 200);
});

// POST /api/vendors/documents
Route::post('vendors/documents', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor document uploaded successfully',
        'data'    => [
            'id'            => 3,
            'document_type' => 'izin_usaha',
            'file_name'     => 'izin-usaha-baru.pdf',
            'file_url'      => 'http://127.0.0.1:8080/storage/vendor-documents/izin-usaha-baru.pdf',
            'uploaded_at'   => '2026-05-01 10:30:00',
        ],
    ], 201);
});

// ─────────────────────────────────────────────
//  ADMIN — VENDOR VERIFICATION (admin only)
// ─────────────────────────────────────────────

// GET /api/admin/vendors
Route::get('admin/vendors', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor list fetched successfully',
        'data'    => [
            ['id' => 1, 'company_name' => 'PT Maju Jaya',      'email' => 'vendor1@mail.com', 'phone' => '08123456789', 'verification_status' => 'pending'],
            ['id' => 2, 'company_name' => 'PT Sumber Makmur',  'email' => 'vendor2@mail.com', 'phone' => '08129876543', 'verification_status' => 'approved'],
        ],
        'meta'    => ['current_page' => 1, 'per_page' => 10, 'total' => 2],
    ], 200);
});

// GET /api/admin/vendors/{id}
Route::get('admin/vendors/{id}', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor detail fetched successfully',
        'data'    => [
            'id'                  => (int)$id,
            'name'                => 'Budi Santoso',
            'email'               => 'vendor@mail.com',
            'role'                => 'vendor',
            'company_name'        => 'PT Maju Jaya',
            'phone'               => '08123456789',
            'address'             => 'Jakarta',
            'verification_status' => 'pending',
            'documents'           => [
                ['id' => 11, 'document_type' => 'legalitas',   'file_name' => 'legalitas-pt-maju-jaya.pdf',  'file_url' => 'http://127.0.0.1:8080/storage/vendor-documents/legalitas-pt-maju-jaya.pdf',  'uploaded_at' => '2026-05-01 10:00:00'],
                ['id' => 12, 'document_type' => 'izin_usaha',  'file_name' => 'izin-usaha-pt-maju-jaya.pdf', 'file_url' => 'http://127.0.0.1:8080/storage/vendor-documents/izin-usaha-pt-maju-jaya.pdf', 'uploaded_at' => '2026-05-01 10:10:00'],
            ],
        ],
    ], 200);
});

// PATCH /api/admin/vendors/{id}/status
Route::patch('admin/vendors/{id}/status', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    $body = $req->json()->all();
    $status = $body['status'] ?? 'approved';

    return response()->json([
        'status'  => 'success',
        'message' => 'Vendor status updated successfully',
        'data'    => [
            'vendor_id' => (int)$id,
            'status'    => $status,
            'notes'     => $body['notes'] ?? 'Dokumen lengkap dan valid',
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  ADMIN — TENDER (admin only)
// ─────────────────────────────────────────────

// GET /api/admin/tenders
Route::get('admin/tenders', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    return response()->json([
        'status'  => 'success',
        'message' => 'Tender list fetched successfully',
        'data'    => [
            ['id' => 101, 'title' => 'Pengadaan Laptop Kantor 2026', 'status' => 'draft', 'start_date' => '2026-05-10 08:00:00', 'end_date' => '2026-05-20 17:00:00', 'bidding_start' => '2026-05-13 08:00:00', 'bidding_end' => '2026-05-15 23:59:59'],
            ['id' => 102, 'title' => 'Pengadaan Printer Kantor',     'status' => 'open',  'start_date' => '2026-05-11 08:00:00', 'end_date' => '2026-05-18 17:00:00', 'bidding_start' => '2026-05-14 08:00:00', 'bidding_end' => '2026-05-16 23:59:59'],
        ],
        'meta'    => ['current_page' => 1, 'per_page' => 10, 'total' => 2],
    ], 200);
});

// POST /api/admin/tenders
Route::post('admin/tenders', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    $body = $req->json()->all();

    return response()->json([
        'status'  => 'success',
        'message' => 'Tender created successfully',
        'data'    => [
            'id'            => 101,
            'title'         => $body['title']         ?? 'Pengadaan Laptop Kantor 2026',
            'status'        => $body['status']        ?? 'draft',
            'start_date'    => $body['start_date']    ?? '2026-05-10 08:00:00',
            'end_date'      => $body['end_date']      ?? '2026-05-20 17:00:00',
            'bidding_start' => $body['bidding_start'] ?? '2026-05-13 08:00:00',
            'bidding_end'   => $body['bidding_end']   ?? '2026-05-15 23:59:59',
        ],
    ], 201);
});

// GET /api/admin/tenders/{id}
Route::get('admin/tenders/{id}', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    return response()->json([
        'status'  => 'success',
        'message' => 'Tender detail fetched successfully',
        'data'    => [
            'id'             => (int)$id,
            'title'          => 'Pengadaan Laptop Kantor 2026',
            'description'    => 'Tender pengadaan laptop untuk kebutuhan operasional kantor pusat.',
            'specification'  => 'Processor minimal Intel Core i5, RAM 16GB, SSD 512GB, garansi resmi 2 tahun.',
            'start_date'     => '2026-05-10 08:00:00',
            'end_date'       => '2026-05-20 17:00:00',
            'aanwijzing_date'=> '2026-05-12 10:00:00',
            'bidding_start'  => '2026-05-13 08:00:00',
            'bidding_end'    => '2026-05-15 23:59:59',
            'status'         => 'draft',
        ],
    ], 200);
});

// PUT /api/admin/tenders/{id}
Route::put('admin/tenders/{id}', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    $body = $req->json()->all();

    return response()->json([
        'status'  => 'success',
        'message' => 'Tender updated successfully',
        'data'    => [
            'id'     => (int)$id,
            'title'  => $body['title']  ?? 'Pengadaan Laptop Kantor 2026 - Revisi',
            'status' => $body['status'] ?? 'open',
        ],
    ], 200);
});

// PATCH /api/admin/tenders/{id}/status
Route::patch('admin/tenders/{id}/status', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    $body   = $req->json()->all();
    $status = $body['status'] ?? 'open';

    return response()->json([
        'status'  => 'success',
        'message' => 'Tender status updated successfully',
        'data'    => ['id' => (int)$id, 'status' => $status],
    ], 200);
});

// ─────────────────────────────────────────────
//  TENDER VENDOR (vendor only)
// ─────────────────────────────────────────────

// GET /api/tenders
Route::get('tenders', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Tender list fetched successfully',
        'data'    => [
            ['id' => 101, 'title' => 'Pengadaan Laptop Kantor 2026', 'description' => 'Tender pengadaan laptop untuk kebutuhan operasional kantor pusat.', 'start_date' => '2026-05-10 08:00:00', 'end_date' => '2026-05-20 17:00:00', 'bidding_start' => '2026-05-13 08:00:00', 'bidding_end' => '2026-05-15 23:59:59', 'status' => 'open'],
            ['id' => 102, 'title' => 'Pengadaan Printer Kantor',     'description' => 'Tender pengadaan printer untuk cabang Surabaya.',               'start_date' => '2026-05-11 08:00:00', 'end_date' => '2026-05-18 17:00:00', 'bidding_start' => '2026-05-14 08:00:00', 'bidding_end' => '2026-05-16 23:59:59', 'status' => 'aanwijzing'],
        ],
        'meta'    => ['current_page' => 1, 'per_page' => 10, 'total' => 2],
    ], 200);
});

// GET /api/tenders/{id}
Route::get('tenders/{id}', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Tender detail fetched successfully',
        'data'    => [
            'id'              => (int)$id,
            'title'           => 'Pengadaan Laptop Kantor 2026',
            'description'     => 'Tender pengadaan laptop untuk kebutuhan operasional kantor pusat.',
            'specification'   => 'Processor minimal Intel Core i5, RAM 16GB, SSD 512GB, garansi resmi 2 tahun.',
            'start_date'      => '2026-05-10 08:00:00',
            'end_date'        => '2026-05-20 17:00:00',
            'aanwijzing_date' => '2026-05-12 10:00:00',
            'bidding_start'   => '2026-05-13 08:00:00',
            'bidding_end'     => '2026-05-15 23:59:59',
            'status'          => 'open',
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  PARTICIPATION
// ─────────────────────────────────────────────

// POST /api/tenders/{id}/participants (vendor only)
Route::post('tenders/{id}/participants', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Successfully joined tender',
        'data'    => [
            'tender_id' => (int)$id,
            'vendor_id' => 1,
            'joined_at' => '2026-05-10 10:00:00',
        ],
    ], 201);
});

// GET /api/admin/tenders/{id}/participants (admin only)
Route::get('admin/tenders/{id}/participants', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    return response()->json([
        'status'  => 'success',
        'message' => 'Participant list fetched successfully',
        'data'    => [
            ['vendor_id' => 1, 'company_name' => 'PT Maju Jaya',     'email' => 'vendor1@mail.com', 'joined_at' => '2026-05-10 10:00:00'],
            ['vendor_id' => 2, 'company_name' => 'PT Sumber Makmur', 'email' => 'vendor2@mail.com', 'joined_at' => '2026-05-10 11:30:00'],
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  AANWIJZING / ANNOUNCEMENTS
// ─────────────────────────────────────────────

// POST /api/admin/tenders/{id}/announcements (admin only)
Route::post('admin/tenders/{id}/announcements', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    $body = $req->json()->all();

    return response()->json([
        'status'  => 'success',
        'message' => 'Announcement created successfully',
        'data'    => [
            'id'         => 1,
            'tender_id'  => (int)$id,
            'title'      => $body['title']   ?? 'Pengumuman Aanwijzing',
            'content'    => $body['content'] ?? 'Peserta wajib hadir dalam sesi aanwijzing.',
            'created_at' => '2026-05-12 08:00:00',
        ],
    ], 201);
});

// GET /api/tenders/{id}/announcements (vendor only)
Route::get('tenders/{id}/announcements', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Announcement list fetched successfully',
        'data'    => [
            ['id' => 1, 'tender_id' => (int)$id, 'title' => 'Pengumuman Aanwijzing', 'content' => 'Peserta wajib hadir dalam sesi aanwijzing secara online.', 'created_at' => '2026-05-12 08:00:00'],
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  BIDDING
// ─────────────────────────────────────────────

// POST /api/tenders/{id}/bids (vendor only)
Route::post('tenders/{id}/bids', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    $body = $req->json()->all();

    return response()->json([
        'status'  => 'success',
        'message' => 'Bid submitted successfully',
        'data'    => [
            'id'            => 1,
            'tender_id'     => (int)$id,
            'vendor_id'     => 1,
            'bid_amount'    => $body['bid_amount']    ?? 120000000,
            'proposal_note' => $body['proposal_note'] ?? 'Kami menawarkan harga terbaik dengan garansi 3 tahun.',
            'submitted_at'  => '2026-05-14 10:00:00',
        ],
    ], 201);
});

// PUT /api/tenders/{id}/bids/{bidId} (vendor only)
Route::put('tenders/{id}/bids/{bidId}', function (Request $req, $id, $bidId) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    $body = $req->json()->all();

    return response()->json([
        'status'  => 'success',
        'message' => 'Bid updated successfully',
        'data'    => [
            'id'            => (int)$bidId,
            'tender_id'     => (int)$id,
            'bid_amount'    => $body['bid_amount']    ?? 115000000,
            'proposal_note' => $body['proposal_note'] ?? 'Revisi penawaran dengan harga lebih kompetitif.',
            'updated_at'    => '2026-05-14 12:00:00',
        ],
    ], 200);
});

// GET /api/tenders/{id}/bids/me (vendor only)
Route::get('tenders/{id}/bids/me', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Your bid fetched successfully',
        'data'    => [
            'id'            => 1,
            'tender_id'     => (int)$id,
            'vendor_id'     => 1,
            'bid_amount'    => 115000000,
            'proposal_note' => 'Revisi penawaran dengan harga lebih kompetitif.',
            'submitted_at'  => '2026-05-14 10:00:00',
            'updated_at'    => '2026-05-14 12:00:00',
        ],
    ], 200);
});

// GET /api/admin/tenders/{id}/bids (admin only)
Route::get('admin/tenders/{id}/bids', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    return response()->json([
        'status'  => 'success',
        'message' => 'Bid list fetched successfully',
        'data'    => [
            ['id' => 1, 'vendor_id' => 1, 'company_name' => 'PT Maju Jaya',     'bid_amount' => 115000000, 'submitted_at' => '2026-05-14 10:00:00'],
            ['id' => 2, 'vendor_id' => 2, 'company_name' => 'PT Sumber Makmur', 'bid_amount' => 118000000, 'submitted_at' => '2026-05-14 11:00:00'],
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  WINNER SELECTION
// ─────────────────────────────────────────────

// POST /api/admin/tenders/{id}/winner (admin only)
Route::post('admin/tenders/{id}/winner', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    $body = $req->json()->all();

    return response()->json([
        'status'  => 'success',
        'message' => 'Winner selected successfully',
        'data'    => [
            'tender_id'    => (int)$id,
            'winner_bid_id'=> $body['bid_id'] ?? 1,
            'vendor_id'    => 1,
            'company_name' => 'PT Maju Jaya',
            'bid_amount'   => 115000000,
            'selected_at'  => '2026-05-17 14:00:00',
        ],
    ], 201);
});

// GET /api/tenders/{id}/winner (vendor only)
Route::get('tenders/{id}/winner', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Winner fetched successfully',
        'data'    => [
            'tender_id'    => (int)$id,
            'vendor_id'    => 1,
            'company_name' => 'PT Maju Jaya',
            'bid_amount'   => 115000000,
            'selected_at'  => '2026-05-17 14:00:00',
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  RESULT & PURCHASE ORDER
// ─────────────────────────────────────────────

// GET /api/tenders/{id}/result (vendor only)
Route::get('tenders/{id}/result', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'vendor') return resp403Vendor();

    return response()->json([
        'status'  => 'success',
        'message' => 'Tender result fetched successfully',
        'data'    => [
            'tender_id'    => (int)$id,
            'tender_title' => 'Pengadaan Laptop Kantor 2026',
            'winner'       => [
                'vendor_id'    => 1,
                'company_name' => 'PT Maju Jaya',
                'bid_amount'   => 115000000,
                'selected_at'  => '2026-05-17 14:00:00',
            ],
            'your_result'  => [
                'vendor_id'  => 1,
                'bid_amount' => 115000000,
                'rank'       => 1,
                'is_winner'  => true,
            ],
        ],
    ], 200);
});

// POST /api/admin/tenders/{id}/purchase-order (admin only)
Route::post('admin/tenders/{id}/purchase-order', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    $body = $req->json()->all();

    return response()->json([
        'status'  => 'success',
        'message' => 'Purchase order created successfully',
        'data'    => [
            'id'            => 1,
            'tender_id'     => (int)$id,
            'vendor_id'     => 1,
            'po_number'     => 'PO-2026-001',
            'amount'        => $body['amount'] ?? 115000000,
            'notes'         => $body['notes']  ?? 'Purchase order untuk pemenang tender Pengadaan Laptop Kantor 2026.',
            'issued_at'     => '2026-05-18 09:00:00',
        ],
    ], 201);
});

// GET /api/admin/tenders/{id}/purchase-order (admin only)
Route::get('admin/tenders/{id}/purchase-order', function (Request $req, $id) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    return response()->json([
        'status'  => 'success',
        'message' => 'Purchase order fetched successfully',
        'data'    => [
            'id'        => 1,
            'tender_id' => (int)$id,
            'vendor_id' => 1,
            'po_number' => 'PO-2026-001',
            'amount'    => 115000000,
            'notes'     => 'Purchase order untuk pemenang tender Pengadaan Laptop Kantor 2026.',
            'issued_at' => '2026-05-18 09:00:00',
        ],
    ], 200);
});

// ─────────────────────────────────────────────
//  DASHBOARD (admin only)
// ─────────────────────────────────────────────

// GET /api/admin/dashboard
Route::get('admin/dashboard', function (Request $req) {
    $role = getAuthRole($req);
    if (!$role) return resp401();
    if ($role !== 'admin') return resp403Admin();

    return response()->json([
        'status'  => 'success',
        'message' => 'Dashboard data fetched successfully',
        'data'    => [
            'total_vendors'       => 20,
            'approved_vendors'    => 15,
            'pending_vendors'     => 5,
            'total_tenders'       => 10,
            'active_tenders'      => 3,
            'finished_tenders'    => 7,
            'total_participants'  => 30,
            'total_bids'          => 75,
            'lowest_bid'          => 115000000,
            'highest_bid'         => 130000000,
        ],
    ], 200);
});