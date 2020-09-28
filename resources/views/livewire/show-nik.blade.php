<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Posts (Laravel 8 Livewire CRUD with Jetstream & Tailwind CSS)
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <table class="table">
                <thead>
                  <tr class="bg-gray-100">
                    <th class="px-4 py-2 w-20">No</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Nik</th>
                    <th class="px-4 py-2">Tempat Lahir</th>
                    <th class="px-4 py-2">Jenis Kelamin</th>
                    <th class="px-4 py-2">Nama Provinsi</th>
                    <th class="px-4 py-2">Nama Kabupaten</th>
                    <th class="px-4 py-2">Nama Kecamatan</th>
                    <th class="px-4 py-2">Nama Kelurahan</th>
                    <th class="px-4 py-2">TPS</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($nik as $niks)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $niks->nama }}</td>
                        <td class="border px-4 py-2">{{ $niks->nik }}</td>
                        <td class="border px-4 py-2">{{ $niks->tempat_lahir }}</td>
                        <td class="border px-4 py-2">{{ $niks->jenis_kelamin }}</td>
                        <td class="border px-4 py-2">{{ $niks->namaPropinsi }}</td>
                        <td class="border px-4 py-2">{{ $niks->namaKabko }}</td>
                        <td class="border px-4 py-2">{{ $niks->namaKec }}</td>
                        <td class="border px-4 py-2">{{ $niks->namaKel }}</td>
                        <td class="border px-4 py-2">{{ $niks->tps }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $nik->links() }}
        </div>
    </div>
</div>
