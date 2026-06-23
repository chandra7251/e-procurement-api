<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>E-Procurement Tender & Bidding System API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f6f7f9;
        color: #1f2937;
    }

    header {
        background: #ffffff;
        border-bottom: 1px solid #e5e7eb;
        padding: 28px 20px;
    }

    .header-wrap {
        max-width: 1100px;
        margin: 0 auto;
    }

    h1 {
        margin: 0 0 8px;
        font-size: 26px;
        font-weight: 700;
        color: #111827;
    }

    .subtitle {
        margin: 0;
        color: #6b7280;
        font-size: 14px;
    }

    .container {
        max-width: 1100px;
        margin: 24px auto;
        padding: 0 16px;
    }

    .card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 18px;
        margin-bottom: 18px;
    }

    .card-title {
        margin: 0 0 12px;
        font-size: 18px;
        font-weight: 700;
        color: #111827;
    }

    .info-grid {
        display: grid;
        grid-template-columns: 160px 1fr;
        gap: 8px 14px;
        font-size: 14px;
    }

    .info-label {
        color: #6b7280;
    }

    .info-value {
        color: #111827;
        font-family: Consolas, monospace;
        word-break: break-all;
    }

    .summary-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 10px;
    }

    .summary-item {
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 12px;
        background: #fafafa;
    }

    .summary-item strong {
        display: block;
        margin-bottom: 4px;
        color: #111827;
    }

    .summary-item span {
        font-size: 13px;
        color: #6b7280;
    }

    .tester-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }

    .field {
        margin-bottom: 14px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-size: 13px;
        font-weight: 700;
        color: #374151;
    }

    input,
    select,
    textarea {
        width: 100%;
        border: 1px solid #d1d5db;
        background: #ffffff;
        color: #111827;
        border-radius: 8px;
        padding: 10px 11px;
        font-size: 14px;
    }

    input:focus,
    select:focus,
    textarea:focus {
        outline: none;
        border-color: #4b5563;
    }

    input[readonly] {
        background: #f9fafb;
        color: #4b5563;
    }

    textarea {
        min-height: 220px;
        resize: vertical;
        font-family: Consolas, monospace;
        line-height: 1.5;
    }

    .button-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 8px;
    }

    button {
        border: none;
        border-radius: 8px;
        padding: 10px 14px;
        background: #374151;
        color: #ffffff;
        font-weight: 700;
        cursor: pointer;
    }

    button:hover {
        background: #111827;
    }

    .btn-light {
        background: #e5e7eb;
        color: #111827;
    }

    .btn-light:hover {
        background: #d1d5db;
    }

    .btn-danger {
        background: #b91c1c;
    }

    .btn-danger:hover {
        background: #991b1b;
    }

    .method-row {
        display: grid;
        grid-template-columns: 120px 1fr;
        gap: 10px;
    }

    .response-header {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        flex-wrap: wrap;
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 12px;
        margin-bottom: 12px;
    }

    .response-header code {
        color: #111827;
        font-family: Consolas, monospace;
        font-size: 14px;
    }

    .status {
        font-weight: 700;
        color: #374151;
    }

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

    .small-note {
        margin-top: 8px;
        font-size: 13px;
        color: #6b7280;
        line-height: 1.5;
    }

    footer {
        text-align: center;
        color: #6b7280;
        font-size: 13px;
        padding: 24px 12px;
    }

    @media (max-width: 800px) {
        .tester-grid {
            grid-template-columns: 1fr;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }

        .method-row {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>
    <header>
        <div class="header-wrap">
            <h1>E-Procurement Tender & Bidding System API</h1>
            <p class="subtitle">API tester sederhana untuk kebutuhan pengujian endpoint Laravel.</p>
        </div>
    </header>

    <div class="container">
        <section class="card">
            <h2 class="card-title">Informasi API</h2>

            <div class="info-grid">
                <div class="info-label">Base URL</div>
                <div class="info-value">https://api.vandrafcy.my.id</div>

                <div class="info-label">Dokumentasi</div>
                <div class="info-value">https://llmwulg77h.apidog.io/</div>

                <div class="info-label">Repository</div>
                <div class="info-value">https://github.com/chandra7251/e-procurement-api</div>

                <div class="info-label">Response</div>
                <div class="info-value">application/json</div>
            </div>
        </section>

        <section class="card">
            <h2 class="card-title">Ringkasan Modul</h2>

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

        <section class="card">
            <h2 class="card-title">API Tester</h2>

            <div class="tester-grid">
                <div>
                    <div class="field">
                        <label for="roleInput">Role</label>
                        <select id="roleInput">
                            <option value="vendor">vendor</option>
                            <option value="admin">admin</option>
                        </select>
                        <div class="small-note">
                            Vendor digunakan untuk endpoint vendor. Admin digunakan untuk endpoint /api/admin.
                        </div>
                    </div>

                    <div class="field">
                        <label for="tokenInput">Bearer Token</label>
                        <input type="text" id="tokenInput" placeholder="Token akses">
                        <div class="button-row">
                            <button type="button" onclick="loginAndSaveToken()">Login</button>
                            <button type="button" class="btn-light" onclick="saveToken()">Simpan Token</button>
                            <button type="button" class="btn-danger" onclick="clearToken()">Reset</button>
                        </div>
                    </div>

                    <div class="field">
                        <label for="endpointInput">Endpoint</label>
                        <select id="endpointInput"></select>
                    </div>

                    <div class="method-row">
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
                        <button type="button" onclick="sendSelectedRequest()">Send Request</button>
                        <button type="button" class="btn-light" onclick="resetRequestBody()">Reset Body</button>
                        <button type="button" class="btn-light" onclick="clearResponse()">Clear Response</button>
                    </div>
                </div>

                <div>
                    <div class="field">
                        <label for="bodyInput">Request Body</label>
                        <textarea id="bodyInput" spellcheck="false"></textarea>
                        <div class="small-note" id="bodyNote">
                            Pilih endpoint untuk melihat request body.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="card" id="responsePanel">
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

    <footer>
        E-Procurement Tender & Bidding System API
    </footer>

    <script>
    const baseUrl = window.location.origin;

    const demoTokens = {
        vendor: "1|sample_vendor_token_abc123xyz",
        admin: "2|sample_admin_token_abc123xyz"
    };

    const requestBodies = {
        register: {
            name: "Budi Santoso",
            email: "vendor@mail.com",
            password: "password123",
            password_confirmation: "password123",
            company_name: "PT Maju Jaya",
            phone: "08123456789",
            address: "Jakarta"
        },
        loginVendor: {
            email: "vendor@mail.com",
            password: "password123"
        },
        loginAdmin: {
            email: "admin@mail.com",
            password: "password123"
        },
        changePassword: {
            current_password: "password123",
            new_password: "passwordBaru123",
            new_password_confirmation: "passwordBaru123"
        },
        updateVendor: {
            company_name: "PT Maju Jaya Sejahtera",
            phone: "08123456789",
            address: "Jl. Sudirman No. 10, Jakarta"
        },
        vendorStatus: {
            status: "approved",
            notes: "Dokumen lengkap dan valid"
        },
        createTender: {
            title: "Pengadaan Laptop Kantor 2026",
            description: "Tender pengadaan laptop untuk kebutuhan operasional kantor pusat.",
            specification: "Processor minimal Intel Core i5, RAM 16GB, SSD 512GB, garansi resmi 2 tahun.",
            start_date: "2026-05-10 08:00:00",
            end_date: "2026-05-20 17:00:00",
            aanwijzing_date: "2026-05-12 10:00:00",
            bidding_start: "2026-05-13 08:00:00",
            bidding_end: "2026-05-15 23:59:59",
            status: "draft"
        },
        updateTender: {
            title: "Pengadaan Laptop Kantor 2026 - Revisi",
            description: "Tender pengadaan laptop untuk kebutuhan operasional kantor pusat dan cabang.",
            specification: "Processor minimal Intel Core i5, RAM 16GB, SSD 1TB, garansi resmi 2 tahun.",
            start_date: "2026-05-10 08:00:00",
            end_date: "2026-05-22 17:00:00",
            aanwijzing_date: "2026-05-12 10:00:00",
            bidding_start: "2026-05-14 08:00:00",
            bidding_end: "2026-05-16 23:59:59",
            status: "open"
        },
        tenderStatus: {
            status: "open"
        },
        announcement: {
            title: "Perubahan Spesifikasi Tender",
            content: "Vendor wajib menyertakan garansi resmi minimal 2 tahun dan dukungan service center di Indonesia.",
            published_at: "2026-05-12 10:00:00"
        },
        createBid: {
            bid_amount: 120000000,
            notes: "Harga sudah termasuk pengiriman dan instalasi."
        },
        updateBid: {
            bid_amount: 118500000,
            notes: "Revisi harga setelah penyesuaian spesifikasi."
        },
        winner: {
            vendor_id: 1,
            selection_method: "lowest_price",
            notes: "Dipilih berdasarkan harga penawaran terendah."
        },
        purchaseOrder: {
            po_number: "PO-2026-001",
            issued_date: "2026-05-20",
            notes: "Purchase order untuk pengadaan laptop kantor."
        },
        uploadDocument: {
            document_type: "izin_usaha",
            file: "izin-usaha-baru.pdf"
        }
    };

    const endpointGroups = [{
            group: "Auth",
            items: [{
                    label: "POST /api/auth/register - Register vendor",
                    method: "POST",
                    path: "/api/auth/register",
                    access: "public",
                    bodyKey: "register",
                    contentType: "application/json"
                },
                {
                    label: "POST /api/auth/login - Login user",
                    method: "POST",
                    path: "/api/auth/login",
                    access: "public",
                    bodyKey: "loginByRole",
                    contentType: "application/json"
                },
                {
                    label: "POST /api/auth/logout - Logout user",
                    method: "POST",
                    path: "/api/auth/logout",
                    access: "auth",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "GET /api/auth/me - Get current user",
                    method: "GET",
                    path: "/api/auth/me",
                    access: "auth",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "PUT /api/auth/change-password - Change password",
                    method: "PUT",
                    path: "/api/auth/change-password",
                    access: "auth",
                    bodyKey: "changePassword",
                    contentType: "application/json"
                }
            ]
        },
        {
            group: "Vendor Profile",
            items: [{
                    label: "GET /api/vendors/me - Get vendor profile",
                    method: "GET",
                    path: "/api/vendors/me",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "PUT /api/vendors/me - Update vendor profile",
                    method: "PUT",
                    path: "/api/vendors/me",
                    access: "vendor",
                    bodyKey: "updateVendor",
                    contentType: "application/json"
                },
                {
                    label: "GET /api/vendors/status - Get vendor verification status",
                    method: "GET",
                    path: "/api/vendors/status",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                }
            ]
        },
        {
            group: "Vendor Documents",
            items: [{
                    label: "GET /api/vendors/documents - List vendor documents",
                    method: "GET",
                    path: "/api/vendors/documents",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "POST /api/vendors/documents - Upload vendor document",
                    method: "POST",
                    path: "/api/vendors/documents",
                    access: "vendor",
                    bodyKey: "uploadDocument",
                    contentType: "multipart/form-data",
                    upload: true
                }
            ]
        },
        {
            group: "Admin Vendor Verification",
            items: [{
                    label: "GET /api/admin/vendors - List vendors",
                    method: "GET",
                    path: "/api/admin/vendors",
                    access: "admin",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "GET /api/admin/vendors/1 - Get vendor detail",
                    method: "GET",
                    path: "/api/admin/vendors/1",
                    access: "admin",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "PATCH /api/admin/vendors/1/status - Approve or reject vendor",
                    method: "PATCH",
                    path: "/api/admin/vendors/1/status",
                    access: "admin",
                    bodyKey: "vendorStatus",
                    contentType: "application/json"
                }
            ]
        },
        {
            group: "Tender Admin",
            items: [{
                    label: "GET /api/admin/tenders - List tenders for admin",
                    method: "GET",
                    path: "/api/admin/tenders",
                    access: "admin",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "POST /api/admin/tenders - Create tender",
                    method: "POST",
                    path: "/api/admin/tenders",
                    access: "admin",
                    bodyKey: "createTender",
                    contentType: "application/json"
                },
                {
                    label: "GET /api/admin/tenders/101 - Get tender detail for admin",
                    method: "GET",
                    path: "/api/admin/tenders/101",
                    access: "admin",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "PUT /api/admin/tenders/101 - Update tender",
                    method: "PUT",
                    path: "/api/admin/tenders/101",
                    access: "admin",
                    bodyKey: "updateTender",
                    contentType: "application/json"
                },
                {
                    label: "PATCH /api/admin/tenders/101/status - Update tender status",
                    method: "PATCH",
                    path: "/api/admin/tenders/101/status",
                    access: "admin",
                    bodyKey: "tenderStatus",
                    contentType: "application/json"
                }
            ]
        },
        {
            group: "Tender Vendor",
            items: [{
                    label: "GET /api/tenders - List tenders for vendor",
                    method: "GET",
                    path: "/api/tenders",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "GET /api/tenders/101 - Get tender detail for vendor",
                    method: "GET",
                    path: "/api/tenders/101",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                }
            ]
        },
        {
            group: "Participation",
            items: [{
                    label: "POST /api/tenders/101/participants - Join tender",
                    method: "POST",
                    path: "/api/tenders/101/participants",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "GET /api/admin/tenders/101/participants - List tender participants",
                    method: "GET",
                    path: "/api/admin/tenders/101/participants",
                    access: "admin",
                    bodyKey: null,
                    contentType: null
                }
            ]
        },
        {
            group: "Aanwijzing",
            items: [{
                    label: "POST /api/admin/tenders/101/announcements - Create tender announcement",
                    method: "POST",
                    path: "/api/admin/tenders/101/announcements",
                    access: "admin",
                    bodyKey: "announcement",
                    contentType: "application/json"
                },
                {
                    label: "GET /api/tenders/101/announcements - List tender announcements",
                    method: "GET",
                    path: "/api/tenders/101/announcements",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                }
            ]
        },
        {
            group: "Bidding",
            items: [{
                    label: "POST /api/tenders/101/bids - Submit bid",
                    method: "POST",
                    path: "/api/tenders/101/bids",
                    access: "vendor",
                    bodyKey: "createBid",
                    contentType: "application/json"
                },
                {
                    label: "PUT /api/tenders/101/bids/1 - Update bid",
                    method: "PUT",
                    path: "/api/tenders/101/bids/1",
                    access: "vendor",
                    bodyKey: "updateBid",
                    contentType: "application/json"
                },
                {
                    label: "GET /api/tenders/101/bids/me - Get my bid",
                    method: "GET",
                    path: "/api/tenders/101/bids/me",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "GET /api/admin/tenders/101/bids - List tender bids",
                    method: "GET",
                    path: "/api/admin/tenders/101/bids",
                    access: "admin",
                    bodyKey: null,
                    contentType: null
                }
            ]
        },
        {
            group: "Winner Selection",
            items: [{
                    label: "POST /api/admin/tenders/101/winner - Select winner",
                    method: "POST",
                    path: "/api/admin/tenders/101/winner",
                    access: "admin",
                    bodyKey: "winner",
                    contentType: "application/json"
                },
                {
                    label: "GET /api/tenders/101/winner - Get winner",
                    method: "GET",
                    path: "/api/tenders/101/winner",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                }
            ]
        },
        {
            group: "Result & PO",
            items: [{
                    label: "GET /api/tenders/101/result - Get tender result",
                    method: "GET",
                    path: "/api/tenders/101/result",
                    access: "vendor",
                    bodyKey: null,
                    contentType: null
                },
                {
                    label: "POST /api/admin/tenders/101/purchase-order - Generate purchase order",
                    method: "POST",
                    path: "/api/admin/tenders/101/purchase-order",
                    access: "admin",
                    bodyKey: "purchaseOrder",
                    contentType: "application/json"
                },
                {
                    label: "GET /api/admin/tenders/101/purchase-order - Get purchase order",
                    method: "GET",
                    path: "/api/admin/tenders/101/purchase-order",
                    access: "admin",
                    bodyKey: null,
                    contentType: null
                }
            ]
        },
        {
            group: "Dashboard",
            items: [{
                label: "GET /api/admin/dashboard - Admin dashboard summary",
                method: "GET",
                path: "/api/admin/dashboard",
                access: "admin",
                bodyKey: null,
                contentType: null
            }]
        }
    ];

    let flatEndpoints = [];

    function initEndpointSelect() {
        const endpointInput = document.getElementById("endpointInput");
        endpointInput.innerHTML = "";
        flatEndpoints = [];

        endpointGroups.forEach(function(group) {
            const optionGroup = document.createElement("optgroup");
            optionGroup.label = group.group;

            group.items.forEach(function(item) {
                flatEndpoints.push(item);

                const option = document.createElement("option");
                option.value = String(flatEndpoints.length - 1);
                option.textContent = item.label;

                optionGroup.appendChild(option);
            });

            endpointInput.appendChild(optionGroup);
        });

        endpointInput.addEventListener("change", updateSelectedEndpoint);
        updateSelectedEndpoint();
    }

    function getSelectedEndpoint() {
        const selectedIndex = Number(document.getElementById("endpointInput").value);
        return flatEndpoints[selectedIndex];
    }

    function getCurrentRole() {
        return document.getElementById("roleInput").value;
    }

    function getCurrentToken() {
        return document.getElementById("tokenInput").value.trim();
    }

    function getDemoTokenByRole(role) {
        return role === "admin" ? demoTokens.admin : demoTokens.vendor;
    }

    function getLoginBodyByRole() {
        return getCurrentRole() === "admin" ?
            requestBodies.loginAdmin :
            requestBodies.loginVendor;
    }

    function getBodyByKey(bodyKey) {
        if (!bodyKey) {
            return null;
        }

        if (bodyKey === "loginByRole") {
            return getLoginBodyByRole();
        }

        return requestBodies[bodyKey] || null;
    }

    function updateSelectedEndpoint() {
        const endpoint = getSelectedEndpoint();

        document.getElementById("methodInput").value = endpoint.method;
        document.getElementById("accessInput").value = endpoint.access;

        resetRequestBody();
    }

    function resetRequestBody() {
        const endpoint = getSelectedEndpoint();
        const bodyInput = document.getElementById("bodyInput");
        const bodyNote = document.getElementById("bodyNote");
        const body = getBodyByKey(endpoint.bodyKey);

        if (!body) {
            bodyInput.value = "";
            bodyInput.placeholder = "Endpoint ini tidak menggunakan request body.";
            bodyNote.textContent = "Tidak ada request body untuk endpoint ini.";
            return;
        }

        bodyInput.value = JSON.stringify(body, null, 2);

        if (endpoint.contentType === "multipart/form-data") {
            bodyNote.textContent =
            "Endpoint ini menggunakan multipart/form-data. File dibuat otomatis untuk pengujian.";
        } else {
            bodyNote.textContent = "Request body dapat diedit sebelum request dikirim.";
        }
    }

    function isPublicEndpoint(endpoint) {
        return endpoint.access === "public";
    }

    function tokenMatchesRole(token, role) {
        return token === getDemoTokenByRole(role);
    }

    function setResponse(method, path, status, data) {
        document.getElementById("currentEndpoint").textContent = method + " " + path;
        document.getElementById("statusText").textContent = status;
        document.getElementById("responseBox").textContent = JSON.stringify(data, null, 2);
    }

    function setGuardResponse(endpoint, message) {
        setResponse(endpoint.method, endpoint.path, "Blocked", {
            status: "error",
            message: message
        });
    }

    function validateAccess(endpoint) {
        const role = getCurrentRole();
        const token = getCurrentToken();

        if (!isPublicEndpoint(endpoint) && !token) {
            setGuardResponse(endpoint, "Unauthenticated.");
            return false;
        }

        if (!isPublicEndpoint(endpoint) && !tokenMatchesRole(token, role)) {
            setGuardResponse(endpoint, "Token tidak sesuai dengan role yang dipilih.");
            return false;
        }

        if (endpoint.access === "admin" && role !== "admin") {
            setGuardResponse(endpoint, "Endpoint hanya dapat diakses oleh admin.");
            return false;
        }

        if (endpoint.access === "vendor" && role !== "vendor") {
            setGuardResponse(endpoint, "Endpoint hanya dapat diakses oleh vendor.");
            return false;
        }

        return true;
    }

    function scrollToResponse() {
        document.getElementById("responsePanel").scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    }

    function parseRequestBody(endpoint) {
        if (!endpoint.bodyKey) {
            return null;
        }

        if (endpoint.contentType === "multipart/form-data") {
            return getBodyByKey(endpoint.bodyKey);
        }

        const rawBody = document.getElementById("bodyInput").value.trim();

        if (!rawBody) {
            return null;
        }

        return JSON.parse(rawBody);
    }

    function normalizeLoginResponse(result, role, loginBody) {
        if (typeof result !== "object" || result === null || !result.data) {
            return result;
        }

        result.data.access_token = getDemoTokenByRole(role);
        result.data.token_type = "Bearer";

        if (result.data.user) {
            result.data.user.email = loginBody.email;
            result.data.user.role = role;

            if (role === "admin") {
                result.data.user.id = 99;
                result.data.user.name = "Admin Procurement";
            } else {
                result.data.user.id = 1;
                result.data.user.name = "Budi Santoso";
            }
        }

        return result;
    }

    function normalizeCurrentUserResponse(result, role) {
        if (typeof result !== "object" || result === null || !result.data) {
            return result;
        }

        if (role === "admin") {
            result.data.id = 99;
            result.data.name = "Admin Procurement";
            result.data.email = "admin@mail.com";
            result.data.role = "admin";

            if ("vendor_status" in result.data) {
                delete result.data.vendor_status;
            }
        } else {
            result.data.id = 1;
            result.data.name = "Budi Santoso";
            result.data.email = "vendor@mail.com";
            result.data.role = "vendor";
            result.data.vendor_status = result.data.vendor_status || "pending";
        }

        return result;
    }

    async function sendSelectedRequest() {
        const endpoint = getSelectedEndpoint();
        const role = getCurrentRole();
        const token = getCurrentToken();

        scrollToResponse();

        if (!validateAccess(endpoint)) {
            return;
        }

        let body = null;

        try {
            body = parseRequestBody(endpoint);
        } catch (error) {
            setResponse(endpoint.method, endpoint.path, "Invalid JSON", {
                status: "error",
                message: "Request body JSON tidak valid.",
                error: error.message
            });
            return;
        }

        if (endpoint.upload) {
            await sendUploadRequest(endpoint);
            return;
        }

        const headers = {
            "Accept": "application/json",
            "X-Demo-Role": role
        };

        if (token) {
            headers["Authorization"] = "Bearer " + token;
        }

        if (body && endpoint.method !== "GET") {
            headers["Content-Type"] = "application/json";
        }

        const options = {
            method: endpoint.method,
            headers: headers
        };

        if (body && endpoint.method !== "GET") {
            options.body = JSON.stringify(body);
        }

        document.getElementById("currentEndpoint").textContent = endpoint.method + " " + endpoint.path;
        document.getElementById("statusText").textContent = "Loading";
        document.getElementById("responseBox").textContent = "Request sedang diproses...";

        try {
            const response = await fetch(baseUrl + endpoint.path, options);
            const contentType = response.headers.get("content-type") || "";

            let result;

            if (contentType.includes("application/json")) {
                result = await response.json();
            } else {
                result = await response.text();
            }

            if (endpoint.path === "/api/auth/login") {
                result = normalizeLoginResponse(result, role, body || getLoginBodyByRole());
                saveTokenSilently(role);
            }

            if (endpoint.path === "/api/auth/me") {
                result = normalizeCurrentUserResponse(result, role);
            }

            setResponse(endpoint.method, endpoint.path, "HTTP " + response.status, {
                request: {
                    method: endpoint.method,
                    url: baseUrl + endpoint.path,
                    headers: {
                        Accept: "application/json",
                        Authorization: token ? "Bearer " + token : null,
                        "Content-Type": body && endpoint.method !== "GET" ? "application/json" : null,
                        "X-Demo-Role": role
                    },
                    body: body
                },
                response: result
            });
        } catch (error) {
            setResponse(endpoint.method, endpoint.path, "Error", {
                status: "error",
                message: "Request gagal.",
                error: error.message
            });
        }
    }

    async function sendUploadRequest(endpoint) {
        const role = getCurrentRole();
        const token = getCurrentToken();

        const formData = new FormData();
        formData.append("document_type", "izin_usaha");

        const dummyFile = new Blob(["Dummy file untuk testing upload dokumen"], {
            type: "application/pdf"
        });

        formData.append("file", dummyFile, "izin-usaha-baru.pdf");

        const headers = {
            "Accept": "application/json",
            "X-Demo-Role": role
        };

        if (token) {
            headers["Authorization"] = "Bearer " + token;
        }

        document.getElementById("currentEndpoint").textContent = endpoint.method + " " + endpoint.path;
        document.getElementById("statusText").textContent = "Loading";
        document.getElementById("responseBox").textContent = "Upload sedang diproses...";

        try {
            const response = await fetch(baseUrl + endpoint.path, {
                method: endpoint.method,
                headers: headers,
                body: formData
            });

            const contentType = response.headers.get("content-type") || "";

            let result;

            if (contentType.includes("application/json")) {
                result = await response.json();
            } else {
                result = await response.text();
            }

            setResponse(endpoint.method, endpoint.path, "HTTP " + response.status, {
                request: {
                    method: endpoint.method,
                    url: baseUrl + endpoint.path,
                    headers: {
                        Accept: "application/json",
                        Authorization: token ? "Bearer " + token : null,
                        "Content-Type": "multipart/form-data",
                        "X-Demo-Role": role
                    },
                    body: {
                        document_type: "izin_usaha",
                        file: "izin-usaha-baru.pdf"
                    }
                },
                response: result
            });
        } catch (error) {
            setResponse(endpoint.method, endpoint.path, "Error", {
                status: "error",
                message: "Upload gagal.",
                error: error.message
            });
        }
    }

    async function loginAndSaveToken() {
        const role = getCurrentRole();
        const loginBody = getLoginBodyByRole();
        const token = getDemoTokenByRole(role);
        const path = "/api/auth/login";

        document.getElementById("currentEndpoint").textContent = "POST " + path;
        document.getElementById("statusText").textContent = "Loading";
        document.getElementById("responseBox").textContent = "Login sedang diproses...";

        try {
            const response = await fetch(baseUrl + path, {
                method: "POST",
                headers: {
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                    "X-Demo-Role": role
                },
                body: JSON.stringify(loginBody)
            });

            const contentType = response.headers.get("content-type") || "";

            let result;

            if (contentType.includes("application/json")) {
                result = await response.json();
            } else {
                result = await response.text();
            }

            result = normalizeLoginResponse(result, role, loginBody);
            saveTokenSilently(role);

            setResponse("POST", path, "HTTP " + response.status, {
                request: {
                    method: "POST",
                    url: baseUrl + path,
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        "X-Demo-Role": role
                    },
                    body: loginBody
                },
                saved_token: token,
                saved_role: role,
                response: result
            });
        } catch (error) {
            setResponse("POST", path, "Error", {
                status: "error",
                message: "Login gagal.",
                error: error.message
            });
        }
    }

    function saveTokenSilently(role) {
        const token = getDemoTokenByRole(role);

        document.getElementById("tokenInput").value = token;
        localStorage.setItem("api_token", token);
        localStorage.setItem("api_role", role);
    }

    function saveToken() {
        const role = getCurrentRole();
        saveTokenSilently(role);
        alert("Token berhasil disimpan.");
    }

    function clearToken() {
        localStorage.removeItem("api_token");
        localStorage.removeItem("api_role");

        document.getElementById("tokenInput").value = "";
        document.getElementById("roleInput").value = "vendor";

        clearResponse();
        alert("Data akses direset.");
    }

    function clearResponse() {
        document.getElementById("currentEndpoint").textContent = "Belum ada request";
        document.getElementById("statusText").textContent = "Idle";
        document.getElementById("responseBox").textContent = "Pilih endpoint lalu klik Send Request.";
    }

    window.addEventListener("load", function() {
        initEndpointSelect();

        const savedRole = localStorage.getItem("api_role") || "vendor";
        const savedToken = localStorage.getItem("api_token") || "";

        document.getElementById("roleInput").value = savedRole;
        document.getElementById("tokenInput").value = savedToken;

        document.getElementById("roleInput").addEventListener("change", function() {
            const endpoint = getSelectedEndpoint();

            if (endpoint && endpoint.bodyKey === "loginByRole") {
                resetRequestBody();
            }
        });
    });
    </script>
</body>

</html>