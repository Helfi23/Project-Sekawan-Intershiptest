<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Cars Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-1 mb-4">
                <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                    href="{{ route('cars.index') }}">{{ __('Back') }}</a>
            </div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-2xl font-bold">{{ $cars->Merk }}</h1>
                        <div>{!! $cars->tipe !!}</div>
                        <div>{!! $cars->plat_nomor !!}</div>
                        <div>{!! $cars->tahun_pembuatan !!}</div>
                        <div>{!! $cars->kapasitas_penumpang !!}</div>
                        <div>{!! $cars->status !!}</div>
                        <img class="w-full h-48 object-cover object-center" src="{{  asset('images/'.$cars->photo) }}" alt="{{ $cars->name }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>