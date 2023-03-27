
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Cars Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('merk') text-red-500 @enderror">merk</span>
                                <input type="text" name="merk"
                                    class="block @error('merk') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('merk')}}" />
                            </label>
                            @error('merk')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                              
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('tipe') text-red-500 @enderror">tipe</span>
                                <textarea
                                    class="block @error('tipe') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="tipe" rows="3">{{old('tipe')}}</textarea>
                            </label>
                            @error('tipe')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('plat_nomor') text-red-500 @enderror">plat_nomor</span>
                                <textarea
                                    class="block @error('plat_nomor') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="plat_nomor" rows="3">{{old('plat_nomor')}}</textarea>
                            </label>
                            @error('plat_nomor')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('tahun_pembuatan') text-red-500 @enderror">tahun_pembuatan</span>
                                <textarea
                                    class="block @error('tahun_pembuatan') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="tahun_pembuatan" rows="3">{{old('tahun_pembuatan')}}</textarea>
                            </label>
                            @error('tahun_pembuatan')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('kapasitas_penumpang') text-red-500 @enderror">kapasitas_penumpang</span>
                                <textarea
                                    class="block @error('kapasitas_penumpang') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="kapasitas_penumpang" rows="3">{{old('kapasitas_penumpang')}}</textarea>
                            </label>
                            @error('kapasitas_penumpang')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                             <select class="block mt-5" name="status">
                                <option value="tersedia" id="tersedia-option">Tersedia</option>
                                <option value="tidak tersedia" id="tidak-tersedia-option">Tidak Tersedia</option>
                            </select>
                            @error('status')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="photo"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('photo')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>