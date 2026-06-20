<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('auth/register', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor registered successfully",
    "data": {
        "user_id": 1,
        "name": "Budi Santoso",
        "email": "vendor@mail.com",
        "role": "vendor",
        "vendor_status": "pending"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::post('auth/login', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Login successful",
    "data": {
        "access_token": "1|sample_vendor_token_abc123xyz",
        "token_type": "Bearer",
        "user": {
            "id": 1,
            "name": "Budi Santoso",
            "email": "vendor@mail.com",
            "role": "vendor"
        }
    }
}
JSON
, true);
    return response()->json($data);
});

Route::post('auth/logout', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Logout successful"
}
JSON
, true);
    return response()->json($data);
});

Route::get('auth/me', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Current user fetched successfully",
    "data": {
        "id": 1,
        "name": "Budi Santoso",
        "email": "vendor@mail.com",
        "role": "vendor",
        "vendor_status": "pending"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::put('auth/change-password', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Password changed successfully"
}
JSON
, true);
    return response()->json($data);
});

Route::get('vendors/me', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor profile fetched successfully",
    "data": {
        "id": 12,
        "name": "Budi Santoso",
        "company_name": "PT Maju Jaya",
        "email": "vendor@mail.com",
        "phone": "08123456789",
        "address": "Jakarta",
        "vendor_status": "pending"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::put('vendors/me', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor profile updated successfully",
    "data": {
        "company_name": "PT Maju Jaya Sejahtera",
        "phone": "08123456789",
        "address": "Jl. Sudirman No. 10, Jakarta"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('vendors/status', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor verification status fetched successfully",
    "data": {
        "verification_status": "pending",
        "notes": null
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('vendors/documents', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor documents fetched successfully",
    "data": [
        {
            "id": 1,
            "document_type": "legalitas",
            "file_name": "legalitas-pt-maju-jaya.pdf",
            "file_url": "http://127.0.0.1:8080/storage/vendor-documents/legalitas-pt-maju-jaya.pdf",
            "uploaded_at": "2026-05-01 10:00:00"
        },
        {
            "id": 2,
            "document_type": "izin_usaha",
            "file_name": "izin-usaha-pt-maju-jaya.pdf",
            "file_url": "http://127.0.0.1:8080/storage/vendor-documents/izin-usaha-pt-maju-jaya.pdf",
            "uploaded_at": "2026-05-01 10:10:00"
        }
    ]
}
JSON
, true);
    return response()->json($data);
});

Route::post('vendors/documents', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor document uploaded successfully",
    "data": {
        "id": 3,
        "document_type": "izin_usaha",
        "file_name": "izin-usaha-baru.pdf",
        "file_url": "http://127.0.0.1:8080/storage/vendor-documents/izin-usaha-baru.pdf",
        "uploaded_at": "2026-05-01 10:30:00"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('admin/vendors', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor list fetched successfully",
    "data": [
        {
            "id": 1,
            "company_name": "PT Maju Jaya",
            "email": "vendor1@mail.com",
            "phone": "08123456789",
            "verification_status": "pending"
        },
        {
            "id": 2,
            "company_name": "PT Sumber Makmur",
            "email": "vendor2@mail.com",
            "phone": "08129876543",
            "verification_status": "approved"
        }
    ],
    "meta": {
        "current_page": 1,
        "per_page": 10,
        "total": 2
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('admin/vendors/{id}', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor detail fetched successfully",
    "data": {
        "id": 1,
        "name": "Budi Santoso",
        "email": "vendor@mail.com",
        "role": "vendor",
        "company_name": "PT Maju Jaya",
        "phone": "08123456789",
        "address": "Jakarta",
        "verification_status": "pending",
        "documents": [
            {
                "id": 11,
                "document_type": "legalitas",
                "file_name": "legalitas-pt-maju-jaya.pdf",
                "file_url": "http://127.0.0.1:8080/storage/vendor-documents/legalitas-pt-maju-jaya.pdf",
                "uploaded_at": "2026-05-01 10:00:00"
            },
            {
                "id": 12,
                "document_type": "izin_usaha",
                "file_name": "izin-usaha-pt-maju-jaya.pdf",
                "file_url": "http://127.0.0.1:8080/storage/vendor-documents/izin-usaha-pt-maju-jaya.pdf",
                "uploaded_at": "2026-05-01 10:10:00"
            }
        ]
    }
}
JSON
, true);
    return response()->json($data);
});

Route::patch('admin/vendors/{id}/status', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Vendor status updated successfully",
    "data": {
        "vendor_id": 12,
        "status": "approved",
        "notes": "Dokumen lengkap dan valid"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('admin/tenders', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender list fetched successfully",
    "data": [
        {
            "id": 101,
            "title": "Pengadaan Laptop Kantor 2026",
            "status": "draft",
            "start_date": "2026-05-10 08:00:00",
            "end_date": "2026-05-20 17:00:00",
            "bidding_start": "2026-05-13 08:00:00",
            "bidding_end": "2026-05-15 23:59:59"
        },
        {
            "id": 102,
            "title": "Pengadaan Printer Kantor",
            "status": "open",
            "start_date": "2026-05-11 08:00:00",
            "end_date": "2026-05-18 17:00:00",
            "bidding_start": "2026-05-14 08:00:00",
            "bidding_end": "2026-05-16 23:59:59"
        }
    ],
    "meta": {
        "current_page": 1,
        "per_page": 10,
        "total": 2
    }
}
JSON
, true);
    return response()->json($data);
});

Route::post('admin/tenders', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender created successfully",
    "data": {
        "id": 101,
        "title": "Pengadaan Laptop Kantor 2026",
        "status": "draft",
        "start_date": "2026-05-10 08:00:00",
        "end_date": "2026-05-20 17:00:00",
        "bidding_start": "2026-05-13 08:00:00",
        "bidding_end": "2026-05-15 23:59:59"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('admin/tenders/{id}', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender detail fetched successfully",
    "data": {
        "id": 101,
        "title": "Pengadaan Laptop Kantor 2026",
        "description": "Tender pengadaan laptop untuk kebutuhan operasional kantor pusat.",
        "specification": "Processor minimal Intel Core i5, RAM 16GB, SSD 512GB, garansi resmi 2 tahun.",
        "start_date": "2026-05-10 08:00:00",
        "end_date": "2026-05-20 17:00:00",
        "aanwijzing_date": "2026-05-12 10:00:00",
        "bidding_start": "2026-05-13 08:00:00",
        "bidding_end": "2026-05-15 23:59:59",
        "status": "draft"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::put('admin/tenders/{id}', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender updated successfully",
    "data": {
        "id": 101,
        "title": "Pengadaan Laptop Kantor 2026 - Revisi",
        "status": "open"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::patch('admin/tenders/{id}/status', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender status updated successfully",
    "data": {
        "id": 101,
        "status": "open"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('tenders', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender list fetched successfully",
    "data": [
        {
            "id": 101,
            "title": "Pengadaan Laptop Kantor 2026",
            "description": "Tender pengadaan laptop untuk kebutuhan operasional kantor pusat.",
            "start_date": "2026-05-10 08:00:00",
            "end_date": "2026-05-20 17:00:00",
            "bidding_start": "2026-05-13 08:00:00",
            "bidding_end": "2026-05-15 23:59:59",
            "status": "open"
        },
        {
            "id": 102,
            "title": "Pengadaan Printer Kantor",
            "description": "Tender pengadaan printer untuk cabang Surabaya.",
            "start_date": "2026-05-11 08:00:00",
            "end_date": "2026-05-18 17:00:00",
            "bidding_start": "2026-05-14 08:00:00",
            "bidding_end": "2026-05-16 23:59:59",
            "status": "aanwijzing"
        }
    ],
    "meta": {
        "current_page": 1,
        "per_page": 10,
        "total": 2
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('tenders/{id}', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender detail fetched successfully",
    "data": {
        "id": 101,
        "title": "Pengadaan Laptop Kantor 2026",
        "description": "Tender pengadaan laptop untuk kebutuhan operasional kantor pusat.",
        "specification": "Processor minimal Intel Core i5, RAM 16GB, SSD 512GB, garansi resmi 2 tahun.",
        "start_date": "2026-05-10 08:00:00",
        "end_date": "2026-05-20 17:00:00",
        "aanwijzing_date": "2026-05-12 10:00:00",
        "bidding_start": "2026-05-13 08:00:00",
        "bidding_end": "2026-05-15 23:59:59",
        "status": "open"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::post('tenders/{id}/participants', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Successfully joined tender",
    "data": {
        "tender_id": 101,
        "vendor_id": 1,
        "joined_at": "2026-05-10 10:00:00"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('admin/tenders/{id}/participants', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Participants fetched successfully",
    "data": [
        {
            "vendor_id": 1,
            "company_name": "PT Maju Jaya",
            "joined_at": "2026-05-10 10:00:00"
        },
        {
            "vendor_id": 2,
            "company_name": "PT Sumber Makmur",
            "joined_at": "2026-05-10 11:00:00"
        }
    ]
}
JSON
, true);
    return response()->json($data);
});

Route::post('admin/tenders/{id}/announcements', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender announcement created successfully",
    "data": {
        "id": 1,
        "tender_id": 101,
        "title": "Perubahan Spesifikasi Tender",
        "content": "Vendor wajib menyertakan garansi resmi minimal 2 tahun dan dukungan service center di Indonesia.",
        "published_at": "2026-05-12 10:00:00"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('tenders/{id}/announcements', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender announcements fetched successfully",
    "data": [
        {
            "id": 1,
            "title": "Perubahan Spesifikasi Tender",
            "content": "Vendor wajib menyertakan garansi resmi minimal 2 tahun dan dukungan service center di Indonesia.",
            "published_at": "2026-05-12 10:00:00"
        },
        {
            "id": 2,
            "title": "Jadwal Aanwijzing",
            "content": "Sesi penjelasan tender dilaksanakan pada 12 Mei 2026 pukul 10:00 WIB.",
            "published_at": "2026-05-11 09:00:00"
        }
    ]
}
JSON
, true);
    return response()->json($data);
});

Route::post('tenders/{id}/bids', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Bid submitted successfully",
    "data": {
        "id": 1,
        "tender_id": 101,
        "vendor_id": 1,
        "bid_amount": 120000000,
        "notes": "Harga sudah termasuk pengiriman dan instalasi.",
        "submitted_at": "2026-05-13 10:00:00"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::put('tenders/{id}/bids/{bidId}', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Bid updated successfully",
    "data": {
        "id": 1,
        "tender_id": 101,
        "vendor_id": 1,
        "bid_amount": 118500000,
        "notes": "Revisi harga setelah penyesuaian spesifikasi.",
        "updated_at": "2026-05-13 12:00:00"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('tenders/{id}/bids/me', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Your bid fetched successfully",
    "data": {
        "id": 1,
        "tender_id": 101,
        "vendor_id": 1,
        "bid_amount": 118500000,
        "notes": "Revisi harga setelah penyesuaian spesifikasi.",
        "submitted_at": "2026-05-13 10:00:00",
        "updated_at": "2026-05-13 12:00:00"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('admin/tenders/{id}/bids', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Bid list fetched successfully",
    "data": [
        {
            "id": 1,
            "vendor_id": 1,
            "company_name": "PT Maju Jaya",
            "bid_amount": 118500000,
            "submitted_at": "2026-05-13 10:00:00",
            "updated_at": "2026-05-13 12:00:00"
        },
        {
            "id": 2,
            "vendor_id": 2,
            "company_name": "PT Sumber Makmur",
            "bid_amount": 119000000,
            "submitted_at": "2026-05-13 11:15:00",
            "updated_at": null
        }
    ]
}
JSON
, true);
    return response()->json($data);
});

Route::post('admin/tenders/{id}/winner', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender winner selected successfully",
    "data": {
        "tender_id": 101,
        "vendor_id": 1,
        "company_name": "PT Maju Jaya",
        "winning_bid_amount": 118500000,
        "selection_method": "lowest_price",
        "notes": "Dipilih berdasarkan harga penawaran terendah."
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('tenders/{id}/winner', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender winner fetched successfully",
    "data": {
        "tender_id": 101,
        "winner": {
            "vendor_id": 1,
            "company_name": "PT Maju Jaya"
        },
        "winning_bid_amount": 118500000,
        "selection_method": "lowest_price",
        "notes": "Dipilih berdasarkan harga penawaran terendah."
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('tenders/{id}/result', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Tender result fetched successfully",
    "data": {
        "tender_id": 101,
        "tender_title": "Pengadaan Laptop Kantor 2026",
        "winner": {
            "vendor_id": 1,
            "company_name": "PT Maju Jaya"
        },
        "winning_bid_amount": 118500000,
        "your_bid": {
            "bid_amount": 120000000,
            "status": "lost"
        },
        "final_status": "finished"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::post('admin/tenders/{id}/purchase-order', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Purchase order generated successfully",
    "data": {
        "po_id": 1,
        "tender_id": 101,
        "po_number": "PO-2026-001",
        "vendor": {
            "vendor_id": 1,
            "company_name": "PT Maju Jaya"
        },
        "amount": 118500000,
        "issued_date": "2026-05-20"
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('admin/tenders/{id}/purchase-order', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Purchase order fetched successfully",
    "data": {
        "po_id": 1,
        "po_number": "PO-2026-001",
        "tender_id": 101,
        "vendor": {
            "vendor_id": 1,
            "company_name": "PT Maju Jaya"
        },
        "amount": 118500000,
        "issued_date": "2026-05-20",
        "notes": "Purchase order untuk pengadaan laptop kantor."
    }
}
JSON
, true);
    return response()->json($data);
});

Route::get('admin/dashboard', function () {
    $data = json_decode(<<<'JSON'
{
    "status": "success",
    "message": "Dashboard data fetched successfully",
    "data": {
        "total_vendors": 20,
        "approved_vendors": 15,
        "pending_vendors": 5,
        "total_tenders": 10,
        "active_tenders": 3,
        "finished_tenders": 7,
        "total_participants": 30,
        "total_bids": 75,
        "lowest_bid": 115000000,
        "highest_bid": 130000000
    }
}
JSON
, true);
    return response()->json($data);
});

