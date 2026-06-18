<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - @yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-100 font-sans antialiased text-slate-800">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-indigo-950 text-slate-200 flex flex-col shadow-xl">

        <!-- LOGO -->
        <div class="p-6 border-b border-indigo-900">
            <h1 class="text-2xl font-bold tracking-wider text-white flex items-center gap-3">
                <i class="fa-solid fa-graduation-cap text-indigo-400"></i>
                SIAKAD
            </h1>
        </div>

        <!-- MENU -->
        <nav class="flex-1 p-4 space-y-2">

            <a href="{{ url('/dashboard') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200
               {{ Request::is('dashboard') ? 'bg-indigo-600 text-white font-semibold' : 'hover:bg-indigo-900' }}">

                <i class="fa-solid fa-chart-pie"></i>
                Dashboard
            </a>

            <a href="{{ route('mahasiswa.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200
               {{ Request::is('mahasiswa*') ? 'bg-indigo-600 text-white font-semibold' : 'hover:bg-indigo-900' }}">

                <i class="fa-solid fa-user-graduate"></i>
                Mahasiswa
            </a>

            <a href="{{ route('dosen.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200
               {{ Request::is('dosen*') ? 'bg-indigo-600 text-white font-semibold' : 'hover:bg-indigo-900' }}">

                <i class="fa-solid fa-chalkboard-user"></i>
                Dosen
            </a>

            <a href="{{ route('prodi.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200
               {{ Request::is('prodi*') ? 'bg-indigo-600 text-white font-semibold' : 'hover:bg-indigo-900' }}">

                <i class="fa-solid fa-building-columns"></i>
                Program Studi
            </a>

            <a href="{{ route('matakuliah.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200
               {{ Request::is('matakuliah*') ? 'bg-indigo-600 text-white font-semibold' : 'hover:bg-indigo-900' }}">

                <i class="fa-solid fa-book"></i>
                Mata Kuliah
            </a>

        </nav>

        <!-- USER PANEL -->
        <div class="p-4 border-t border-indigo-900">

            <div class="bg-indigo-900 rounded-xl p-3 mb-4">

                <div class="flex items-center gap-3">

                    <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center font-bold text-white">
                        {{ strtoupper(substr(Auth::user()->name,0,1)) }}
                    </div>

                    <div>
                        <div class="text-sm font-semibold text-white">
                            {{ Auth::user()->name }}
                        </div>

                        <div class="text-xs text-indigo-300">
                            Administrator
                        </div>
                    </div>

                </div>

            </div>

            <!-- LOGOUT -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl flex items-center justify-center gap-2 transition">

                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout

                </button>
            </form>

        </div>

        <!-- FOOTER -->
        <div class="p-4 border-t border-indigo-900 text-center text-xs text-indigo-300">
            © {{ date('Y') }} SIAKAD Systems
        </div>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1">

        <!-- TOPBAR -->
        <div class="bg-white shadow-sm px-8 py-4 flex justify-between items-center">

            <div>
                <h2 class="font-bold text-xl">
                    Sistem Informasi Akademik
                </h2>
            </div>

            <div class="flex items-center gap-3">

                <div class="text-right">
                    <div class="font-semibold">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="text-xs text-gray-500">
                        Administrator
                    </div>
                </div>

                <div class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center font-bold">
                    {{ strtoupper(substr(Auth::user()->name,0,1)) }}
                </div>

            </div>

        </div>

        <!-- PAGE CONTENT -->
        <div class="p-8">
            @yield('content')
        </div>

    </main>

</div>

</body>
</html>