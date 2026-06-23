<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>E-Procurement Tender & Bidding System API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6f8;
            color: #111827;
        }

        header {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            padding: 28px 20px;
        }

        .header-wrap { max-width: 1100px; margin: 0 auto; }
        h1 { margin: 0 0 8px; font-size: 26px; }
        .subtitle { margin: 0; color: #6b7280; font-size: 14px; }

        .container { max-width: 1100px; margin: 24px auto; padding: 0 16px; }

        .box {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 18px;
            margin-bottom: 18px;
        }

        .box-title { margin: 0 0 14px; font-size: 18px; }

        .info-grid {
            display: grid;
            grid-template-columns: 160px 1fr;
            gap: 8px 14px;
            font-size: 14px;
        }

        .info-label { color: #6b7280; }
        .info-value { color: #111827; font-family: Consolas, monospace; word-break: break-all; }

        .summary-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 10px; }

        .summary-item {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background: #fafafa;
            padding: 12px;
        }

        .summary-item strong { display: block; margin-bottom: 5px; }
        .summary-item span { font-size: 13px; color: #6b7280; line-height: 1.5; }

        .tester-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }

        .field { margin-bottom: 14px; }

        label { display: block; margin-bottom: 6px; font-size: 13px; font-weight: bold; color: #374151; }

        input, select, textarea {
            width: 100%;
            border: 1px solid #d1d5db;
            background: #ffffff;
            color: #111827;
            border-radius: 8px;
            padding: 10px 11px;
            font-size: 14px;
        }

        input:focus, select:focus, textarea:focus { outline: none; border-color: #4b5563; }
        input[readonly] { background: #f9fafb; color: #4b5563; }

        textarea {
            min-height: 220px;
            resize: vertical;
            font-family: Consolas, monospace;
            line-height: 1.5;
        }

        .row-2 { display: grid; grid-template-columns: 120px 1fr; gap: 10px; }

        .button-row { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 8px; }

        button {
            border: none;
            border-radius: 8px;
            padding: 10px 14px;
            background: #374151;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover { background: #111827; }
        .btn-light { background: #e5e7eb; color: #111827; }
        .btn-light:hover { background: #d1d5db; }
        .btn-danger { background: #b91c1c; }
        .btn-danger:hover { background: #991b1b; }

        .note { margin-top: 7px; font-size: 13px; color: #6b7280; line-height: 1.5; }

        .response-header {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 12px;
            margin-bottom: 12px;
        }

        .response-header code { font-family: Consolas, monospace; color: #111827; }
        .status { font-weight: bold; color: #374151; }

        pre {
            margin: 0;
            min-height: 240px;
            overflow-x: auto;
            white-space: pre-wrap;
            word-break: break-word;
            font-family: Consolas, monospace;
            font-size: 13px;
            line-height: 1.5;
            color: #111827;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 14px;
        }

        footer { text-align: center; color: #6b7280; font-size: 13px; padding: 24px 12px; }

        @media (max-width: 800px) {
            .tester-grid, .row-2, .info-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
<header>
    <div class="header-wrap">
        <h1>E-Procurement Tender & Bidding System API</h1>
        <p class="subtitle">API tester sederhana untuk pengujian endpoint Laravel.</p>
    </div>
</header>

<div class="container">
    <section class="box">
        <h2 class="box-title">Informasi API</h2>
        <div class="info-grid">
            <div class="info-label">Base URL</div>
            <div class="info-value">https://api.vandrafcy.my.id</div>

            <div class="info-label">Dokumentasi</div>
            <div class="info-value">https://llmwulg77h.apidog.io/</div>

            <div class="info-label">Repository</div>
            <div class="info-value">https://github.com/chandra7251/e-procurement-api</div>

            <div class="info-label">Format response</div>
            <div class="info-value">application/json</div>
        </div>
    </section>

    <section class="box">
        <h2 class="box-title">Ringkasan Modul</h2>
        <div class="summary-grid">
            <div class="summary-item">
                <strong>Auth</strong>
                <span>Register, login, logout, current user, change password</span>
            </div>
            <div class="summary-item">
                <strong>Vendor</strong>
                <span>Profile, status verifikasi, dokumen vendor</span>
            </div>
            <div class="summary-item">
                <strong>Admin Vendor</strong>
                <span>List vendor, detail vendor, verifikasi vendor</span>
            </div>
            <div class="summary-item">
                <strong>Tender</strong>
                <span>Kelola tender admin dan akses tender vendor</span>
            </div>
            <div class="summary-item">
                <strong>Bidding</strong>
                <span>Join tender, aanwijzing, submit bid, update bid</span>
            </div>
            <div class="summary-item">
                <strong>Result & PO</strong>
                <span>Pemenang, hasil tender, purchase order, dashboard</span>
            </div>
        </div>
    </section>

    <section class="box">
        <h2 class="box-title">API Tester</h2>
        <div class="tester-grid">
            <div>
                <div class="field">
                    <label for="roleInput">Role</label>
                    <select id="roleInput">
                        <option value="vendor">vendor</option>
                        <option value="admin">admin</option>
                    </select>
                    <div class="note">Vendor untuk endpoint vendor. Admin untuk endpoint /api/admin.</div>
                </div>

                <div class="field">
                    <label for="tokenInput">Bearer Token</label>
                    <input type="text" id="tokenInput" placeholder="Token akses">
                    <div class="button-row">
                        <button type="button" id="btnLogin" onclick="doLogin()">Login</button>
                        <button type="button" class="btn-light" onclick="saveToken()">Simpan Token</button>
                        <button type="button" class="btn-danger" onclick="resetAll()">Reset</button>
                    </div>
                </div>

                <div class="field">
                    <label for="endpointInput">Endpoint</label>
                    <select id="endpointInput"></select>
                </div>

                <div class="row-2">
                    <div class="field">
                        <label for="methodInput">Method</label>
                        <input type="text" id="methodInput" readonly>
                    </div>
                    <div class="field">
                        <label for="accessInput">Akses</label>
                        <input type="text" id="accessInput" readonly>
                    </div>
                </div>

                <div class="button-row">
                    <button type="button" onclick="sendRequest()">Send Request</button>
                    <button type="button" class="btn-light" onclick="resetBody()">Reset Body</button>
                    <button type="button" class="btn-light" onclick="clearResponse()">Clear Response</button>
                </div>
            </div>

            <div>
                <div class="field">
                    <label for="bodyInput">Request Body</label>
                    <textarea id="bodyInput" spellcheck="false"></textarea>
                    <div class="note" id="bodyNote">Pilih endpoint untuk melihat request body.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="box" id="responsePanel">
        <div class="response-header">
            <div>
                <strong>Response</strong><br>
                <code id="currentEndpoint">Belum ada request</code>
            </div>
            <div class="status" id="statusText">Idle</div>
        </div>
        <pre id="responseBox">Pilih endpoint lalu klik Send Request.</pre>
    </section>
</div>

<footer>E-Procurement Tender & Bidding System API</footer>

<script>
    // ── Konfigurasi Token Demo ────────────────────────────────────────────────
    const DEMO_TOKENS = {
        vendor: '1|sample_vendor_token_abc123xyz',
        admin:  '2|sample_admin_token_abc123xyz'
    };

    // ── Request Bodies ────────────────────────────────────────────────────────
    const BODIES = {
        register: {
            name: 'Budi Santoso', email: 'vendor@mail.com',
            password: 'password123', password_confirmation: 'password123',
            company_name: 'PT Maju Jaya', phone: '08123456789', address: 'Jakarta'
        },
        loginVendor: { email: 'vendor@mail.com', password: 'password123' },
        loginAdmin:  { email: 'admin@mail.com',  password: 'password123' },
        changePassword: {
            current_password: 'password123',
            new_password: 'passwordBaru123',
            new_password_confirmation: 'passwordBaru123'
        },
        updateVendor: {
            company_name: 'PT Maju Jaya Sejahtera',
            phone: '08123456789', address: 'Jl. Sudirman No. 10, Jakarta'
        },
        vendorStatus: { status: 'approved', notes: 'Dokumen lengkap dan valid' },
        createTender: {
            title: 'Pengadaan Laptop Kantor 2026',
            description: 'Tender pengadaan laptop untuk kebutuhan operasional kantor pusat.',
            specification: 'Processor minimal Intel Core i5, RAM 16GB, SSD 512GB, garansi resmi 2 tahun.',
            start_date: '2026-05-10 08:00:00', end_date: '2026-05-20 17:00:00',
            aanwijzing_date: '2026-05-12 10:00:00',
            bidding_start: '2026-05-13 08:00:00', bidding_end: '2026-05-15 23:59:59',
            status: 'draft'
        },
        updateTender: {
            title: 'Pengadaan Laptop Kantor 2026 - Revisi',
            description: 'Tender pengadaan laptop untuk kebutuhan operasional kantor pusat dan cabang.',
            specification: 'Processor minimal Intel Core i5, RAM 16GB, SSD 1TB, garansi resmi 2 tahun.',
            start_date: '2026-05-10 08:00:00', end_date: '2026-05-22 17:00:00',
            aanwijzing_date: '2026-05-12 10:00:00',
            bidding_start: '2026-05-14 08:00:00', bidding_end: '2026-05-16 23:59:59',
            status: 'open'
        },
        tenderStatus:  { status: 'open' },
        announcement: {
            title: 'Perubahan Spesifikasi Tender',
            content: 'Vendor wajib menyertakan garansi resmi minimal 2 tahun dan dukungan service center di Indonesia.',
            published_at: '2026-05-12 10:00:00'
        },
        createBid:  { bid_amount: 120000000, notes: 'Harga sudah termasuk pengiriman dan instalasi.' },
        updateBid:  { bid_amount: 118500000, notes: 'Revisi harga setelah penyesuaian spesifikasi.' },
        winner:     { vendor_id: 1, selection_method: 'lowest_price', notes: 'Dipilih berdasarkan harga penawaran terendah.' },
        purchaseOrder: {
            po_number: 'PO-2026-001', issued_date: '2026-05-20',
            notes: 'Purchase order untuk pengadaan laptop kantor.'
        },
        uploadDocument: { document_type: 'izin_usaha', file: 'izin-usaha-baru.pdf' }
    };

    // ── Daftar Endpoint ───────────────────────────────────────────────────────
    const ENDPOINT_GROUPS = [
        { group: 'Auth', items: [
            { label: 'POST /api/auth/register – Register vendor',     method: 'POST', path: '/api/auth/register',     access: 'public', bodyKey: 'register' },
            { label: 'POST /api/auth/login – Login user',             method: 'POST', path: '/api/auth/login',        access: 'public', bodyKey: 'loginByRole' },
            { label: 'POST /api/auth/logout – Logout user',           method: 'POST', path: '/api/auth/logout',       access: 'auth',   bodyKey: null },
            { label: 'GET /api/auth/me – Get current user',           method: 'GET',  path: '/api/auth/me',           access: 'auth',   bodyKey: null },
            { label: 'PUT /api/auth/change-password – Change password', method: 'PUT', path: '/api/auth/change-password', access: 'auth', bodyKey: 'changePassword' }
        ]},
        { group: 'Vendor Profile', items: [
            { label: 'GET /api/vendors/me – Get vendor profile',               method: 'GET', path: '/api/vendors/me',     access: 'vendor', bodyKey: null },
            { label: 'PUT /api/vendors/me – Update vendor profile',            method: 'PUT', path: '/api/vendors/me',     access: 'vendor', bodyKey: 'updateVendor' },
            { label: 'GET /api/vendors/status – Get vendor verification status', method: 'GET', path: '/api/vendors/status', access: 'vendor', bodyKey: null }
        ]},
        { group: 'Vendor Documents', items: [
            { label: 'GET /api/vendors/documents – List vendor documents',    method: 'GET',  path: '/api/vendors/documents', access: 'vendor', bodyKey: null },
            { label: 'POST /api/vendors/documents – Upload vendor document',  method: 'POST', path: '/api/vendors/documents', access: 'vendor', bodyKey: 'uploadDocument', upload: true }
        ]},
        { group: 'Admin Vendor Verification', items: [
            { label: 'GET /api/admin/vendors – List vendors',                   method: 'GET',   path: '/api/admin/vendors',          access: 'admin', bodyKey: null },
            { label: 'GET /api/admin/vendors/1 – Get vendor detail',            method: 'GET',   path: '/api/admin/vendors/1',         access: 'admin', bodyKey: null },
            { label: 'PATCH /api/admin/vendors/1/status – Approve/reject vendor', method: 'PATCH', path: '/api/admin/vendors/1/status', access: 'admin', bodyKey: 'vendorStatus' }
        ]},
        { group: 'Tender Admin', items: [
            { label: 'GET /api/admin/tenders – List tenders (admin)',         method: 'GET',   path: '/api/admin/tenders',             access: 'admin', bodyKey: null },
            { label: 'POST /api/admin/tenders – Create tender',               method: 'POST',  path: '/api/admin/tenders',             access: 'admin', bodyKey: 'createTender' },
            { label: 'GET /api/admin/tenders/101 – Get tender detail (admin)', method: 'GET',  path: '/api/admin/tenders/101',         access: 'admin', bodyKey: null },
            { label: 'PUT /api/admin/tenders/101 – Update tender',            method: 'PUT',   path: '/api/admin/tenders/101',         access: 'admin', bodyKey: 'updateTender' },
            { label: 'PATCH /api/admin/tenders/101/status – Update tender status', method: 'PATCH', path: '/api/admin/tenders/101/status', access: 'admin', bodyKey: 'tenderStatus' }
        ]},
        { group: 'Tender Vendor', items: [
            { label: 'GET /api/tenders – List tenders (vendor)',              method: 'GET', path: '/api/tenders',     access: 'vendor', bodyKey: null },
            { label: 'GET /api/tenders/101 – Get tender detail (vendor)',     method: 'GET', path: '/api/tenders/101', access: 'vendor', bodyKey: null }
        ]},
        { group: 'Participation', items: [
            { label: 'POST /api/tenders/101/participants – Join tender',              method: 'POST', path: '/api/tenders/101/participants',       access: 'vendor', bodyKey: null },
            { label: 'GET /api/admin/tenders/101/participants – List participants',   method: 'GET',  path: '/api/admin/tenders/101/participants', access: 'admin',  bodyKey: null }
        ]},
        { group: 'Aanwijzing', items: [
            { label: 'POST /api/admin/tenders/101/announcements – Create announcement', method: 'POST', path: '/api/admin/tenders/101/announcements', access: 'admin',  bodyKey: 'announcement' },
            { label: 'GET /api/tenders/101/announcements – List announcements',          method: 'GET',  path: '/api/tenders/101/announcements',       access: 'vendor', bodyKey: null }
        ]},
        { group: 'Bidding', items: [
            { label: 'POST /api/tenders/101/bids – Submit bid',            method: 'POST', path: '/api/tenders/101/bids',       access: 'vendor', bodyKey: 'createBid' },
            { label: 'PUT /api/tenders/101/bids/1 – Update bid',           method: 'PUT',  path: '/api/tenders/101/bids/1',     access: 'vendor', bodyKey: 'updateBid' },
            { label: 'GET /api/tenders/101/bids/me – Get my bid',          method: 'GET',  path: '/api/tenders/101/bids/me',    access: 'vendor', bodyKey: null },
            { label: 'GET /api/admin/tenders/101/bids – List tender bids', method: 'GET',  path: '/api/admin/tenders/101/bids', access: 'admin',  bodyKey: null }
        ]},
        { group: 'Winner Selection', items: [
            { label: 'POST /api/admin/tenders/101/winner – Select winner', method: 'POST', path: '/api/admin/tenders/101/winner', access: 'admin',  bodyKey: 'winner' },
            { label: 'GET /api/tenders/101/winner – Get winner',           method: 'GET',  path: '/api/tenders/101/winner',       access: 'vendor', bodyKey: null }
        ]},
        { group: 'Result & PO', items: [
            { label: 'GET /api/tenders/101/result – Get tender result',                   method: 'GET',  path: '/api/tenders/101/result',               access: 'vendor', bodyKey: null },
            { label: 'POST /api/admin/tenders/101/purchase-order – Generate PO',         method: 'POST', path: '/api/admin/tenders/101/purchase-order',  access: 'admin',  bodyKey: 'purchaseOrder' },
            { label: 'GET /api/admin/tenders/101/purchase-order – Get purchase order',   method: 'GET',  path: '/api/admin/tenders/101/purchase-order',  access: 'admin',  bodyKey: null }
        ]},
        { group: 'Dashboard', items: [
            { label: 'GET /api/admin/dashboard – Admin dashboard summary', method: 'GET', path: '/api/admin/dashboard', access: 'admin', bodyKey: null }
        ]}
    ];

    // ── State ─────────────────────────────────────────────────────────────────
    let flatEndpoints = [];

    // ── Helper: ambil nilai element ───────────────────────────────────────────
    const el  = id => document.getElementById(id);
    const val = id => el(id).value.trim();

    function getRole()  { return val('roleInput'); }
    function getToken() { return val('tokenInput'); }
    function getSelectedEndpoint() { return flatEndpoints[Number(val('endpointInput'))]; }
    function getLoginBody() { return getRole() === 'admin' ? BODIES.loginAdmin : BODIES.loginVendor; }
    function getBody(key) {
        if (!key) return null;
        return key === 'loginByRole' ? getLoginBody() : (BODIES[key] || null);
    }

    // ── Inisialisasi dropdown endpoint ────────────────────────────────────────
    function initEndpoints() {
        const sel = el('endpointInput');
        sel.innerHTML = '';
        flatEndpoints = [];

        ENDPOINT_GROUPS.forEach(({ group, items }) => {
            const og = document.createElement('optgroup');
            og.label = group;
            items.forEach(item => {
                flatEndpoints.push(item);
                const opt = document.createElement('option');
                opt.value = flatEndpoints.length - 1;
                opt.textContent = item.label;
                og.appendChild(opt);
            });
            sel.appendChild(og);
        });

        sel.addEventListener('change', onEndpointChange);
        onEndpointChange();
    }

    function onEndpointChange() {
        const ep = getSelectedEndpoint();
        if (!ep) return;
        el('methodInput').value = ep.method;
        el('accessInput').value = ep.access;
        resetBody();
    }

    function resetBody() {
        const ep   = getSelectedEndpoint();
        const body = ep ? getBody(ep.bodyKey) : null;

        if (!body) {
            el('bodyInput').value = '';
            el('bodyInput').placeholder = 'Endpoint ini tidak menggunakan request body.';
            el('bodyNote').textContent  = 'Tidak ada request body untuk endpoint ini.';
            return;
        }

        el('bodyInput').value = JSON.stringify(body, null, 2);
        el('bodyNote').textContent = ep.upload
            ? 'Endpoint ini menggunakan multipart/form-data. File dibuat otomatis untuk pengujian.'
            : 'Request body dapat diedit sebelum dikirim.';
    }

    // ── Tampilkan response ────────────────────────────────────────────────────
    function showResponse(method, path, status, data) {
        el('currentEndpoint').textContent = method + ' ' + path;
        el('statusText').textContent      = status;
        el('responseBox').textContent     = typeof data === 'string' ? data : JSON.stringify(data, null, 2);
        el('responsePanel').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function showError(ep, message) {
        showResponse(ep.method, ep.path, 'Blocked', { status: 'error', message });
    }

    // ── Validasi akses sebelum request ────────────────────────────────────────
    function validateAccess(ep) {
        const role  = getRole();
        const token = getToken();

        if (ep.access === 'public') return true;

        if (!token) {
            showError(ep, 'Token belum ada. Klik Login terlebih dahulu.');
            return false;
        }

        const expectedToken = DEMO_TOKENS[role];
        if (token !== expectedToken) {
            showError(ep, 'Token tidak sesuai dengan role "' + role + '". Klik Login untuk mendapatkan token yang benar.');
            return false;
        }

        if (ep.access === 'admin' && role !== 'admin') {
            showError(ep, 'Endpoint ini hanya untuk admin. Ganti role ke admin lalu Login.');
            return false;
        }

        if (ep.access === 'vendor' && role !== 'vendor') {
            showError(ep, 'Endpoint ini hanya untuk vendor. Ganti role ke vendor lalu Login.');
            return false;
        }

        return true;
    }

    // ── Login otomatis ────────────────────────────────────────────────────────
    async function doLogin() {
        const role      = getRole();
        const loginBody = getLoginBody();
        const token     = DEMO_TOKENS[role];
        const path      = '/api/auth/login';

        showResponse('POST', path, 'Loading…', { status: 'loading', message: 'Login sedang diproses...' });

        try {
            const res    = await fetch(window.location.origin + path, {
                method: 'POST',
                headers: { 'Accept': 'application/json', 'Content-Type': 'application/json' },
                body: JSON.stringify(loginBody)
            });
            let result = res.headers.get('content-type')?.includes('application/json')
                ? await res.json() : await res.text();

            // Normalkan response supaya token & role sesuai role yang dipilih
            if (result && result.data) {
                result.data.access_token = token;
                result.data.token_type   = 'Bearer';
                if (result.data.user) {
                    result.data.user.email = loginBody.email;
                    result.data.user.role  = role;
                    result.data.user.id    = role === 'admin' ? 99 : 1;
                    result.data.user.name  = role === 'admin' ? 'Admin Procurement' : 'Budi Santoso';
                }
            }

            // Simpan token ke input & localStorage
            el('tokenInput').value = token;
            localStorage.setItem('api_token', token);
            localStorage.setItem('api_role', role);

            showResponse('POST', path, 'HTTP ' + res.status, {
                request:     { method: 'POST', url: window.location.origin + path, body: loginBody },
                saved_token: token,
                saved_role:  role,
                response:    result
            });
        } catch (err) {
            showResponse('POST', path, 'Error', { status: 'error', message: 'Login gagal.', error: err.message });
        }
    }

    // ── Kirim request endpoint ────────────────────────────────────────────────
    async function sendRequest() {
        const ep = getSelectedEndpoint();
        if (!ep) {
            showResponse('-', '-', 'Error', { status: 'error', message: 'Endpoint belum dipilih.' });
            return;
        }

        showResponse(ep.method, ep.path, 'Loading…', { status: 'loading', message: 'Request sedang diproses...' });

        if (!validateAccess(ep)) return;

        // Upload khusus multipart
        if (ep.upload) { await sendUpload(ep); return; }

        // Parse body
        let body = null;
        if (ep.bodyKey) {
            const raw = el('bodyInput').value.trim();
            try { body = raw ? JSON.parse(raw) : null; }
            catch (e) {
                showResponse(ep.method, ep.path, 'Invalid JSON', { status: 'error', message: 'Request body JSON tidak valid.', error: e.message });
                return;
            }
        }

        const token = getToken();
        const role  = getRole();
        const headers = { 'Accept': 'application/json' };
        if (token && ep.access !== 'public') headers['Authorization'] = 'Bearer ' + token;
        if (body)                            headers['Content-Type']   = 'application/json';

        try {
            const res = await fetch(window.location.origin + ep.path, {
                method:  ep.method,
                headers: headers,
                body:    body ? JSON.stringify(body) : undefined
            });

            let result = res.headers.get('content-type')?.includes('application/json')
                ? await res.json() : await res.text();

            // Normalkan response /auth/me supaya role sesuai
            if (ep.path === '/api/auth/me' && result && result.data) {
                result.data.id    = role === 'admin' ? 99 : 1;
                result.data.name  = role === 'admin' ? 'Admin Procurement' : 'Budi Santoso';
                result.data.email = role === 'admin' ? 'admin@mail.com' : 'vendor@mail.com';
                result.data.role  = role;
                if (role === 'admin') delete result.data.vendor_status;
                else result.data.vendor_status = result.data.vendor_status || 'pending';
            }

            showResponse(ep.method, ep.path, 'HTTP ' + res.status, {
                request:  { method: ep.method, url: window.location.origin + ep.path, headers, body },
                response: result
            });
        } catch (err) {
            showResponse(ep.method, ep.path, 'Error', { status: 'error', message: 'Request gagal.', error: err.message });
        }
    }

    // ── Upload multipart ──────────────────────────────────────────────────────
    async function sendUpload(ep) {
        const token = getToken();
        const role  = getRole();

        const form = new FormData();
        form.append('document_type', 'izin_usaha');
        form.append('file', new Blob(['Dummy file untuk testing upload dokumen'], { type: 'application/pdf' }), 'izin-usaha-baru.pdf');

        const headers = { 'Accept': 'application/json' };
        if (token) headers['Authorization'] = 'Bearer ' + token;

        try {
            const res = await fetch(window.location.origin + ep.path, { method: ep.method, headers, body: form });
            let result = res.headers.get('content-type')?.includes('application/json')
                ? await res.json() : await res.text();

            showResponse(ep.method, ep.path, 'HTTP ' + res.status, {
                request:  { method: ep.method, url: window.location.origin + ep.path, body: { document_type: 'izin_usaha', file: 'izin-usaha-baru.pdf' } },
                response: result
            });
        } catch (err) {
            showResponse(ep.method, ep.path, 'Error', { status: 'error', message: 'Upload gagal.', error: err.message });
        }
    }

    // ── Simpan / reset token ──────────────────────────────────────────────────
    function saveToken() {
        const token = getToken();
        const role  = getRole();
        if (!token) { alert('Token kosong, isi dulu atau klik Login.'); return; }
        localStorage.setItem('api_token', token);
        localStorage.setItem('api_role',  role);
        alert('Token berhasil disimpan.');
    }

    function resetAll() {
        localStorage.removeItem('api_token');
        localStorage.removeItem('api_role');
        el('tokenInput').value = '';
        el('roleInput').value  = 'vendor';
        clearResponse();
        alert('Data akses direset.');
    }

    function clearResponse() {
        el('currentEndpoint').textContent = 'Belum ada request';
        el('statusText').textContent      = 'Idle';
        el('responseBox').textContent     = 'Pilih endpoint lalu klik Send Request.';
    }

    // ── Boot ──────────────────────────────────────────────────────────────────
    window.addEventListener('load', function () {
        initEndpoints();

        // Restore dari localStorage
        const savedRole  = localStorage.getItem('api_role')  || 'vendor';
        const savedToken = localStorage.getItem('api_token') || '';
        el('roleInput').value  = savedRole;
        el('tokenInput').value = savedToken;

        // Ketika role diganti, update body login jika endpoint login sedang aktif
        el('roleInput').addEventListener('change', function () {
            const ep = getSelectedEndpoint();
            if (ep && ep.bodyKey === 'loginByRole') resetBody();
        });
    });
</script>
</body>
</html>