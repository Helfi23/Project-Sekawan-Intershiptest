<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($cars);
        $cars = CarModel::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'plat_nomor' => 'required',
            'tahun_pembuatan' => 'required',
            'kapasitas_penumpang' => 'required',
            'status' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $cars = new CarModel();
        $cars->merk = $request->merk;
        $cars->tipe = $request->tipe;
        $cars->plat_nomor = $request->plat_nomor;
        $cars->tahun_pembuatan = $request->tahun_pembuatan;
        $cars->kapasitas_penumpang = $request->kapasitas_penumpang;
        $cars->status = $request->status;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $carsPath = public_path('/images');
            $image->move($carsPath, $name);
            $cars->photo = $name;
        }

        $cars->save();

        return redirect()->route('cars.index')->with('success', 'cars created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($car_id)
    {
        $cars = CarModel::findOrFail($car_id);
        return view('cars.show', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($car_id)
    {
        $car = CarModel::findOrFail($car_id);
        return view('cars.edit', compact('car'));
        
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $car_id)
    {
        $car = CarModel::findOrFail($car_id);
        // dd($car);
        $request->validate([
            // 'car_id' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'plat_nomor' => 'required',
            'tahun_pembuatan' => 'required',
            'kapasitas_penumpang' => 'required',
            'status' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // $car->car_id = $request->car_id;
        $car->merk = $request->merk;
        $car->tipe = $request->tipe;
        $car->plat_nomor = $request->plat_nomor;
        $car->tahun_pembuatan = $request->tahun_pembuatan;
        $car->kapasitas_penumpang = $request->kapasitas_penumpang;
        $car->status = $request->status;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $carsPath = public_path('/images');
            $image->move($carsPath, $name);
            $car->photo = $name;
        }

        $car->save();
        return redirect()->route('cars.index')->with('success', ' updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($car_id)
    {
        CarModel::findOrFail($car_id)->delete();
        return redirect()->route('cars.index')->with('Success', 'Cars Deleted Successfully');
    }
}
