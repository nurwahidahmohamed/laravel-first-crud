<?php

namespace App\Http\Controllers;

use index;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        // query all inventories from the table 'inventories' using model
        $vehicles = Vehicle::all();

        // return to view with $inventories (resources/views/inventories/index.blade.php)
        return view('vehicles.index', compact('vehicles'));
    }
}
