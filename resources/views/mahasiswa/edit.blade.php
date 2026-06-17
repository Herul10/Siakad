<x-app-layout>

<div class="max-w-3xl mx-auto p-6">

    <div class="bg-white p-6 rounded-lg shadow">

        <h2 class="text-2xl font-bold mb-5">
            Edit Mahasiswa
        </h2>

        <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>NIM</label>
                <input type="text"
                       name="nim"
                       value="{{ $mahasiswa->nim }}"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label>Nama</label>
                <input type="text"
                       name="nama"
                       value="{{ $mahasiswa->nama }}"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label>Email</label>
                <input type="email"
                       name="email"
                       value="{{ $mahasiswa->email }}"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label>Alamat</label>
                <textarea name="alamat"
                          class="w-full border rounded p-2">{{ $mahasiswa->alamat }}</textarea>
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Update
            </button>

        </form>

    </div>

</div>

</x-app-layout>