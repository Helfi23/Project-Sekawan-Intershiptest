<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Driver Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-1 mb-4">
                <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                    href="{{ route('drivers.index') }}">{{ __('Back') }}</a>
            </div>
            <div class="block mt-5 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class=" flex flex-col items-center justify-center">
                        <img class=" h-48 object-cover object-center" src="{{ asset('images/'.$driver->photo) }}" alt="{{ $driver->name }}">
                        <h1 class="mt-5 text-2xl font-bold">{{ $driver->nama_driver }}</h1>
                        <div>{!! $driver->nomor_telepon !!}</div>
                        <div>{!! $driver->alamat !!}</div>
                        <div>{!! $driver->jenis_kendaraan !!}</div>
                        <div>{!! $driver->status !!}</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>