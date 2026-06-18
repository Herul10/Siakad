<x-app-layout>
    <div class="max-w-3xl mx-auto py-6">

        <div class="bg-white shadow rounded-lg p-6">

            <h2 class="text-2xl font-bold mb-6">
                Edit Dosen
            </h2>

            <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block mb-2">NIDN</label>
                    <input type="text"
                           name="nidn"
                           value="{{ $dosen->nidn }}"
                           class="w-full border rounded-lg px-4 py-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Nama</label>
                    <input type="text"
                           name="nama"
                           value="{{ $dosen->nama }}"
                           class="w-full border rounded-lg px-4 py-2">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Email</label>
                    <input type="email"
                           name="email"
                           value="{{ $dosen->email }}"
                           class="w-full border rounded-lg px-4 py-2">
                </div>

                <button
                    class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg">
                    Update
                </button>

                <a href="{{ route('dosen.index') }}"
                   class="bg-gray-500 text-white px-5 py-2 rounded-lg">
                    Kembali
                </a>

            </form>

        </div>
    </div>
</x-app-layout>