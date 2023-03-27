<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Booking Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-1 mb-4">
                <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                    href="{{ route('bookings.index') }}">{{ __('Back') }}</a>
            </div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-2xl font-bold">{{ $car->merk }}</h1>
                        <div>{!! $bookings->driver_id !!}</div>
                        <div>{!! $bookings->status !!}</div>
                        <div>{!! $bookings->tanggal_sewa !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>