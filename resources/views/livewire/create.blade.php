<html>
    <head>
        @livewireStyles
    </head>
    <body>
        <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <form>
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="">
                                    <div class="mb-4">
                                        <label for="formName" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formName" wire:model="name">
                                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
        
                                    <div class="mb-4">
                                        <label for="formTglLahir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir:</label>
                                        <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formTglLahir" wire:model="tanggal_lahir">
                                        @error('tanggal_lahir') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
        
                                    <div class="mb-4">
                                        <label for="formJk" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</label>
                                        <select class="form-control" wire:model="jenis_kelamin" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="">Pilih</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
        
                                    <div class="mb-4">
                                        <label for="formUsia" class="block text-gray-700 text-sm font-bold mb-2">Usia:</label>
                                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formUsia" wire:model="usia">
                                        @error('usia') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
        
                                    <div class="mb-4">
                                        <label for="formStatus" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                                        <select class="form-control" wire:model="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="">Pilih</option>
                                            <option value="Lama">Lama</option>
                                            <option value="Baru">Baru</option>
                                        </select>
                                        @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="formPoli" class="block text-gray-700 text-sm font-bold mb-2">Poli</label>
                                        <select class="form-control" wire:model="poli" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="">Pilih</option>
                                            <option value="Umum">Umum</option>
                                            <option value="UGD">UGD</option>
                                            <option value="Gigi">Gigi</option>
                                            <option value="KIA">KIA</option>
                                            <option value="Imunisasi">Imunisasi</option>
                                        </select>
                                        @error('poli') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
        
                                    <div class="mb-4">
                                        <label for="formIcd" class="block text-gray-700 text-sm font-bold mb-2">ICD:</label>
                                        <input class="form-control" list="datalistOptions" id="formIcd" wire:model="icd" placeholder="Type to search...">
                                            <datalist id="datalistOptions">
                                                <option Value="D01">
                                                    Penyakit Menular Seksual
                                                </option>
                                                <option value="Z01"> 
                                                    COVID 19
                                                </option>
                                                <option value="A03">
                                                <option value="B02">
                                                <option value="C.35">
                                                <option value="KM4">
                                            </datalist>
                                        @error('icd') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="formDiagnosa" class="block text-gray-700 text-sm font-bold mb-2">Diagnosa:</label>
                                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formDiagnosa" wire:model="diagnosa">
                                        @error('diagnosa') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
        
                                    <div class="mb-4">
                                        <label for="formTerapi" class="block text-gray-700 text-sm font-bold mb-2">Terapi:</label>
                                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formTerapi" wire:model="terapi">
                                        @error('terapi') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                    <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Simpan
                                    </button>
                                </span>
                                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                    
                                    <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Batal
                                    </button>
                                </span>
                            </form>
                        </div>
                    
                </div>
                
            </div>
        </div>
    </body>
    @livewireScripts
    
</div>    
    