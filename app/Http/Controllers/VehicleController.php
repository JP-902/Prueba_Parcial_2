<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'plate_number' => 'required|string|max:15|unique:vehicles',
            'brand' => 'required|string|max:50',
            'model' => 'required|string|max:80',
            'vehicle_type' => 'required|string|max:50',
            'color' => 'required|string|max:30',
            'capacity' => 'required|integer',
            'daily_rate' => 'required|numeric|min:0',
            'status' => 'required|string|max:30',
        ]);

        Vehicle::create($validated);
        return redirect()->route('vehicles.index')->with('success', 'Vehicle creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        Vehicle::find($vehicle->id)->update([
            'plate_number' => $request->plate_number,
            'brand' => $request->brand,
            'model' => $request->model,
            'vehicle_type' => $request->vehicle_type,
            'color' => $request->color,
            'capacity' => $request->capacity,
            'daily_rate' => $request->daily_rate,
            'status' => $request->status,
        ]);

        $vehicle->save();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle atualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle eliminado exitosamente.');
    }
}
