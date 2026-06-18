<x-app-layout>

<div class="max-w-3xl mx-auto p-6">

    <div class="bg-white p-6 rounded-lg shadow">

        <h2 class="text-2xl font-bold mb-5">
            Edit Mahasiswa
        </h2>

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-2 font-medium">
                    NIM
                </label>

                <input type="text"
                       name="nim"
                       value="{{ $mahasiswa->nim }}"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-medium">
                    Nama
                </label>

                <input type="text"
                       name="nama"
                       value="{{ $mahasiswa->nama }}"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-medium">
                    Jenis Kelamin
                </label>

                <select name="jenis_kelamin"
                        class="w-full border rounded p-2">

                    <option value="Laki-laki"
                        {{ $mahasiswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                        Laki-laki
                    </option>

                    <option value="Perempuan"
                        {{ $mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                        Perempuan
                    </option>

                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-medium">
                    Jurusan
                </label>

                <input type="text"
                       name="jurusan"
                       value="{{ $mahasiswa->jurusan }}"
                       class="w-full border rounded p-2">
            </div>

            <div class="flex gap-3">

                <a href="{{ route('mahasiswa.index') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded">
                    Kembali
                </a>

                <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded">
                    Update
                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>