<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tender API - UAS Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-4">
    <div class="max-w-3xl w-full bg-gray-800 rounded-2xl shadow-2xl p-8 border border-gray-700">
        <div class="text-center mb-8">
            <div class="inline-block bg-emerald-500/20 text-emerald-400 px-4 py-1 rounded-full text-sm font-semibold mb-4 tracking-wide border border-emerald-500/30">
                🟢 API STATUS: ONLINE
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400 mb-4">
                Procurement / E-Tender API
            </h1>
            <p class="text-gray-400 text-lg">
                Sistem Informasi Lelang Berbasis RESTful API.<br>
                Powered by Laravel 13 & SQLite.
            </p>
        </div>

        <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-700">
            <h2 class="text-xl font-semibold mb-4 border-b border-gray-700 pb-2">Tim Pengembang (Tugas UAS)</h2>
            
            <div class="space-y-3">
                <!-- Anggota 1 -->
                <div class="flex items-center justify-between p-3 hover:bg-gray-800 rounded-lg transition border border-transparent hover:border-gray-700">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-indigo-500 flex items-center justify-center font-bold shadow-lg">1</div>
                        <div>
                            <p class="font-semibold text-gray-200">Nama Anggota 1</p>
                            <p class="text-sm text-gray-400">Frontend / Tester</p>
                        </div>
                    </div>
                    <div class="text-gray-400 font-mono text-sm bg-gray-800 px-3 py-1 rounded border border-gray-700">NIM: 12345678</div>
                </div>

                <!-- Anggota 2 -->
                <div class="flex items-center justify-between p-3 hover:bg-gray-800 rounded-lg transition border border-transparent hover:border-gray-700">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center font-bold shadow-lg">2</div>
                        <div>
                            <p class="font-semibold text-gray-200">Chandra</p>
                            <p class="text-sm text-gray-400">Backend / DevOps</p>
                        </div>
                    </div>
                    <div class="text-gray-400 font-mono text-sm bg-gray-800 px-3 py-1 rounded border border-gray-700">NIM: GantiNIMAnda</div>
                </div>

                <!-- Anggota 3 -->
                <div class="flex items-center justify-between p-3 hover:bg-gray-800 rounded-lg transition border border-transparent hover:border-gray-700">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-orange-500 to-red-500 flex items-center justify-center font-bold shadow-lg">3</div>
                        <div>
                            <p class="font-semibold text-gray-200">Nama Anggota 3</p>
                            <p class="text-sm text-gray-400">System Analyst</p>
                        </div>
                    </div>
                    <div class="text-gray-400 font-mono text-sm bg-gray-800 px-3 py-1 rounded border border-gray-700">NIM: 12345680</div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center text-gray-500 text-sm">
            <p>Silakan gunakan <span class="text-blue-400 font-semibold">Apidog</span> atau <span class="text-orange-400 font-semibold">Postman</span> untuk mengakses Endpoint API.</p>
            <p class="mt-2">&copy; 2026 - Mata Kuliah ...</p>
        </div>
    </div>
</body>
</html>
