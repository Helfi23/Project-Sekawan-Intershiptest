
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Driver Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form method="POST" action="{{ route('drivers.store') }}" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700">Name</span>
                                <input type="text" name="nama_driver"
                                    class="block w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('nama_driver')}}" />
                            </label>
                        </div>
    
                        <div class="form-group">
                            
                            <label class="block mt-5">
                                <span class="text-gray-700 ">Contack</span>
                                <textarea
                                    class="block  w-full mt-1 rounded-md"
                                    name="nomor_telepon" rows="3">{{old('nomor_telepon')}}</textarea>
                            </label>
                        </div>
    
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700">Address</span>
                                <textarea
                                    class="block w-full mt-1 rounded-md"
                                    name="alamat" rows="3">{{old('alamat')}}</textarea>
                            </label>
                        </div>
                         <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700">Jenis Kendaraan</span>
                                <textarea
                                    class="block w-full mt-1 rounded-md"
                                    name="jenis_kendaraan" rows="3">{{old('jenis_kendaraan')}}</textarea>
                            </label>
                        </div>
                         <div class="form-group">
                            <select class="block mt-5" name="status">
                                <option value="aktif" id="aktif-option">Aktif</option>
                                <option value="tidak aktif" id="tidak-aktif-option">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="photo"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600 mt-5 rounded text-sm px-5 py-2.5">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>