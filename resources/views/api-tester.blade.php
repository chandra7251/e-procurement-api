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
        background: #f8fafc;
        color: #0f172a;
    }

    header {
        padding: 34px 20px;
        text-align: center;
        background: #ffffff;
        border-bottom: 1px solid #e2e8f0;
    }

    header h1 {
        margin: 0 0 8px;
        font-size: 30px;
        color: #0f172a;
    }

    header p {
        margin: 0;
        color: #475569;
        font-size: 14px;
    }

    .container {
        max-width: 1200px;
        margin: 24px auto;
        padding: 0 16px;
    }

    .info-panel,
    .token-panel,
    .panel {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
    }

    .info-panel {
        padding: 16px;
        margin-bottom: 18px;
    }

    .info-panel strong {
        color: #0f172a;
    }

    .info-panel p {
        margin: 6px 0 0;
        color: #475569;
        font-size: 14px;
        line-height: 1.6;
    }

    .token-panel {
        padding: 16px;
        margin-bottom: 24px;
    }

    .token-panel p {
        margin: 6px 0 14px;
        color: #475569;
        font-size: 14px;
        line-height: 1.6;
    }

    .token-row {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .token-row input {
        flex: 1;
        min-width: 280px;
        background: #ffffff;
        color: #0f172a;
        border: 1px solid #cbd5e1;
        border-radius: 10px;
        padding: 11px;
        font-family: Consolas, monospace;
    }

    .token-row select {
        background: #ffffff;
        color: #0f172a;
        border: 1px solid #cbd5e1;
        border-radius: 10px;
        padding: 11px;
        font-family: Arial, sans-serif;
    }

    .token-row input:focus,
    .token-row select:focus {
        outline: 2px solid #bfdbfe;
        border-color: #2563eb;
    }

    .section-title {
        margin: 32px 0 14px;
        font-size: 20px;
        border-left: 5px solid #2563eb;
        padding-left: 12px;
        color: #0f172a;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 14px;
    }

    .card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 16px;
        cursor: pointer;
        transition: 0.18s;
        box-shadow: 0 4px 18px rgba(15, 23, 42, 0.05);
    }

    .card:hover {
        transform: translateY(-3px);
        border-color: #2563eb;
        box-shadow: 0 10px 28px rgba(37, 99, 235, 0.12);
    }

    .method {
        display: inline-block;
        padding: 5px 9px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #ffffff;
    }

    .GET {
        background: #0284c7;
    }

    .POST {
        background: #16a34a;
    }

    .PUT {
        background: #ca8a04;
    }

    .PATCH {
        background: #7c3aed;
    }

    .path {
        font-family: Consolas, monospace;
        color: #0f172a;
        font-size: 14px;
        word-break: break-all;
        font-weight: bold;
    }

    .desc {
        margin-top: 8px;
        color: #64748b;
        font-size: 13px;
        line-height: 1.5;
    }

    .badge {
        display: inline-block;
        margin-top: 10px;
        padding: 4px 8px;
        border-radius: 999px;
        font-size: 11px;
        font-weight: bold;
        background: #eff6ff;
        color: #1d4ed8;
    }

    .badge.admin {
        background: #fef3c7;
        color: #92400e;
    }

    .badge.vendor {
        background: #dcfce7;
        color: #166534;
    }

    .badge.public {
        background: #f1f5f9;
        color: #334155;
    }

    .panel {
        margin-top: 34px;
        overflow: hidden;
    }

    .panel-header {
        padding: 15px 16px;
        background: #f1f5f9;
        border-bottom: 1px solid #e2e8f0;
        display: flex;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
    }

    .panel-header code {
        color: #1d4ed8;
        font-weight: bold;
    }

    .status {
        font-weight: bold;
        color: #0f172a;
    }

    pre {
        margin: 0;
        padding: 16px;
        overflow-x: auto;
        white-space: pre-wrap;
        word-break: break-word;
        color: #0f172a;
        background: #ffffff;
        min-height: 220px;
        font-size: 13px;
        line-height: 1.5;
    }

    button {
        border: none;
        background: #2563eb;
        color: #ffffff;
        font-weight: bold;
        padding: 10px 14px;
        border-radius: 10px;
        cursor: pointer;
    }

    button:hover {
        background: #1d4ed8;
    }

    .button-secondary {
        background: #64748b;
    }

    .button-secondary:hover {
        background: #475569;
    }

    .button-danger {
        background: #dc2626;
    }

    .button-danger:hover {
        background: #b91c1c;
    }

    .actions {
        text-align: right;
        margin-top: 14px;
    }

    footer {
        text-align: center;
        color: #64748b;
        padding: 30px 12px;
        font-size: 13px;
    }

    @media (max-width: 640px) {
        header h1 {
            font-size: 24px;
        }

        .token-row input,
        .token-row select,
        .token-row button {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <header>
        <h1>E-Procurement Tender & Bidding System API</h1>
        <p>Base URL: https://api.vandrafcy.my.id</p>
    </header>

    <div class="container">
        <div class="info-panel">
            <strong>Dokumentasi API</strong>
            <p>
                Tester ini digunakan untuk mencoba endpoint pada dokumentasi Apidog
                <b>https://llmwulg77h.apidog.io/</b>. Request dan response ditampilkan
                agar proses pengujian API lebih mudah dilihat.
            </p>
        </div>

        <div class="token-panel">
            <div>
                <strong>Bearer Token & Role Simulation</strong>
            </div>

            <div class="token-row">
                <input type="text" id="tokenInput" placeholder="Token Akses">

                <select id="roleInput">
                    <option value="vendor">vendor</option>
                    <option value="admin">admin</option>
                </select>

                <button type="button" onclick="loginAndSaveToken()">Login</button>
                <button type="button" onclick="saveToken()">Simpan Token</button>
                <button type="button" class="button-danger" onclick="clearToken()">Reset</button>
            </div>
        </div>

        <div id="endpointContainer"></div>

        <div class="panel" id="responsePanel">
            <div class="panel-header">
                <div>
                    <strong>Response</strong><br>
                    <code id="currentEndpoint">Belum ada request</code>
                </div>
            </div>
            <pre id="responseBox">Pilih salah satu endpoint untuk melihat response.</pre>
        </div>

        <div class="actions">
            <button type="button" class="button-secondary" onclick="clearResponse()">Clear Response</button>
        </div>
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
            selection_method: "lowest_price",
            notes: "Dipilih berdasarkan harga penawaran terendah."
        },
        purchaseOrder: {
            po_number: "PO-2026-001",
            issued_date: "2026-05-20",
            notes: "Purchase order untuk pengadaan laptop kantor."
        }
    };

    const endpointGroups = [{
            title: "Auth",
            endpoints: [{
                    method: "POST",
                    endpoint: "/api/auth/register",
                    description: "Register vendor",
                    access: "public",
                    bodyKey: "register"
                },
                {
                    method: "POST",
                    endpoint: "/api/auth/login",
                    description: "Login user",
                    access: "public",
                    bodyKey: "loginByRole"
                },
                {
                    method: "POST",
                    endpoint: "/api/auth/logout",
                    description: "Logout user",
                    access: "auth"
                },
                {
                    method: "GET",
                    endpoint: "/api/auth/me",
                    description: "Get current user",
                    access: "auth"
                },
                {
                    method: "PUT",
                    endpoint: "/api/auth/change-password",
                    description: "Change password",
                    access: "auth",
                    bodyKey: "changePassword"
                }
            ]
        },
        {
            title: "Vendor Profile",
            endpoints: [{
                    method: "GET",
                    endpoint: "/api/vendors/me",
                    description: "Get vendor profile",
                    access: "vendor"
                },
                {
                    method: "PUT",
                    endpoint: "/api/vendors/me",
                    description: "Update vendor profile",
                    access: "vendor",
                    bodyKey: "updateVendor"
                },
                {
                    method: "GET",
                    endpoint: "/api/vendors/status",
                    description: "Get vendor verification status",
                    access: "vendor"
                }
            ]
        },
        {
            title: "Vendor Documents",
            endpoints: [{
                    method: "GET",
                    endpoint: "/api/vendors/documents",
                    description: "List vendor documents",
                    access: "vendor"
                },
                {
                    method: "POST",
                    endpoint: "/api/vendors/documents",
                    description: "Upload vendor document multipart/form-data",
                    access: "vendor",
                    upload: true
                }
            ]
        },
        {
            title: "Admin Vendor Verification",
            endpoints: [{
                    method: "GET",
                    endpoint: "/api/admin/vendors",
                    description: "List vendors",
                    access: "admin"
                },
                {
                    method: "GET",
                    endpoint: "/api/admin/vendors/1",
                    description: "Get vendor detail",
                    access: "admin"
                },
                {
                    method: "PATCH",
                    endpoint: "/api/admin/vendors/1/status",
                    description: "Approve or reject vendor",
                    access: "admin",
                    bodyKey: "vendorStatus"
                }
            ]
        },
        {
            title: "Tender Admin",
            endpoints: [{
                    method: "GET",
                    endpoint: "/api/admin/tenders",
                    description: "List tenders for admin",
                    access: "admin"
                },
                {
                    method: "POST",
                    endpoint: "/api/admin/tenders",
                    description: "Create tender",
                    access: "admin",
                    bodyKey: "createTender"
                },
                {
                    method: "GET",
                    endpoint: "/api/admin/tenders/101",
                    description: "Get tender detail for admin",
                    access: "admin"
                },
                {
                    method: "PUT",
                    endpoint: "/api/admin/tenders/101",
                    description: "Update tender",
                    access: "admin",
                    bodyKey: "updateTender"
                },
                {
                    method: "PATCH",
                    endpoint: "/api/admin/tenders/101/status",
                    description: "Update tender status",
                    access: "admin",
                    bodyKey: "tenderStatus"
                }
            ]
        },
        {
            title: "Tender Vendor",
            endpoints: [{
                    method: "GET",
                    endpoint: "/api/tenders",
                    description: "List tenders for vendor",
                    access: "vendor"
                },
                {
                    method: "GET",
                    endpoint: "/api/tenders/101",
                    description: "Get tender detail for vendor",
                    access: "vendor"
                }
            ]
        },
        {
            title: "Participation",
            endpoints: [{
                    method: "POST",
                    endpoint: "/api/tenders/101/participants",
                    description: "Join tender",
                    access: "vendor"
                },
                {
                    method: "GET",
                    endpoint: "/api/admin/tenders/101/participants",
                    description: "List tender participants",
                    access: "admin"
                }
            ]
        },
        {
            title: "Aanwijzing",
            endpoints: [{
                    method: "POST",
                    endpoint: "/api/admin/tenders/101/announcements",
                    description: "Create tender announcement",
                    access: "admin",
                    bodyKey: "announcement"
                },
                {
                    method: "GET",
                    endpoint: "/api/tenders/101/announcements",
                    description: "List tender announcements",
                    access: "vendor"
                }
            ]
        },
        {
            title: "Bidding",
            endpoints: [{
                    method: "POST",
                    endpoint: "/api/tenders/101/bids",
                    description: "Submit bid",
                    access: "vendor",
                    bodyKey: "createBid"
                },
                {
                    method: "PUT",
                    endpoint: "/api/tenders/101/bids/1",
                    description: "Update bid",
                    access: "vendor",
                    bodyKey: "updateBid"
                },
                {
                    method: "GET",
                    endpoint: "/api/tenders/101/bids/me",
                    description: "Get my bid",
                    access: "vendor"
                },
                {
                    method: "GET",
                    endpoint: "/api/admin/tenders/101/bids",
                    description: "List tender bids",
                    access: "admin"
                }
            ]
        },
        {
            title: "Winner Selection",
            endpoints: [{
                    method: "POST",
                    endpoint: "/api/admin/tenders/101/winner",
                    description: "Select winner",
                    access: "admin",
                    bodyKey: "winner"
                },
                {
                    method: "GET",
                    endpoint: "/api/tenders/101/winner",
                    description: "Get winner",
                    access: "vendor"
                }
            ]
        },
        {
            title: "Result & PO",
            endpoints: [{
                    method: "GET",
                    endpoint: "/api/tenders/101/result",
                    description: "Get tender result",
                    access: "vendor"
                },
                {
                    method: "POST",
                    endpoint: "/api/admin/tenders/101/purchase-order",
                    description: "Generate purchase order",
                    access: "admin",
                    bodyKey: "purchaseOrder"
                },
                {
                    method: "GET",
                    endpoint: "/api/admin/tenders/101/purchase-order",
                    description: "Get purchase order",
                    access: "admin"
                }
            ]
        },
        {
            title: "Dashboard",
            endpoints: [{
                method: "GET",
                endpoint: "/api/admin/dashboard",
                description: "Admin dashboard summary",
                access: "admin"
            }]
        }
    ];

    function renderEndpointCards() {
        const container = document.getElementById("endpointContainer");
        container.innerHTML = "";

        endpointGroups.forEach(function(group) {
            const title = document.createElement("div");
            title.className = "section-title";
            title.textContent = group.title;
            container.appendChild(title);

            const grid = document.createElement("div");
            grid.className = "grid";

            group.endpoints.forEach(function(item) {
                const card = document.createElement("div");
                card.className = "card";

                const method = document.createElement("span");
                method.className = "method " + item.method;
                method.textContent = item.method;

                const path = document.createElement("div");
                path.className = "path";
                path.textContent = item.endpoint;

                const desc = document.createElement("div");
                desc.className = "desc";
                desc.textContent = item.description;

                const badge = document.createElement("span");
                badge.className = "badge " + item.access;
                badge.textContent = item.access;

                card.appendChild(method);
                card.appendChild(path);
                card.appendChild(desc);
                card.appendChild(badge);

                card.addEventListener("click", function() {
                    if (item.upload) {
                        testUploadDocument(true);
                        return;
                    }

                    testApi(item.method, item.endpoint, getBodyByKey(item.bodyKey), true);
                });

                grid.appendChild(card);
            });

            container.appendChild(grid);
        });
    }

    function getBodyByKey(key) {
        if (!key) {
            return null;
        }

        if (key === "loginByRole") {
            return getLoginBodyByRole();
        }

        return bodies[key] || null;
    }

    function getCurrentRole() {
        const roleInput = document.getElementById("roleInput");

        if (roleInput) {
            return roleInput.value;
        }

        return localStorage.getItem("api_role") || "vendor";
    }

    function getLoginBodyByRole() {
        const role = getCurrentRole();

        if (role === "admin") {
            return bodies.loginAdmin;
        }

        return bodies.loginVendor;
    }

    function getDemoTokenByRole(role) {
        if (role === "admin") {
            return demoTokens.admin;
        }

        return demoTokens.vendor;
    }

    function isPublicEndpoint(method, endpoint) {
        return (
            (method === "POST" && endpoint === "/api/auth/register") ||
            (method === "POST" && endpoint === "/api/auth/login")
        );
    }

    function tokenMatchesRole(token, role) {
        return token === getDemoTokenByRole(role);
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

    function setBlockedResponse(method, endpoint, message) {
        document.getElementById("currentEndpoint").textContent = `${method} ${endpoint}`;
        document.getElementById("statusText").textContent = "403";
        document.getElementById("responseBox").textContent = JSON.stringify({
            status: "error",
            message: message
        }, null, 2);
    }

    function validateAccess(method, endpoint, access) {
        const token = localStorage.getItem("api_token");
        const role = getCurrentRole();

        if (!token && !isPublicEndpoint(method, endpoint)) {
            setBlockedResponse(method, endpoint, "Unauthenticated.");
            return false;
        }

        if (token && !isPublicEndpoint(method, endpoint) && !tokenMatchesRole(token, role)) {
            setBlockedResponse(method, endpoint, "Token tidak sesuai dengan role yang dipilih.");
            return false;
        }

        if (access === "admin" && role !== "admin") {
            setBlockedResponse(method, endpoint, "Endpoint hanya dapat diakses oleh admin.");
            return false;
        }

        if (access === "vendor" && role !== "vendor") {
            setBlockedResponse(method, endpoint, "Endpoint hanya dapat diakses oleh vendor.");
            return false;
        }

        if (access === "vendor" && role !== "vendor") {
            setBlockedResponse(
                method,
                endpoint,
                "Forbidden. Vendor access only.",
                "Endpoint ini hanya untuk role vendor."
            );
            return false;
        }

        return true;
    }

    function getAccessByEndpoint(endpoint) {
        for (const group of endpointGroups) {
            for (const item of group.endpoints) {
                if (item.endpoint === endpoint) {
                    return item.access;
                }
            }
        }

        return "auth";
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

    async function testApi(method, endpoint, body = null, shouldScroll = false) {
        const responseBox = document.getElementById("responseBox");
        const statusText = document.getElementById("statusText");
        const currentEndpoint = document.getElementById("currentEndpoint");
        const token = localStorage.getItem("api_token");
        const role = getCurrentRole();
        const access = getAccessByEndpoint(endpoint);

        if (shouldScroll) {
            scrollToResponse();
        }

        if (!validateAccess(method, endpoint, access)) {
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

            if (endpoint === "/api/auth/login") {
                result = normalizeLoginResponse(result, role, body || getLoginBodyByRole());
            }

            statusText.textContent = `HTTP ${response.status}`;

            responseBox.textContent = JSON.stringify({
                request: {
                    method: method,
                    url: baseUrl + endpoint,
                    headers: {
                        Accept: "application/json",
                        Authorization: token ? `Bearer ${token}` : null,
                        "Content-Type": body && method !== "GET" ? "application/json" : null,
                        "X-Demo-Role": role
                    },
                    body: body
                },
                response: result
            }, null, 2);
        } catch (error) {
            statusText.textContent = "Error";
            responseBox.textContent = JSON.stringify({
                status: "error",
                message: "Request gagal",
                error: error.message
            }, null, 2);
        }
    }

    async function testUploadDocument(shouldScroll = false) {
        const responseBox = document.getElementById("responseBox");
        const statusText = document.getElementById("statusText");
        const currentEndpoint = document.getElementById("currentEndpoint");
        const token = localStorage.getItem("api_token");
        const role = getCurrentRole();
        const method = "POST";
        const endpoint = "/api/vendors/documents";
        const access = "vendor";

        if (shouldScroll) {
            scrollToResponse();
        }

        if (!validateAccess(method, endpoint, access)) {
            return;
        }

        currentEndpoint.textContent = `${method} ${endpoint}`;
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
            const response = await fetch(baseUrl + endpoint, {
                method: method,
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
                    method: method,
                    url: baseUrl + endpoint,
                    headers: {
                        Accept: "application/json",
                        Authorization: token ? `Bearer ${token}` : null,
                        "Content-Type": "multipart/form-data",
                        "X-Demo-Role": role
                    },
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
                status: "error",
                message: "Upload gagal",
                error: error.message
            }, null, 2);
        }
    }

    function saveToken() {
        const role = getCurrentRole();
        const token = getDemoTokenByRole(role);

        document.getElementById("tokenInput").value = token;

        localStorage.setItem("api_token", token);
        localStorage.setItem("api_role", role);

        alert(`Token berhasil disimpan.`);
    }

    function clearToken() {
        localStorage.removeItem("api_token");
        localStorage.removeItem("api_role");

        document.getElementById("tokenInput").value = "";
        document.getElementById("roleInput").value = "vendor";

        clearResponse();

        alert("Data akses di reset.");
    }

    async function loginAndSaveToken() {
        const responseBox = document.getElementById("responseBox");
        const statusText = document.getElementById("statusText");
        const currentEndpoint = document.getElementById("currentEndpoint");
        const role = getCurrentRole();
        const loginBody = getLoginBodyByRole();
        const demoToken = getDemoTokenByRole(role);
        const endpoint = "/api/auth/login";

        currentEndpoint.textContent = "POST /api/auth/login";
        statusText.textContent = "Loading...";
        responseBox.textContent = `Login sebagai ${role} sedang diproses...`;

        try {
            const response = await fetch(baseUrl + endpoint, {
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

            localStorage.setItem("api_token", demoToken);
            localStorage.setItem("api_role", role);

            document.getElementById("tokenInput").value = demoToken;
            document.getElementById("roleInput").value = role;

            statusText.textContent = `HTTP ${response.status}`;

            responseBox.textContent = JSON.stringify({
                request: {
                    method: "POST",
                    url: baseUrl + endpoint,
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        "X-Demo-Role": role
                    },
                    body: loginBody
                },
                saved_token: demoToken,
                saved_role: role,
                response: result
            }, null, 2);
        } catch (error) {
            statusText.textContent = "Error";
            responseBox.textContent = JSON.stringify({
                status: "error",
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
        renderEndpointCards();

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