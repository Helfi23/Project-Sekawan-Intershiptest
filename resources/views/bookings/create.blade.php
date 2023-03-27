
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Booking Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form method="POST" action="{{ route('bookings.store') }}" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700">Cars</span>
                                 {{-- @dd($cars); --}}
                                <select name="cars_id" id="cars_id">
                                   
                                    @foreach ($cars as $car)
                                    <option value="{{ $car->car_id }}">{{ $car->merk }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
    
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700 ">Driver</span>
                                <select name="driver_id" id="driver_id">
                                    @foreach ($driver as $drivers)
                                    <option value="{{ $drivers->driver_id }}">{{ $drivers->nama_driver }}</option>
                                    @endforeach 
                                    {{-- <span class="text-gray-700">driver</span>
                                <textarea
                                    class="block w-full mt-1 rounded-md"
                                    name="driver_id" rows="3">{{old('driver_id')}}</textarea> --}}
                                    {{-- <option value="">Driver</option> --}}
                                </select>   
                            </label>
                        </div>
    
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700">status</span>
                                <textarea
                                    class="block w-full mt-1 rounded-md"
                                    name="status" rows="3">{{old('status')}}</textarea>
                            </label>
                        </div>
                         <div class="form-group">
                            <label class="block mt-5">
                                {{-- <span class="text-gray-700">tanggal_sewa</span>
                                <input type="date" name="tanggal_sewa" id="tanggal_sewa" placeholder="yyyy-mm-dd"> --}}
                                <span class="text-gray-700">tanggal</span>
                                <input type="date" name="tanggal_sewa" id="tanggal">
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