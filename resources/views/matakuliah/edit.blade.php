<x-app-layout>

<div class="max-w-3xl mx-auto py-6">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-6">
            Edit Mata Kuliah
        </h2>

        <form action="{{ route('matakuliah.update',$matakuliah->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Kode Mata Kuliah</label>

                <input type="text"
                       name="kode_mk"
                       value="{{ $matakuliah->kode_mk }}"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label>Nama Mata Kuliah</label>

                <input type="text"
                       name="nama_mk"
                       value="{{ $matakuliah->nama_mk }}"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label>SKS</label>

                <input type="number"
                       name="sks"
                       value="{{ $matakuliah->sks }}"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <button
                class="bg-green-600 text-white px-5 py-2 rounded-lg">
                Update
            </button>

        </form>

    </div>

</div>

</x-app-layout>