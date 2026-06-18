<x-app-layout>

<div class="max-w-3xl mx-auto py-6">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-6">
            Edit Program Studi
        </h2>

        <form action="{{ route('prodi.update',$prodi->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Kode Prodi</label>

                <input type="text"
                       name="kode_prodi"
                       value="{{ $prodi->kode_prodi }}"
                       class="w-full border rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label>Nama Program Studi</label>

                <input type="text"
                       name="nama_prodi"
                       value="{{ $prodi->nama_prodi }}"
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