<x-hero-section>
    <!-- Table -->
    <div class="shadow-lg rounded-md border border-gray-200">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-bold text-3xl text-white-800 mt-3 mb-5">SMA Dua Futsal Club</h2>
            <a href="{{ route('kesehatan.create') }}"
                class="w-40 h-9 mr-3 rounded flex justify-center items-center border font-bold text-lg text-white bg-blue-500 hover:bg-blue-400">Tambah
                Kesehatan</a>
        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-gray-800 bg-gray-50">
                    <thead class="text-xs font-semibold uppercase border-b border-black">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">ID Murid</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">NIM</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nama Anggota</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Kelas</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">HP</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-800 py-4">
                        @foreach ($kesehatans as $kesehatan)
                            <tr>
                                <td>{{ $kesehatan->id }}</td>
                                <td>{{ $kesehatan->nim }}</td>
                                <td>{{ $kesehatan->nama_anggota }}</td>
                                <td>{{ $kesehatan->kelas }}</td>
                                <td>{{ $kesehatan->hp }}</td>
                                <td class="flex justify-center">
                                    <a href="{{ route('kesehatan.edit', $kesehatan->id) }}" class="btn mx-3">Edit</a>

                                    <form action="{{ route('kesehatan.destroy', $kesehatan->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn mx-3"
                                            onclick="return confirm('Hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-hero-section>