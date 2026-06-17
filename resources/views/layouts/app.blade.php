<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIAKAD</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg">

        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-blue-600">
                SIAKAD
            </h1>
        </div>

        <nav class="p-4 space-y-2">

            <a href="{{ route('dashboard') }}"
               class="block px-4 py-3 rounded-lg hover:bg-blue-100">
                Dashboard
            </a>

            <a href="{{ route('mahasiswa.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-blue-100">
                Mahasiswa
            </a>

            <a href="{{ route('dosen.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-blue-100">
                Dosen
            </a>

            <a href="{{ route('prodi.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-blue-100">
                Program Studi
            </a>

            <a href="{{ route('mata-kuliah.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-blue-100">
                Mata Kuliah
            </a>

        </nav>

    </aside>

    <!-- Content -->
    <main class="flex-1 p-8">
        {{ $slot }}
    </main>

</div>

</body>
</html>