<x-hero-section>
    <!-- Table -->
    <div class="shadow-lg rounded-md border border-gray-200">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-bold text-3xl text-white-800 mt-3 mb-5">SMA Dua Futsal Club</h2>
            <a href="{{ route('pelatih.create') }}" class="w-36 h-9 mr-3 rounded flex justify-center items-center border font-bold text-lg text-white bg-blue-500 hover:bg-blue-400">Tambah Pelatih</a>
        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-gray-800 bg-gray-50">
                    <thead class="text-xs font-semibold uppercase border border-black">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">ID Pelatih</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">NIP</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nama Pelatih</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">HP</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                        @foreach ($pelatihs as $pelatih)
                            <tr>
                                <td>{{ $pelatih->id }}</td>
                                <td>{{ $pelatih->nip }}</td>
                                <td>{{ $pelatih->nama_pelatih }}</td>
                                <td>{{ $pelatih->hp }}</td>
                                <td class="flex justify-center">
                                    <a href="{{ route('pelatih.edit', $pelatih->id) }}" class="btn mx-3">Edit</a>

                                    <form action="{{ route('pelatih.destroy', $pelatih->id) }}" method="POST">
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