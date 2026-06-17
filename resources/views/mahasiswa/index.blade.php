<x-app-layout>

<div class="p-6">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold">
            Data Mahasiswa
        </h1>

        <a href="{{ route('mahasiswa.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded-lg">
            + Tambah Mahasiswa
        </a>

    </div>

    <form method="GET" class="mb-4">
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari NIM atau Nama..."
            class="border rounded-lg px-4 py-2 w-64">

        <button class="bg-gray-700 text-white px-4 py-2 rounded-lg">
            Cari
        </button>
    </form>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-lg overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">NIM</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
            @forelse($mahasiswa as $mhs)
                <tr class="border-t">
                    <td class="p-3">{{ $mhs->nim }}</td>
                    <td class="p-3">{{ $mhs->nama }}</td>
                    <td class="p-3">{{ $mhs->email }}</td>

                    <td class="p-3">

                        <a href="{{ route('mahasiswa.edit',$mhs->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('mahasiswa.destroy',$mhs->id) }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin hapus data?')"
                                class="bg-red-600 text-white px-3 py-1 rounded">

                                Hapus

                            </button>

                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center p-5">
                        Data belum tersedia
                    </td>
                </tr>
            @endforelse
            </tbody>

        </table>

    </div>

    <div class="mt-5">
        {{ $mahasiswa->links() }}
    </div>

</div>

</x-app-layout>