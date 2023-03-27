<?php

namespace App\Http\Controllers;

use App\Models\driver;
use Illuminate\Http\Request;

class Drivercontroller extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($cars);
        $driver = driver::all();
        return view('drivers.index', compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       $request->validate([
            'nama_driver' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'jenis_kendaraan' => 'required',
            'status' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $drivers = new driver();
        $drivers->nama_driver = $request->nama_driver;
        $drivers->nomor_telepon = $request->nomor_telepon;
        $drivers->alamat = $request->alamat;
        $drivers->jenis_kendaraan = $request->jenis_kendaraan;
        $drivers->status = $request->status;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $driversPath = public_path('/images');
            $image->move($driversPath, $name);
            $drivers->photo = $name;
        }

        $drivers->save();

        return redirect()->route('drivers.index')->with('success', 'drivers created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($driver_id)
    {
        $driver = driver::findOrFail($driver_id);
        return view('drivers.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($driver_id)
    {
        $driver = driver::findOrFail($driver_id);
        return view('drivers.edit', compact('driver'));
        
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $driver_id)
    {
        $driver = driver::findOrFail($driver_id);
        // dd($car);
       $request->validate([
            'nama_driver' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'jenis_kendaraan' => 'required',
            'status' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

       $drivers = driver::findOrFail($driver_id);
        $drivers->nama_driver = $request->nama_driver;
        $drivers->nomor_telepon = $request->nomor_telepon;
        $drivers->alamat = $request->alamat;
        $drivers->jenis_kendaraan = $request->jenis_kendaraan;
        $drivers->status = $request->status;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $driversPath = public_path('/images');
            $image->move($driversPath, $name);
            $drivers->photo = $name;
        }


        $drivers->save();
        return redirect()->route('drivers.index')->with('success', ' updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($driver_id)
    {
        driver::findOrFail($driver_id)->delete();
        return redirect()->route('drivers.index')->with('Success', 'Cars Deleted Successfully');
    }
}
