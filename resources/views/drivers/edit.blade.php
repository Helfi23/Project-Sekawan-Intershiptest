<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('car Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('drivers.update',$driver->driver_id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('put')
                       <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('merk') text-red-500 @enderror">nama_driver</span>
                                <input type="text" name="nama_driver"
                                    class="block @error('nama_driver') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('nama_driver',$driver->nama_driver)}}" />
                            </label>
                            @error('nama_driver')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                              
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('nomor_telepon') text-red-500 @enderror">nomor_telepon</span>
                                <textarea
                                    class="block @error('nomor_telepon') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="nomor_telepon" rows="3">{{old('nomor_telepon', $driver->nomor_telepon)}}</textarea>
                            </label>
                            @error('nomor_telepon')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('alamat') text-red-500 @enderror">alamat</span>
                                <textarea
                                    class="block @error('alamat') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="alamat" rows="3">{{old('alamat',$driver->alamat)}}</textarea>
                            </label>
                            @error('alamat')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('jenis_kendaraan') text-red-500 @enderror">jenis_kendaraan</span>
                                <textarea
                                    class="block @error('jenis_kendaraan') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="jenis_kendaraan" rows="3">{{old('jenis_kendaraan',$driver->jenis_kendaraan)}}</textarea>
                            </label>
                            @error('jenis_kendaraan')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <select name="status">
                                <option value="aktif" {{ $driver->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="tidak aktif" {{ $driver->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
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
                            <img class="w-full h-48 object-cover object-center" src="{{ asset('images/'.$driver->photo) }}" alt="{{ $driver->name }}">
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>