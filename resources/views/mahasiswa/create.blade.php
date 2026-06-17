<x-app-layout>

<div class="max-w-3xl mx-auto p-6">

    <div class="bg-white p-6 rounded-lg shadow">

        <h2 class="text-2xl font-bold mb-5">
            Tambah Mahasiswa
        </h2>

        <form action="{{ route('mahasiswa.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label>NIM</label>
                <input type="text"
                       name="nim"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label>Nama</label>
                <input type="text"
                       name="nama"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label>Email</label>
                <input type="email"
                       name="email"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin"
                        class="w-full border rounded p-2">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-4">
                <label>Alamat</label>
                <textarea name="alamat"
                          class="w-full border rounded p-2"></textarea>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Simpan
            </button>

        </form>

    </div>

</div>

</x-app-layout>