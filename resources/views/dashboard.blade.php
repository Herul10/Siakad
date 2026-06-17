<x-app-layout>

<div class="space-y-6">

    <!-- Header -->
    <div>
        <h1 class="text-4xl font-bold text-gray-800">
            Dashboard Admin
        </h1>

        <p class="text-gray-500 mt-2">
            Selamat datang kembali di Sistem Informasi Akademik
        </p>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        <div class="bg-white p-6 rounded-2xl shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Mahasiswa</p>
                    <h2 class="text-4xl font-bold text-blue-600">
                        {{ \App\Models\Mahasiswa::count() }}
                    </h2>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            <div>
                <p class="text-gray-500">Dosen</p>
                <h2 class="text-4xl font-bold text-green-600">
                    {{ \App\Models\Dosen::count() }}
                </h2>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            <div>
                <p class="text-gray-500">Program Studi</p>
                <h2 class="text-4xl font-bold text-yellow-500">
                    {{ \App\Models\Prodi::count() }}
                </h2>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            <div>
                <p class="text-gray-500">Mata Kuliah</p>
                <h2 class="text-4xl font-bold text-red-500">
                    {{ \App\Models\MataKuliah::count() }}
                </h2>
            </div>
        </div>

    </div>

    <!-- Welcome -->
    <div class="bg-white rounded-2xl shadow p-8">
        <h2 class="text-3xl font-bold mb-3">
            Selamat Datang di SIAKAD
        </h2>

        <p class="text-gray-600">
            Sistem Informasi Akademik membantu pengelolaan mahasiswa,
            dosen, program studi, mata kuliah, nilai dan absensi.
        </p>

        <a href="{{ route('mahasiswa.index') }}"
           class="inline-block mt-5 px-5 py-3 bg-blue-600 text-white rounded-xl">
            Kelola Mahasiswa
        </a>
    </div>

</div>

</x-app-layout>