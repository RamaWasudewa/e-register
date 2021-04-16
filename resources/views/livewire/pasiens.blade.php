<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Pasien
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah Pasien</button>
            <div class="card-body">
                <livewire:pasien-datatables
                    model="App\Models\Pasien"
                    searchable="name"
                    exportable
                />
            </div>


            {{-- <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah Pasien</button> --}}
            
            @if($isModal)
                @include('livewire.create')
            @endif

            {{-- <table class="class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Jenis Kelamin</th>
                        <th class="px-4 py-2 w-20">Usia</th>
                        <th class="px-4 py-2 w-20">Status</th>
                        <th class="px-4 py-2 w-20">ICD</th>
                        <th class="px-4 py-2">Terapi</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @forelse($pasiens as $row)
                    <?php $no++; ?>    
                        <tr>
                            <td class="border px-4 py-2">{{ $no }}</td>
                            <td class="border px-3 py-2 w-60">{{ $row->name }}</td>
                            <td class="border px-4 py-2">{{ $row->jk }}</td>
                            <td class="border px-4 py-2">{{ $row->usia }}</td>
                            <td class="border px-4 py-2">{{$row->status}}</td>
                            <td class="border px-4 py-2">{{ $row->icd }}</td>
                            <td class="border px-4 py-2">{{ $row->terapi }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">Edit</button>
                                <button wire:click="delete({{ $row->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table> --}}
            
        </div>
    </div>
</div>