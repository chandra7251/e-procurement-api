<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>API Tester — E-Procurement System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Interactive API tester for E-Procurement Tender & Bidding System.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* Modern CSS Reset */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            /* Color Palette (Modern SaaS Light Theme) */
            --bg-body: #F3F4F6;
            --bg-card: #FFFFFF;
            --text-main: #111827;
            --text-muted: #6B7280;
            --text-light: #9CA3AF;
            --border: #E5E7EB;
            
            --primary: #4F46E5;     /* Indigo 600 */
            --primary-hover: #4338CA;
            --primary-light: #EEF2FF;
            --primary-text: #3730A3;

            --success: #10B981;     /* Emerald 500 */
            --success-light: #D1FAE5;
            --success-text: #065F46;

            --danger: #EF4444;      /* Red 500 */
            --danger-light: #FEE2E2;
            --danger-text: #991B1B;

            --warning: #F59E0B;     /* Amber 500 */
            --warning-light: #FEF3C7;
            --warning-text: #92400E;

            --info: #3B82F6;        /* Blue 500 */
            --info-light: #DBEAFE;
            --info-text: #1E40AF;

            /* Typography */
            --font-sans: 'Inter', sans-serif;
            --font-mono: 'JetBrains Mono', monospace;

            /* Shadows & Radii */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --radius-md: 8px;
            --radius-lg: 12px;
            --radius-full: 9999px;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--bg-body);
            color: var(--text-main);
            line-height: 1.5;
            font-size: 14px;
            -webkit-font-smoothing: antialiased;
        }

        /* --- Header --- */
        header {
            background-color: var(--bg-card);
            border-bottom: 1px solid var(--border);
            padding: 16px 0;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, var(--primary), #818CF8);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 16px;
        }

        .brand-text h1 {
            font-size: 18px;
            font-weight: 700;
            color: var(--text-main);
            line-height: 1.2;
        }

        .brand-text p {
            font-size: 13px;
            color: var(--text-muted);
        }

        .nav-links {
            display: flex;
            gap: 16px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* --- Layout --- */
        .main-container {
            max-width: 1200px;
            margin: 32px auto;
            padding: 0 24px;
            display: grid;
            grid-template-columns: 400px 1fr;
            gap: 24px;
            align-items: start;
        }

        @media (max-width: 968px) {
            .main-container {
                grid-template-columns: 1fr;
            }
        }

        /* --- Cards --- */
        .card {
            background-color: var(--bg-card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border);
            overflow: hidden;
            margin-bottom: 24px;
            transition: box-shadow 0.2s;
        }

        .card:hover {
            box-shadow: var(--shadow-md);
        }

        .card-header {
            padding: 16px 20px;
            border-bottom: 1px solid var(--border);
            background-color: #F9FAFB;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-main);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-title-icon {
            color: var(--text-light);
        }

        .card-body {
            padding: 20px;
        }

        /* --- Form Elements --- */
        .form-group {
            margin-bottom: 16px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: var(--text-main);
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            font-family: var(--font-sans);
            font-size: 14px;
            color: var(--text-main);
            background-color: #FFFFFF;
            transition: all 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-light);
        }

        .form-control:disabled, .form-control[readonly] {
            background-color: #F3F4F6;
            color: var(--text-muted);
            cursor: not-allowed;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
            padding-right: 36px;
        }

        textarea.form-control {
            font-family: var(--font-mono);
            font-size: 13px;
            resize: vertical;
            min-height: 120px;
            line-height: 1.5;
        }

        /* --- Buttons --- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: var(--radius-md);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            border: 1px solid transparent;
            font-family: var(--font-sans);
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            box-shadow: var(--shadow-sm);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        .btn-secondary {
            background-color: #FFFFFF;
            color: var(--text-main);
            border-color: var(--border);
            box-shadow: var(--shadow-sm);
        }

        .btn-secondary:hover {
            background-color: #F9FAFB;
        }

        .btn-danger-outline {
            background-color: transparent;
            color: var(--danger);
            border-color: var(--danger-light);
        }

        .btn-danger-outline:hover {
            background-color: var(--danger-light);
        }

        .btn-sm {
            padding: 6px 10px;
            font-size: 12px;
        }

        .btn-block {
            width: 100%;
        }

        /* --- Specific UI Components --- */
        .method-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: var(--radius-md);
            font-size: 12px;
            font-weight: 600;
            font-family: var(--font-mono);
            text-transform: uppercase;
        }

        .method-GET { background-color: var(--info-light); color: var(--info-text); }
        .method-POST { background-color: var(--success-light); color: var(--success-text); }
        .method-PUT { background-color: var(--warning-light); color: var(--warning-text); }
        .method-PATCH { background-color: #FCE7F3; color: #9D174D; } /* Pink */
        .method-DELETE { background-color: var(--danger-light); color: var(--danger-text); }
        
        .endpoint-display {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background-color: #F9FAFB;
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            margin-bottom: 16px;
        }

        .endpoint-url {
            font-family: var(--font-mono);
            font-size: 13px;
            color: var(--text-main);
            word-break: break-all;
        }

        .access-hint {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            padding: 12px;
            border-radius: var(--radius-md);
            font-size: 13px;
            margin-top: 12px;
        }

        .access-hint-icon {
            flex-shrink: 0;
            margin-top: 2px;
        }

        .hint-admin { background-color: var(--info-light); color: var(--info-text); }
        .hint-vendor { background-color: var(--success-light); color: var(--success-text); }
        .hint-public { background-color: #F3F4F6; color: var(--text-muted); }

        /* --- Response Area --- */
        .response-container {
            position: relative;
        }

        .response-status-bar {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: var(--radius-full);
            font-size: 13px;
            font-weight: 600;
        }

        .status-badge::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .status-idle { background-color: #F3F4F6; color: var(--text-muted); }
        .status-idle::before { background-color: var(--text-light); }

        .status-success { background-color: var(--success-light); color: var(--success-text); }
        .status-success::before { background-color: var(--success); }

        .status-error { background-color: var(--danger-light); color: var(--danger-text); }
        .status-error::before { background-color: var(--danger); }

        .status-warning { background-color: var(--warning-light); color: var(--warning-text); }
        .status-warning::before { background-color: var(--warning); }

        .time-badge {
            font-family: var(--font-mono);
            font-size: 13px;
            color: var(--text-muted);
        }

        .code-block-wrapper {
            position: relative;
            background-color: #1F2937; /* Gray 800 */
            border-radius: var(--radius-lg);
            overflow: hidden;
        }

        .code-block-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 16px;
            background-color: #111827; /* Gray 900 */
            border-bottom: 1px solid #374151;
        }

        .code-block-title {
            color: #9CA3AF;
            font-size: 12px;
            font-family: var(--font-mono);
        }

        pre#responseBox {
            margin: 0;
            padding: 16px;
            color: #E5E7EB;
            font-family: var(--font-mono);
            font-size: 13px;
            line-height: 1.6;
            overflow-x: auto;
            max-height: 500px;
            overflow-y: auto;
        }

        /* --- History --- */
        .history-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 12px;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .history-item:hover {
            background-color: #F3F4F6;
        }

        .history-item:not(:last-child) {
            border-bottom: 1px solid var(--border);
            border-radius: 0;
        }

        .history-main {
            display: flex;
            align-items: center;
            gap: 12px;
            overflow: hidden;
        }
        
        .history-path {
            font-family: var(--font-mono);
            font-size: 12px;
            color: var(--text-main);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .history-status {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 600;
        }

        .empty-state {
            text-align: center;
            padding: 32px 16px;
            color: var(--text-muted);
            font-size: 14px;
        }

        /* --- Utilities --- */
        .flex-row { display: flex; gap: 12px; align-items: center; }
        .mt-4 { margin-top: 16px; }
        .mb-4 { margin-bottom: 16px; }
        .text-mono { font-family: var(--font-mono); }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="header-container">
        <div class="brand">
            <div class="brand-text">
                <h1>API Tester</h1>
                <p>E-Procurement Tender & Bidding System</p>
            </div>
        </div>
    </div>
</header>

<div class="main-container">
    <!-- Left Column: Controls -->
    <div class="controls-column">
        
        <!-- Auth Card -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Authentication</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label" for="roleInput">Login As</label>
                    <select class="form-control" id="roleInput">
                        <option value="vendor">Vendor</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="tokenInput">Access Token</label>
                    <input type="text" class="form-control text-mono" id="tokenInput" placeholder="Login untuk mendapatkan token">
                </div>

                <div class="flex-row mt-4">
                    <button class="btn btn-primary" onclick="doLogin()" style="flex: 1;">Login</button>
                    <button class="btn btn-secondary btn-sm" onclick="resetAll()">Reset</button>
                </div>
            </div>
        </div>

        <!-- Endpoint Card -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Endpoint Configuration</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label" for="endpointInput">Select Endpoint</label>
                    <select class="form-control" id="endpointInput"></select>
                </div>

                <div id="accessHint" class="access-hint hint-public" style="display: none;">
                    <span id="accessHintText">Requires authentication.</span>
                </div>

                <!-- History included in the left column to save space -->
                <div class="mt-4" style="border-top: 1px solid var(--border); padding-top: 16px;">
                    <label class="form-label">Recent Requests</label>
                    <div id="historyList" style="border: 1px solid var(--border); border-radius: var(--radius-md); overflow: hidden;">
                        <div class="empty-state">Belum ada request</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Right Column: Request & Response -->
    <div class="workspace-column">
        
        <div class="card">
            <div class="card-header" style="background-color: white;">
                <!-- Live Endpoint Display -->
                <div class="endpoint-display" style="margin-bottom: 0; width: 100%; border: none; padding: 0; background: transparent;">
                    <span class="method-badge" id="urlMethod">GET</span>
                    <span class="endpoint-url" id="urlPath">/api/...</span>
                    <div style="flex: 1;"></div>
                    <button class="btn btn-primary" onclick="sendRequest()" id="btnSend">
                        Send Request
                    </button>
                </div>
            </div>
            
            <div class="card-body" style="background-color: #F9FAFB; border-bottom: 1px solid var(--border);">
                <label class="form-label">Request Body (JSON)</label>
                <textarea class="form-control" id="bodyInput" spellcheck="false" placeholder="Select an endpoint..."></textarea>
                <div style="font-size: 12px; color: var(--text-muted); margin-top: 8px;" id="bodyNote">
                    No body required for this request.
                </div>
            </div>

            <div class="card-body">
                <div class="response-status-bar">
                    <div class="status-badge status-idle" id="statusBadge">Waiting</div>
                    <div class="time-badge" id="responseTime"></div>
                </div>

                <div class="code-block-wrapper">
                    <div class="code-block-header">
                        <span class="code-block-title">Response</span>
                        <button class="btn btn-secondary btn-sm" id="btnCopy" onclick="copyResponse()" style="background-color: transparent; color: #9CA3AF; border-color: #374151; display: none;">Copy</button>
                    </div>
                    <pre id="responseBox">Select an endpoint and click "Send Request" to view the response here.</pre>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
// --- Configuration & Data ---
const BASE_URL = 'https://api.vandrafcy.my.id';

const DEMO_TOKENS = {
    vendor: '1|sample_vendor_token_abc123xyz',
    admin:  '2|sample_admin_token_abc123xyz'
};

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
        description: 'Tender pengadaan laptop.',
        specification: 'Intel Core i5, RAM 16GB, SSD 512GB.',
        start_date: '2026-05-10 08:00:00', end_date: '2026-05-20 17:00:00',
        aanwijzing_date: '2026-05-12 10:00:00',
        bidding_start: '2026-05-13 08:00:00', bidding_end: '2026-05-15 23:59:59',
        status: 'draft'
    },
    updateTender: {
        title: 'Pengadaan Laptop Kantor 2026 - Revisi',
        description: 'Tender pengadaan laptop.',
        specification: 'Intel Core i5, RAM 16GB, SSD 1TB.',
        start_date: '2026-05-10 08:00:00', end_date: '2026-05-22 17:00:00',
        aanwijzing_date: '2026-05-12 10:00:00',
        bidding_start: '2026-05-14 08:00:00', bidding_end: '2026-05-16 23:59:59',
        status: 'open'
    },
    tenderStatus:  { status: 'open' },
    announcement:  { title: 'Pengumuman', content: 'Peserta wajib hadir online.' },
    createBid:     { bid_amount: 120000000, proposal_note: 'Penawaran terbaik garansi 3 tahun.' },
    updateBid:     { bid_amount: 115000000, proposal_note: 'Revisi penawaran.' },
    winner:        { bid_id: 1 },
    purchaseOrder: { amount: 115000000, notes: 'PO untuk pemenang.' }
};

const GROUPS = [
    { group: 'Auth', items: [
        { label: 'Register',                    method: 'POST',  path: '/api/auth/register',       access: 'public', bodyKey: 'register' },
        { label: 'Login',                       method: 'POST',  path: '/api/auth/login',           access: 'public', bodyKey: 'loginByRole' },
        { label: 'Logout',                      method: 'POST',  path: '/api/auth/logout',          access: 'any',    bodyKey: null },
        { label: 'Get Profile (Me)',            method: 'GET',   path: '/api/auth/me',              access: 'any',    bodyKey: null },
        { label: 'Change Password',             method: 'PUT',   path: '/api/auth/change-password', access: 'any',    bodyKey: 'changePassword' }
    ]},
    { group: 'Vendor', items: [
        { label: 'Get Vendor Profile',          method: 'GET',   path: '/api/vendors/me',           access: 'vendor', bodyKey: null },
        { label: 'Update Vendor Profile',       method: 'PUT',   path: '/api/vendors/me',           access: 'vendor', bodyKey: 'updateVendor' },
        { label: 'Check Verification Status',   method: 'GET',   path: '/api/vendors/status',       access: 'vendor', bodyKey: null },
        { label: 'Get Documents',               method: 'GET',   path: '/api/vendors/documents',    access: 'vendor', bodyKey: null },
        { label: 'Upload Document',             method: 'POST',  path: '/api/vendors/documents',    access: 'vendor', bodyKey: null, upload: true }
    ]},
    { group: 'Admin - Vendors', items: [
        { label: 'List All Vendors',            method: 'GET',   path: '/api/admin/vendors',           access: 'admin', bodyKey: null },
        { label: 'Get Vendor Detail',           method: 'GET',   path: '/api/admin/vendors/1',         access: 'admin', bodyKey: null },
        { label: 'Verify/Update Vendor Status', method: 'PATCH', path: '/api/admin/vendors/1/status',  access: 'admin', bodyKey: 'vendorStatus' }
    ]},
    { group: 'Tenders', items: [
        { label: 'List Tenders (Vendor)',       method: 'GET',   path: '/api/tenders',                        access: 'vendor', bodyKey: null },
        { label: 'Tender Detail (Vendor)',      method: 'GET',   path: '/api/tenders/101',                    access: 'vendor', bodyKey: null },
        { label: 'List Tenders (Admin)',        method: 'GET',   path: '/api/admin/tenders',                  access: 'admin', bodyKey: null },
        { label: 'Create Tender (Admin)',       method: 'POST',  path: '/api/admin/tenders',                  access: 'admin', bodyKey: 'createTender' },
        { label: 'Tender Detail (Admin)',       method: 'GET',   path: '/api/admin/tenders/101',              access: 'admin', bodyKey: null },
        { label: 'Update Tender (Admin)',       method: 'PUT',   path: '/api/admin/tenders/101',              access: 'admin', bodyKey: 'updateTender' },
        { label: 'Update Tender Status',        method: 'PATCH', path: '/api/admin/tenders/101/status',       access: 'admin', bodyKey: 'tenderStatus' }
    ]},
    { group: 'Participation & Aanwijzing', items: [
        { label: 'Participate in Tender',       method: 'POST',  path: '/api/tenders/101/participants',       access: 'vendor', bodyKey: null },
        { label: 'List Participants (Admin)',   method: 'GET',   path: '/api/admin/tenders/101/participants', access: 'admin',  bodyKey: null },
        { label: 'Create Announcement',         method: 'POST',  path: '/api/admin/tenders/101/announcements', access: 'admin',  bodyKey: 'announcement' },
        { label: 'View Announcements',          method: 'GET',   path: '/api/tenders/101/announcements',       access: 'vendor', bodyKey: null }
    ]},
    { group: 'Bidding', items: [
        { label: 'Submit Bid',                  method: 'POST',  path: '/api/tenders/101/bids',               access: 'vendor', bodyKey: 'createBid' },
        { label: 'Update Bid',                  method: 'PUT',   path: '/api/tenders/101/bids/1',             access: 'vendor', bodyKey: 'updateBid' },
        { label: 'My Bid Status',               method: 'GET',   path: '/api/tenders/101/bids/me',            access: 'vendor', bodyKey: null },
        { label: 'List Bids (Admin)',           method: 'GET',   path: '/api/admin/tenders/101/bids',         access: 'admin',  bodyKey: null }
    ]},
    { group: 'Winner & PO', items: [
        { label: 'Select Winner (Admin)',       method: 'POST',  path: '/api/admin/tenders/101/winner',         access: 'admin',  bodyKey: 'winner' },
        { label: 'View Winner (Vendor)',        method: 'GET',   path: '/api/tenders/101/winner',               access: 'vendor', bodyKey: null },
        { label: 'Tender Result',               method: 'GET',   path: '/api/tenders/101/result',               access: 'vendor', bodyKey: null },
        { label: 'Create PO (Admin)',           method: 'POST',  path: '/api/admin/tenders/101/purchase-order', access: 'admin',  bodyKey: 'purchaseOrder' },
        { label: 'View PO (Admin)',             method: 'GET',   path: '/api/admin/tenders/101/purchase-order', access: 'admin',  bodyKey: null }
    ]},
    { group: 'Dashboard', items: [
        { label: 'Admin Dashboard Summary',     method: 'GET',   path: '/api/admin/dashboard',                access: 'admin',  bodyKey: null }
    ]}
];

// --- Application Logic ---
let flat = [];
let reqHistory = [];
let lastJson = '';

const el = id => document.getElementById(id);
const val = id => el(id).value.trim();
const getRole = () => val('roleInput');
const getToken = () => val('tokenInput');
const getEp = () => flat[Number(val('endpointInput'))];

function init() {
    const sel = el('endpointInput');
    flat = [];
    GROUPS.forEach(({ group, items }) => {
        const og = document.createElement('optgroup');
        og.label = group;
        items.forEach(item => {
            flat.push(item);
            const opt = document.createElement('option');
            opt.value = flat.length - 1;
            opt.textContent = `${item.method} ${item.path}`;
            og.appendChild(opt);
        });
        sel.appendChild(og);
    });
    
    sel.addEventListener('change', onEpChange);
    el('roleInput').addEventListener('change', () => { resetBody(); });
    
    // Load saved state
    el('roleInput').value = localStorage.getItem('api_role') || 'vendor';
    el('tokenInput').value = localStorage.getItem('api_token') || '';
    
    onEpChange();
    renderHistory();
}

function onEpChange() {
    const ep = getEp();
    if (!ep) return;
    
    el('urlMethod').textContent = ep.method;
    el('urlMethod').className = 'method-badge method-' + ep.method;
    el('urlPath').textContent = BASE_URL + ep.path;
    
    updateHint(ep);
    resetBody();
}

function updateHint(ep) {
    const hint = el('accessHint');
    const text = el('accessHintText');
    
    if (!ep || ep.access === 'public') {
        hint.style.display = 'none';
        return;
    }
    
    hint.style.display = 'flex';
    if (ep.access === 'admin') {
        hint.className = 'access-hint hint-admin';
        text.innerHTML = '<strong>Admin Access Only.</strong> Make sure to login as Admin.';
    } else if (ep.access === 'vendor') {
        hint.className = 'access-hint hint-vendor';
        text.innerHTML = '<strong>Vendor Access Only.</strong> Make sure to login as Vendor.';
    } else {
        hint.className = 'access-hint hint-public';
        text.innerHTML = 'Requires authentication token.';
    }
}

function resetBody() {
    const ep = getEp();
    if (!ep) return;
    
    const key = ep.bodyKey === 'loginByRole' ? null : ep.bodyKey;
    const loginBody = getRole() === 'admin' ? BODIES.loginAdmin : BODIES.loginVendor;
    const body = ep.bodyKey === 'loginByRole' ? loginBody : (key ? BODIES[key] : null);

    const input = el('bodyInput');
    const note = el('bodyNote');
    
    if (!body) {
        input.value = '';
        input.disabled = true;
        if (ep.upload) {
            input.placeholder = 'File upload request. Multipart form-data will be sent automatically.';
            note.textContent = 'A dummy PDF document will be generated and uploaded.';
        } else {
            input.placeholder = 'No request body required.';
            note.textContent = '';
        }
    } else {
        input.disabled = false;
        input.value = JSON.stringify(body, null, 4);
        note.textContent = 'You can modify the JSON payload before sending.';
    }
}

function updateStatus(state, code, ms) {
    const badge = el('statusBadge');
    el('responseTime').textContent = ms ? `${ms} ms` : '';
    
    if (state === 'loading') {
        badge.className = 'status-badge status-idle';
        badge.textContent = 'Processing...';
        return;
    }
    
    if (state === 'error_local') {
        badge.className = 'status-badge status-error';
        badge.textContent = 'Failed';
        return;
    }
    
    const intCode = parseInt(code);
    badge.textContent = `${intCode}`;
    
    if (intCode >= 200 && intCode < 300) badge.className = 'status-badge status-success';
    else if (intCode >= 400 && intCode < 500) badge.className = 'status-badge status-warning';
    else if (intCode >= 500) badge.className = 'status-badge status-error';
    else badge.className = 'status-badge status-idle';
}

function showResponse(data, btnShow = true) {
    const text = typeof data === 'string' ? data : JSON.stringify(data, null, 4);
    el('responseBox').textContent = text;
    lastJson = text;
    el('btnCopy').style.display = btnShow ? 'block' : 'none';
}

async function doLogin() {
    const role = getRole();
    const loginBody = role === 'admin' ? BODIES.loginAdmin : BODIES.loginVendor;
    const path = '/api/auth/login';

    updateStatus('loading');
    showResponse('Sending login request...', false);

    const t0 = Date.now();
    try {
        const res = await fetch(BASE_URL + path, {
            method: 'POST',
            headers: { 'Accept': 'application/json', 'Content-Type': 'application/json' },
            body: JSON.stringify(loginBody)
        });
        const ms = Date.now() - t0;
        
        const result = res.headers.get('content-type')?.includes('application/json')
            ? await res.json() : await res.text();

        updateStatus('done', res.status, ms);
        
        const token = (result?.data?.access_token) || DEMO_TOKENS[role];
        el('tokenInput').value = token;
        localStorage.setItem('api_token', token);
        localStorage.setItem('api_role', role);

        addHistory('POST', path, res.status);
        
        if (res.status >= 400) {
            showResponse(result);
        } else {
            showResponse({
                _meta: "Logged in successfully",
                saved_token: token,
                role: role,
                server_response: result
            });
        }
    } catch (err) {
        updateStatus('error_local');
        showResponse({ error: 'Connection failed. Is the Laravel server running?', message: err.message }, false);
    }
}

async function sendRequest() {
    const ep = getEp();
    if (!ep) return;

    updateStatus('loading');
    showResponse('Sending request...', false);

    if (ep.upload) { await sendUpload(ep); return; }

    let body = null;
    if (ep.bodyKey && !el('bodyInput').disabled) {
        try { 
            body = el('bodyInput').value.trim() ? JSON.parse(el('bodyInput').value) : null; 
        } catch (e) {
            updateStatus('done', 422, null);
            showResponse({ error: 'Invalid JSON format in Request Body', details: e.message });
            return;
        }
    }

    const headers = { 'Accept': 'application/json' };
    const token = getToken();
    if (token) headers['Authorization'] = `Bearer ${token}`;
    if (body) headers['Content-Type'] = 'application/json';

    const t0 = Date.now();
    try {
        const res = await fetch(BASE_URL + ep.path, {
            method: ep.method,
            headers,
            body: body ? JSON.stringify(body) : undefined
        });
        const ms = Date.now() - t0;
        
        const result = res.headers.get('content-type')?.includes('application/json')
            ? await res.json() : await res.text();

        updateStatus('done', res.status, ms);
        addHistory(ep.method, ep.path, res.status);

        if (res.status >= 400) {
            showResponse(result);
        } else {
            showResponse({
                _request: { method: ep.method, path: ep.path, body },
                response: result
            });
        }
    } catch (err) {
        updateStatus('error_local');
        showResponse({ error: 'Request failed. Is the server running?', details: err.message }, false);
    }
}

async function sendUpload(ep) {
    const headers = { 'Accept': 'application/json' };
    const token = getToken();
    if (token) headers['Authorization'] = `Bearer ${token}`;

    const form = new FormData();
    form.append('document_type', 'izin_usaha');
    form.append('file', new Blob(['Dummy PDF content'], { type: 'application/pdf' }), 'dokumen-dummy.pdf');

    const t0 = Date.now();
    try {
        const res = await fetch(BASE_URL + ep.path, { method: ep.method, headers, body: form });
        const ms = Date.now() - t0;
        
        const result = res.headers.get('content-type')?.includes('application/json')
            ? await res.json() : await res.text();
            
        updateStatus('done', res.status, ms);
        addHistory(ep.method, ep.path, res.status);
        
        if (res.status >= 400) {
            showResponse(result);
        } else {
            showResponse({
                _request: { upload: 'dokumen-dummy.pdf' },
                response: result
            });
        }
    } catch (err) {
        updateStatus('error_local');
        showResponse({ error: 'Upload failed', details: err.message }, false);
    }
}

function copyResponse() {
    navigator.clipboard.writeText(lastJson).then(() => {
        const btn = el('btnCopy');
        const oldText = btn.textContent;
        btn.textContent = 'Copied!';
        btn.style.color = 'var(--success)';
        setTimeout(() => { 
            btn.textContent = oldText; 
            btn.style.color = '';
        }, 2000);
    });
}

function addHistory(method, path, code) {
    reqHistory.unshift({ method, path, code });
    if (reqHistory.length > 5) reqHistory.pop();
    renderHistory();
}

function renderHistory() {
    const list = el('historyList');
    if (reqHistory.length === 0) {
        list.innerHTML = '<div class="empty-state">No requests yet</div>';
        return;
    }
    
    list.innerHTML = reqHistory.map((h, i) => {
        let statusColor = 'var(--text-muted)';
        if (h.code >= 200 && h.code < 300) statusColor = 'var(--success)';
        else if (h.code >= 400 && h.code < 500) statusColor = 'var(--warning)';
        else if (h.code >= 500) statusColor = 'var(--danger)';
        
        return `
        <div class="history-item" onclick="replayHistory(${i})">
            <div class="history-main">
                <span class="method-badge method-${h.method}" style="font-size: 10px; padding: 2px 6px;">${h.method}</span>
                <span class="history-path">${h.path}</span>
            </div>
            <span class="history-status" style="color: ${statusColor}">${h.code}</span>
        </div>
        `;
    }).join('');
}

function replayHistory(i) {
    const h = reqHistory[i];
    const idx = flat.findIndex(ep => ep.method === h.method && ep.path === h.path);
    if (idx >= 0) {
        el('endpointInput').value = idx;
        onEpChange();
    }
}

function resetAll() {
    localStorage.removeItem('api_token');
    localStorage.removeItem('api_role');
    el('tokenInput').value = '';
    el('roleInput').value = 'vendor';
    reqHistory = [];
    renderHistory();
    updateStatus('idle');
    showResponse('Select an endpoint and click "Send Request" to view the response here.', false);
    resetBody();
}

window.addEventListener('load', init);
</script>
</body>
</html>