<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Booking Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('bookings.update',$bookings) }}" enctype="multipart/form-data">

                        @csrf
                        @method('put')
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('status') text-red-500 @enderror">status</span>
                                <textarea
                                    class="block @error('status') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="status" rows="3">{{old('status',$bookings->status)}}</textarea>
                            </label>
                            @error('status')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('tanggal_sewa') text-red-500 @enderror">tanggal_sewa</span>
                                <textarea
                                    class="block @error('tanggal_sewa') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="tanggal_sewa" rows="3">{{old('tanggal_sewa',$bookings->tanggal_sewa)}}</textarea>
                            </label>
                            @error('tanggal_sewa')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>