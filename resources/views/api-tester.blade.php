<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>E-Procurement API Tester</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #0f172a;
        color: #e5e7eb;
    }

    header {
        padding: 32px 20px;
        text-align: center;
        background: linear-gradient(135deg, #1e293b, #334155);
    }

    header h1 {
        margin: 0 0 8px;
        font-size: 28px;
    }

    header p {
        margin: 0;
        color: #cbd5e1;
    }

    .container {
        max-width: 1200px;
        margin: 24px auto;
        padding: 0 16px;
    }

    .token-panel {
        background: #1e293b;
        border: 1px solid #334155;
        border-radius: 12px;
        padding: 16px;
        margin-bottom: 24px;
    }

    .token-panel p {
        margin: 6px 0 14px;
        color: #cbd5e1;
        font-size: 13px;
    }

    .token-row {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .token-row input {
        flex: 1;
        min-width: 280px;
        background: #020617;
        color: #e5e7eb;
        border: 1px solid #334155;
        border-radius: 8px;
        padding: 10px;
        font-family: Consolas, monospace;
    }

    .token-row select {
        background: #020617;
        color: #e5e7eb;
        border: 1px solid #334155;
        border-radius: 8px;
        padding: 10px;
        font-family: Arial, sans-serif;
    }

    .section-title {
        margin: 32px 0 14px;
        font-size: 20px;
        border-left: 4px solid #38bdf8;
        padding-left: 12px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 14px;
    }

    .card {
        background: #1e293b;
        border: 1px solid #334155;
        border-radius: 12px;
        padding: 16px;
        cursor: pointer;
        transition: 0.2s;
    }

    .card:hover {
        transform: translateY(-3px);
        border-color: #38bdf8;
        background: #243449;
    }

    .method {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .GET {
        background: #0369a1;
    }

    .POST {
        background: #15803d;
    }

    .PUT {
        background: #a16207;
    }

    .PATCH {
        background: #7c3aed;
    }

    .path {
        font-family: Consolas, monospace;
        color: #f8fafc;
        font-size: 14px;
        word-break: break-all;
    }

    .desc {
        margin-top: 8px;
        color: #cbd5e1;
        font-size: 13px;
    }

    .panel {
        margin-top: 32px;
        background: #020617;
        border: 1px solid #334155;
        border-radius: 12px;
        overflow: hidden;
    }

    .panel-header {
        padding: 14px 16px;
        background: #1e293b;
        border-bottom: 1px solid #334155;
        display: flex;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
    }

    .panel-header code {
        color: #93c5fd;
    }

    .status {
        font-weight: bold;
    }

    pre {
        margin: 0;
        padding: 16px;
        overflow-x: auto;
        white-space: pre-wrap;
        word-break: break-word;
        color: #d1d5db;
        min-height: 180px;
    }

    button {
        border: none;
        background: #38bdf8;
        color: #020617;
        font-weight: bold;
        padding: 9px 14px;
        border-radius: 8px;
        cursor: pointer;
    }

    button:hover {
        background: #7dd3fc;
    }

    .actions {
        text-align: right;
        margin-top: 14px;
    }

    footer {
        text-align: center;
        color: #94a3b8;
        padding: 30px 12px;
        font-size: 13px;
    }
    </style>
</head>

<body>
    <header>
        <h1>E-Procurement Tender & Bidding System API</h1>
        <p>Laravel Hosted API Tester - api.vandrafcy.my.id</p>
    </header>

    <div class="container">
        <div class="token-panel">
            <div>
                <strong>Bearer Token & Role</strong>
                <p>Pilih role vendor/admin, lalu klik Login & Save Token atau Save Token. Endpoint protected wajib
                    token. Endpoint admin hanya bisa dites saat role admin aktif.</p>
            </div>

            <div class="token-row">
                <input type="text" id="tokenInput" placeholder="Bearer token akan muncul di sini">

                <select id="roleInput">
                    <option value="vendor">vendor</option>
                    <option value="admin">admin</option>
                </select>

                <button type="button" onclick="saveToken()">Save Token</button>
                <button type="button" onclick="loginAndSaveToken()">Login & Save Token</button>
                <button type="button" onclick="clearToken()">Clear Token</button>
            </div>
        </div>

        <div class="section-title">Auth</div>
        <div class="grid">
            <div class="card" onclick="testApi('POST', '/api/auth/register', bodies.register)">
                <span class="method POST">POST</span>
                <div class="path">/api/auth/register</div>
                <div class="desc">Register vendor</div>
            </div>

            <div class="card" onclick="testApi('POST', '/api/auth/login', getLoginBodyByRole())">
                <span class="method POST">POST</span>
                <div class="path">/api/auth/login</div>
                <div class="desc">Login user</div>
            </div>

            <div class="card" onclick="testApi('POST', '/api/auth/logout')">
                <span class="method POST">POST</span>
                <div class="path">/api/auth/logout</div>
                <div class="desc">Logout user</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/auth/me')">
                <span class="method GET">GET</span>
                <div class="path">/api/auth/me</div>
                <div class="desc">Get current user</div>
            </div>

            <div class="card" onclick="testApi('PUT', '/api/auth/change-password', bodies.changePassword)">
                <span class="method PUT">PUT</span>
                <div class="path">/api/auth/change-password</div>
                <div class="desc">Change password</div>
            </div>
        </div>

        <div class="section-title">Vendor Profile</div>
        <div class="grid">
            <div class="card" onclick="testApi('GET', '/api/vendors/me')">
                <span class="method GET">GET</span>
                <div class="path">/api/vendors/me</div>
                <div class="desc">Get vendor profile</div>
            </div>

            <div class="card" onclick="testApi('PUT', '/api/vendors/me', bodies.updateVendor)">
                <span class="method PUT">PUT</span>
                <div class="path">/api/vendors/me</div>
                <div class="desc">Update vendor profile</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/vendors/status')">
                <span class="method GET">GET</span>
                <div class="path">/api/vendors/status</div>
                <div class="desc">Get vendor verification status</div>
            </div>
        </div>

        <div class="section-title">Vendor Documents</div>
        <div class="grid">
            <div class="card" onclick="testApi('GET', '/api/vendors/documents')">
                <span class="method GET">GET</span>
                <div class="path">/api/vendors/documents</div>
                <div class="desc">List vendor documents</div>
            </div>

            <div class="card" onclick="testUploadDocument()">
                <span class="method POST">POST</span>
                <div class="path">/api/vendors/documents</div>
                <div class="desc">Upload vendor document multipart/form-data</div>
            </div>
        </div>

        <div class="section-title">Admin Vendor Verification</div>
        <div class="grid">
            <div class="card" onclick="testApi('GET', '/api/admin/vendors')">
                <span class="method GET">GET</span>
                <div class="path">/api/admin/vendors</div>
                <div class="desc">List vendors</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/admin/vendors/1')">
                <span class="method GET">GET</span>
                <div class="path">/api/admin/vendors/1</div>
                <div class="desc">Get vendor detail</div>
            </div>

            <div class="card" onclick="testApi('PATCH', '/api/admin/vendors/1/status', bodies.vendorStatus)">
                <span class="method PATCH">PATCH</span>
                <div class="path">/api/admin/vendors/1/status</div>
                <div class="desc">Approve or reject vendor</div>
            </div>
        </div>

        <div class="section-title">Tender Admin</div>
        <div class="grid">
            <div class="card" onclick="testApi('GET', '/api/admin/tenders')">
                <span class="method GET">GET</span>
                <div class="path">/api/admin/tenders</div>
                <div class="desc">List tenders for admin</div>
            </div>

            <div class="card" onclick="testApi('POST', '/api/admin/tenders', bodies.createTender)">
                <span class="method POST">POST</span>
                <div class="path">/api/admin/tenders</div>
                <div class="desc">Create tender</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/admin/tenders/101')">
                <span class="method GET">GET</span>
                <div class="path">/api/admin/tenders/101</div>
                <div class="desc">Get tender detail for admin</div>
            </div>

            <div class="card" onclick="testApi('PUT', '/api/admin/tenders/101', bodies.updateTender)">
                <span class="method PUT">PUT</span>
                <div class="path">/api/admin/tenders/101</div>
                <div class="desc">Update tender</div>
            </div>

            <div class="card" onclick="testApi('PATCH', '/api/admin/tenders/101/status', bodies.tenderStatus)">
                <span class="method PATCH">PATCH</span>
                <div class="path">/api/admin/tenders/101/status</div>
                <div class="desc">Update tender status</div>
            </div>
        </div>

        <div class="section-title">Tender Vendor</div>
        <div class="grid">
            <div class="card" onclick="testApi('GET', '/api/tenders')">
                <span class="method GET">GET</span>
                <div class="path">/api/tenders</div>
                <div class="desc">List tenders for vendor</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/tenders/101')">
                <span class="method GET">GET</span>
                <div class="path">/api/tenders/101</div>
                <div class="desc">Get tender detail for vendor</div>
            </div>
        </div>

        <div class="section-title">Participation</div>
        <div class="grid">
            <div class="card" onclick="testApi('POST', '/api/tenders/101/participants')">
                <span class="method POST">POST</span>
                <div class="path">/api/tenders/101/participants</div>
                <div class="desc">Join tender</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/admin/tenders/101/participants')">
                <span class="method GET">GET</span>
                <div class="path">/api/admin/tenders/101/participants</div>
                <div class="desc">List tender participants</div>
            </div>
        </div>

        <div class="section-title">Aanwijzing</div>
        <div class="grid">
            <div class="card" onclick="testApi('POST', '/api/admin/tenders/101/announcements', bodies.announcement)">
                <span class="method POST">POST</span>
                <div class="path">/api/admin/tenders/101/announcements</div>
                <div class="desc">Create tender announcement</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/tenders/101/announcements')">
                <span class="method GET">GET</span>
                <div class="path">/api/tenders/101/announcements</div>
                <div class="desc">List tender announcements</div>
            </div>
        </div>

        <div class="section-title">Bidding</div>
        <div class="grid">
            <div class="card" onclick="testApi('POST', '/api/tenders/101/bids', bodies.createBid)">
                <span class="method POST">POST</span>
                <div class="path">/api/tenders/101/bids</div>
                <div class="desc">Submit bid</div>
            </div>

            <div class="card" onclick="testApi('PUT', '/api/tenders/101/bids/1', bodies.updateBid)">
                <span class="method PUT">PUT</span>
                <div class="path">/api/tenders/101/bids/1</div>
                <div class="desc">Update bid</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/tenders/101/bids/me')">
                <span class="method GET">GET</span>
                <div class="path">/api/tenders/101/bids/me</div>
                <div class="desc">Get own bid</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/admin/tenders/101/bids')">
                <span class="method GET">GET</span>
                <div class="path">/api/admin/tenders/101/bids</div>
                <div class="desc">List tender bids for admin</div>
            </div>
        </div>

        <div class="section-title">Winner Selection</div>
        <div class="grid">
            <div class="card" onclick="testApi('POST', '/api/admin/tenders/101/winner', bodies.winner)">
                <span class="method POST">POST</span>
                <div class="path">/api/admin/tenders/101/winner</div>
                <div class="desc">Select tender winner</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/tenders/101/winner')">
                <span class="method GET">GET</span>
                <div class="path">/api/tenders/101/winner</div>
                <div class="desc">Get tender winner</div>
            </div>
        </div>

        <div class="section-title">Result & Purchase Order</div>
        <div class="grid">
            <div class="card" onclick="testApi('GET', '/api/tenders/101/result')">
                <span class="method GET">GET</span>
                <div class="path">/api/tenders/101/result</div>
                <div class="desc">Get tender result</div>
            </div>

            <div class="card" onclick="testApi('POST', '/api/admin/tenders/101/purchase-order', bodies.purchaseOrder)">
                <span class="method POST">POST</span>
                <div class="path">/api/admin/tenders/101/purchase-order</div>
                <div class="desc">Generate purchase order</div>
            </div>

            <div class="card" onclick="testApi('GET', '/api/admin/tenders/101/purchase-order')">
                <span class="method GET">GET</span>
                <div class="path">/api/admin/tenders/101/purchase-order</div>
                <div class="desc">Get purchase order</div>
            </div>
        </div>

        <div class="section-title">Dashboard</div>
        <div class="grid">
            <div class="card" onclick="testApi('GET', '/api/admin/dashboard')">
                <span class="method GET">GET</span>
                <div class="path">/api/admin/dashboard</div>
                <div class="desc">Admin dashboard summary</div>
            </div>
        </div>

        <div class="panel" id="responsePanel">
            <div class="panel-header">
                <div>
                    <strong>Response</strong><br>
                    <code id="currentEndpoint">Klik salah satu card API</code>
                </div>
                <div class="status" id="statusText">Idle</div>
            </div>
            <pre id="responseBox">Belum ada response.</pre>
        </div>

        <div class="actions">
            <button type="button" onclick="clearResponse()">Clear Response</button>
        </div>
    </div>

    <footer>
        API hosted according to Apidog/OpenAPI specification.
    </footer>

    <script>
    const baseUrl = window.location.origin;

    const bodies = {
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
            bid_id: 1,
            notes: "Penawaran terbaik dan dokumen lengkap."
        },
        purchaseOrder: {
            po_number: "PO-2026-0001",
            po_date: "2026-05-21",
            description: "Purchase order untuk pengadaan laptop kantor 2026."
        }
    };

    function getCurrentRole() {
        return localStorage.getItem("api_role") || "vendor";
    }

    function getLoginBodyByRole() {
        const role = document.getElementById("roleInput").value;

        if (role === "admin") {
            return bodies.loginAdmin;
        }

        return bodies.loginVendor;
    }

    function getDemoTokenByRole(role) {
        if (role === "admin") {
            return "2|sample_admin_token_abc123xyz";
        }

        return "1|sample_vendor_token_abc123xyz";
    }

    function isPublicEndpoint(method, endpoint) {
        return (
            (method === "POST" && endpoint === "/api/auth/register") ||
            (method === "POST" && endpoint === "/api/auth/login")
        );
    }

    function scrollToResponse() {
        const responsePanel = document.getElementById("responsePanel");

        if (responsePanel) {
            responsePanel.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

    function blockUnauthenticated(method, endpoint) {
        const responseBox = document.getElementById("responseBox");
        const statusText = document.getElementById("statusText");
        const currentEndpoint = document.getElementById("currentEndpoint");

        currentEndpoint.textContent = `${method} ${endpoint}`;
        statusText.textContent = "Blocked";

        responseBox.textContent = JSON.stringify({
            status: "error",
            message: "Unauthenticated",
            note: "Klik Login & Save Token dulu sebelum mengetes endpoint protected. Endpoint public hanya register dan login."
        }, null, 2);
    }

    function blockAdminAccess(method, endpoint) {
        const responseBox = document.getElementById("responseBox");
        const statusText = document.getElementById("statusText");
        const currentEndpoint = document.getElementById("currentEndpoint");

        currentEndpoint.textContent = `${method} ${endpoint}`;
        statusText.textContent = "Blocked";

        responseBox.textContent = JSON.stringify({
            status: "error",
            message: "Forbidden. Admin access only.",
            note: "Simulasi frontend: pilih role admin lalu klik Save Token atau Login & Save Token untuk mengetes endpoint admin."
        }, null, 2);
    }

    async function testApi(method, endpoint, body = null) {
        const responseBox = document.getElementById("responseBox");
        const statusText = document.getElementById("statusText");
        const currentEndpoint = document.getElementById("currentEndpoint");
        const token = localStorage.getItem("api_token");
        const role = getCurrentRole();

        scrollToResponse();

        if (!token && !isPublicEndpoint(method, endpoint)) {
            blockUnauthenticated(method, endpoint);
            return;
        }

        if (endpoint.startsWith("/api/admin") && role !== "admin") {
            blockAdminAccess(method, endpoint);
            return;
        }

        currentEndpoint.textContent = `${method} ${endpoint}`;
        statusText.textContent = "Loading...";
        responseBox.textContent = "Request sedang diproses...";

        const options = {
            method: method,
            headers: {
                "Accept": "application/json",
                "X-Demo-Role": role
            }
        };

        if (token) {
            options.headers["Authorization"] = `Bearer ${token}`;
        }

        if (body && method !== "GET") {
            options.headers["Content-Type"] = "application/json";
            options.body = JSON.stringify(body);
        }

        try {
            const response = await fetch(baseUrl + endpoint, options);
            const contentType = response.headers.get("content-type") || "";

            let result;

            if (contentType.includes("application/json")) {
                result = await response.json();
            } else {
                result = await response.text();
            }

            if (endpoint === "/api/auth/login" && result.data) {
                result.data.access_token = getDemoTokenByRole(role);
                result.data.token_type = "Bearer";

                if (result.data.user) {
                    result.data.user.role = role;
                    result.data.user.email = body && body.email ? body.email : result.data.user.email;
                }
            }

            statusText.textContent = `HTTP ${response.status}`;

            responseBox.textContent = JSON.stringify({
                request: {
                    method: method,
                    url: baseUrl + endpoint,
                    role: role,
                    authorization: token ? `Bearer ${token}` : null,
                    content_type: body && method !== "GET" ? "application/json" : null,
                    body: body
                },
                response: result
            }, null, 2);
        } catch (error) {
            statusText.textContent = "Error";
            responseBox.textContent = JSON.stringify({
                message: "Request gagal",
                error: error.message
            }, null, 2);
        }
    }

    async function testUploadDocument() {
        const responseBox = document.getElementById("responseBox");
        const statusText = document.getElementById("statusText");
        const currentEndpoint = document.getElementById("currentEndpoint");
        const token = localStorage.getItem("api_token");
        const role = getCurrentRole();

        scrollToResponse();

        if (!token) {
            blockUnauthenticated("POST", "/api/vendors/documents");
            return;
        }

        currentEndpoint.textContent = "POST /api/vendors/documents";
        statusText.textContent = "Loading...";
        responseBox.textContent = "Upload mock sedang diproses...";

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
            headers["Authorization"] = `Bearer ${token}`;
        }

        try {
            const response = await fetch(baseUrl + "/api/vendors/documents", {
                method: "POST",
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

            statusText.textContent = `HTTP ${response.status}`;

            responseBox.textContent = JSON.stringify({
                request: {
                    method: "POST",
                    url: baseUrl + "/api/vendors/documents",
                    role: role,
                    authorization: token ? `Bearer ${token}` : null,
                    content_type: "multipart/form-data",
                    body: {
                        document_type: "izin_usaha",
                        file: "izin-usaha-baru.pdf"
                    }
                },
                response: result
            }, null, 2);
        } catch (error) {
            statusText.textContent = "Error";
            responseBox.textContent = JSON.stringify({
                message: "Upload gagal",
                error: error.message
            }, null, 2);
        }
    }

    function saveToken() {
        const role = document.getElementById("roleInput").value;
        const token = getDemoTokenByRole(role);

        document.getElementById("tokenInput").value = token;

        localStorage.setItem("api_token", token);
        localStorage.setItem("api_role", role);

        alert(`Token ${role} berhasil disimpan.`);
    }

    function clearToken() {
        localStorage.removeItem("api_token");
        localStorage.removeItem("api_role");

        document.getElementById("tokenInput").value = "";
        document.getElementById("roleInput").value = "vendor";

        alert("Token dan role dihapus.");
    }

    async function loginAndSaveToken() {
        const responseBox = document.getElementById("responseBox");
        const statusText = document.getElementById("statusText");
        const currentEndpoint = document.getElementById("currentEndpoint");
        const role = document.getElementById("roleInput").value;
        const loginBody = role === "admin" ? bodies.loginAdmin : bodies.loginVendor;
        const demoToken = getDemoTokenByRole(role);

        scrollToResponse();

        currentEndpoint.textContent = "POST /api/auth/login";
        statusText.textContent = "Loading...";
        responseBox.textContent = `Login sebagai ${role} sedang diproses...`;

        try {
            const response = await fetch(baseUrl + "/api/auth/login", {
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

            if (result.data) {
                result.data.access_token = demoToken;
                result.data.token_type = "Bearer";

                if (result.data.user) {
                    result.data.user.role = role;
                    result.data.user.email = loginBody.email;
                }
            }

            localStorage.setItem("api_token", demoToken);
            localStorage.setItem("api_role", role);

            document.getElementById("tokenInput").value = demoToken;
            document.getElementById("roleInput").value = role;

            statusText.textContent = `HTTP ${response.status}`;

            responseBox.textContent = JSON.stringify({
                request: {
                    method: "POST",
                    url: baseUrl + "/api/auth/login",
                    role: role,
                    content_type: "application/json",
                    body: loginBody
                },
                saved_token: demoToken,
                saved_role: role,
                response: result
            }, null, 2);
        } catch (error) {
            statusText.textContent = "Error";
            responseBox.textContent = JSON.stringify({
                message: "Login gagal",
                error: error.message
            }, null, 2);
        }
    }

    function clearResponse() {
        document.getElementById("currentEndpoint").textContent = "Klik salah satu card API";
        document.getElementById("statusText").textContent = "Idle";
        document.getElementById("responseBox").textContent = "Belum ada response.";
    }

    window.addEventListener("load", function() {
        const savedToken = localStorage.getItem("api_token");
        const savedRole = localStorage.getItem("api_role") || "vendor";

        if (savedToken) {
            document.getElementById("tokenInput").value = savedToken;
        }

        document.getElementById("roleInput").value = savedRole;
    });
    </script>
</body>

</html>