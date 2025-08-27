<?php

namespace App\Http\Controllers;

use index;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        // query all vehicles from the table 'vehicles' using model
        $vehicles = Vehicle::all();

        // return to view with $vehicles (resources/views/vehicles/index.blade.php)
        return view('vehicles.index', compact('vehicles'));
    }
    public function create()
    {
        return view('vehicles.create');

    }
    public function store(Request $request)
    {
        // store in the table 'vehicles' using model

        //POPO - Plain Old PHP Object
        $vehicle = new Vehicle();
        $vehicle->make = $request->input('make');
        $vehicle->model = $request->input('model');
        $vehicle->year = $request->input('year');
        $vehicle->chassis_no = $request->input('chassis_no');
        $vehicle->save();

       //returs to vehicle index
       return redirect('/vehicles');
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        //update using model

        $vehicle->make = $request->make;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->chassis_no = $request->chassis_no;
        $vehicle->save();

        //return to vehicle index
        return redirect()->route('vehicles.index');
    }
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index');
    }
}


