<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Procurement API - Kelompok 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .method-badge { width: 52px; text-align: center; display: inline-block; }
        .scrollbar-thin::-webkit-scrollbar { width: 6px; }
        .scrollbar-thin::-webkit-scrollbar-track { background: transparent; }
        .scrollbar-thin::-webkit-scrollbar-thumb { background-color: #e2e8f0; border-radius: 20px; }
    </style>
</head>
<body class="min-h-screen text-slate-800 py-12 px-4 sm:px-6">
    <div class="max-w-5xl mx-auto space-y-8">
        
        <!-- Header -->
        <div class="text-center space-y-3 mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-slate-900">E-Procurement API</h1>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto font-medium">Tender & Bidding System</p>
            <div class="pt-2">
                <span class="inline-flex items-center justify-center px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-semibold uppercase tracking-wider">
                    UAS Pemrograman Berbasis Framework
                </span>
            </div>
        </div>

        <!-- Team Members -->
        <div class="bg-white rounded-3xl shadow-sm border border-slate-200/60 p-8 md:p-10 transition-all hover:shadow-md">
            <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                Anggota Tim
            </h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="p-5 rounded-2xl bg-slate-50/50 border border-slate-100 hover:border-blue-200 hover:bg-blue-50/30 transition-colors">
                    <div class="font-bold text-slate-800">Rafi Ariz Rahmal</div>
                    <div class="text-slate-500 text-sm mt-1 font-medium">24416255201021</div>
                </div>
                <div class="p-5 rounded-2xl bg-slate-50/50 border border-slate-100 hover:border-blue-200 hover:bg-blue-50/30 transition-colors">
                    <div class="font-bold text-slate-800">Cynthia Juniartien</div>
                    <div class="text-slate-500 text-sm mt-1 font-medium">24416255201037</div>
                </div>
                <div class="p-5 rounded-2xl bg-slate-50/50 border border-slate-100 hover:border-blue-200 hover:bg-blue-50/30 transition-colors">
                    <div class="font-bold text-slate-800">Muhammad Vicky</div>
                    <div class="text-slate-500 text-sm mt-1 font-medium">24416255201039</div>
                </div>
                <div class="p-5 rounded-2xl bg-slate-50/50 border border-slate-100 hover:border-blue-200 hover:bg-blue-50/30 transition-colors">
                    <div class="font-bold text-slate-800">Andika Khoir Rijal</div>
                    <div class="text-slate-500 text-sm mt-1 font-medium">24416255201047</div>
                </div>
                <div class="p-5 rounded-2xl bg-slate-50/50 border border-slate-100 hover:border-blue-200 hover:bg-blue-50/30 transition-colors">
                    <div class="font-bold text-slate-800">Chandra Aditiya Putra</div>
                    <div class="text-slate-500 text-sm mt-1 font-medium">24416255201246</div>
                </div>
            </div>
        </div>

        <!-- Endpoints List -->
        <div class="bg-white rounded-3xl shadow-sm border border-slate-200/60 p-8 md:p-10 transition-all hover:shadow-md">
            <div class="flex flex-col mb-10 gap-4">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <h3 class="text-xl font-bold text-slate-800 flex items-center">
                        <svg class="w-6 h-6 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        API Endpoints Reference
                    </h3>
                    <div class="px-5 py-2.5 bg-slate-50 rounded-xl text-sm font-mono text-slate-600 border border-slate-200 flex items-center">
                        <span class="text-slate-400 select-none mr-3 text-xs uppercase tracking-wider font-bold">Base URL</span>
                        <span class="font-bold text-slate-800">https://api.vandrafcy.my.id</span>
                    </div>
                </div>
                <div class="p-4 bg-amber-50 border border-amber-100 rounded-xl text-sm text-amber-800">
                    💡 <strong>Catatan Pengujian:</strong> Untuk menghindari pemblokiran CORS dari browser, mohon gunakan aplikasi <strong>Apidog Desktop, Postman, atau Insomnia</strong> saat melakukan <i>request</i> ke endpoint di bawah ini.
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-10">
                
                <!-- Column 1 -->
                <div class="space-y-10">
                    <!-- Auth -->
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-400 uppercase tracking-widest mb-4">Authentication</h4>
                        <ul class="space-y-2.5">
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/auth/register</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/auth/login</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/auth/logout</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/auth/me</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-amber-700 bg-amber-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">PUT</span><span class="text-slate-600 font-medium">/api/auth/change-password</span></li>
                        </ul>
                    </div>

                    <!-- Vendor -->
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-400 uppercase tracking-widest mb-4">Vendor Profile & Docs</h4>
                        <ul class="space-y-2.5">
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/vendors/me</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-amber-700 bg-amber-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">PUT</span><span class="text-slate-600 font-medium">/api/vendors/me</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/vendors/status</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/vendors/documents</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/vendors/documents</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="space-y-10">
                    <!-- Tenders Public -->
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-400 uppercase tracking-widest mb-4">Tenders & Bidding</h4>
                        <ul class="space-y-2.5">
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/tenders</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/tenders/{id}</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/tenders/{id}/participants</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/tenders/{id}/bids</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-amber-700 bg-amber-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">PUT</span><span class="text-slate-600 font-medium">/api/tenders/{id}/bids/{bidId}</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/tenders/{id}/bids/me</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/tenders/{id}/winner</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/tenders/{id}/result</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/tenders/{id}/announcements</span></li>
                        </ul>
                    </div>

                    <!-- Admin -->
                    <div>
                        <h4 class="text-xs font-extrabold text-slate-400 uppercase tracking-widest mb-4">Admin Panel</h4>
                        <ul class="space-y-2.5 max-h-[380px] overflow-y-auto pr-3 scrollbar-thin">
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/admin/dashboard</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/admin/vendors</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/admin/vendors/{id}</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-purple-700 bg-purple-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">PATCH</span><span class="text-slate-600 font-medium">/api/admin/vendors/{id}/status</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/admin/tenders</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/admin/tenders</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-amber-700 bg-amber-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">PUT</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-purple-700 bg-purple-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">PATCH</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}/status</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}/participants</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}/announc..</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}/bids</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}/winner</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-blue-700 bg-blue-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">GET</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}/po</span></li>
                            <li class="flex items-center text-sm font-mono bg-white hover:bg-slate-50 p-3 rounded-xl border border-slate-100 transition-colors"><span class="method-badge text-emerald-700 bg-emerald-100/60 rounded-md px-1.5 py-1 text-[11px] font-bold mr-4">POST</span><span class="text-slate-600 font-medium">/api/admin/tenders/{id}/po</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center text-sm text-slate-400 pb-8 mt-12">
            <p>&copy; 2026 Universitas Buana Perjuangan Karawang. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
