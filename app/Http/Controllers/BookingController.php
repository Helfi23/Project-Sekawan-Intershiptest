<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\CarModel;
use App\Models\driver;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = booking::all();
        return view('bookings.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = CarModel::all();
        $driver = Driver::all();
        return view('bookings.create', compact('cars','driver'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cars_id' => 'required',
            'driver_id' => 'required',
            'status' => 'required',
            'tanggal_sewa' => 'required'
        ]);

        $booking = new booking();
        $booking->cars_id = $request->cars_id;
        $booking->driver_id = $request->driver_id;
        $booking->status = $request->status;
        $booking->tanggal_sewa = $request->tanggal_sewa;

        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'drivers created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bookings = booking::findOrFail($id);
        $car = CarModel::findOrFail($id);
        // $driver = driver::findOrFail($id);
        return view('bookings.show', compact('bookings','car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bookings = booking::findOrFail($id);
        return view('bookings.edit', compact('bookings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bookings = booking::findOrFail($id);
        $request->validate([
            'status' => 'required',
            'tanggal_sewa' => 'required'
        ]);

        $bookings->status = $request->status;
        $bookings->tanggal_sewa = $request->tanggal_sewa;

        $bookings->save();

        return redirect()->route('bookings.index')->with('success', 'drivers created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         booking::findOrFail($id)->delete();
        return redirect()->route('bookings.index')->with('Success', 'Cars Deleted Successfully');
    }
}
