<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Jobs\InventoryCreatedJob;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // query all inventories from the table 'inventories' using model
        $inventories = Inventory::latest()->get();
        // $inventories = Inventory::all();

        // return to view with $inventories (resources/views/inventories/index.blade.php)
        return view('inventories.index', compact('inventories'));
    }
    public function create()
    {
        return view('inventories.create');

    }
    public function store(Request $request)
    {
        // store in the table 'inventories' using model

        //POPO - Plain Old PHP Object
        $inventory = new Inventory();
        $inventory->name = $request->input('name');
        $inventory->quantity = $request->input('quantity');
        $inventory->price = $request->input('price');
        $inventory->serial_no = $request->input('serial_no');
        $inventory->user_id = auth()->user()->id; //assign the logged in user id
        $inventory->save();

         //dispatch job to send email to admin
         InventoryCreatedJob::dispatch($inventory);

       //returs to inventory index
       return redirect('/inventories');
    }

    public function show(Inventory $inventory)
    {
        //selepas line ni ada authorize view dalam polisi inventori
        $this->authorize('view', $inventory);
        return view('inventories.show', compact('inventory'));
    }

    public function edit(Inventory $inventory)
    {
        $this->authorize('update', $inventory);
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        //update using model

        $inventory->name = $request->name;
        $inventory->quantity = $request->quantity;
        $inventory->price = $request->price;
        $inventory->serial_no = $request->serial_no;
        $inventory->save();

        //return to inventory index
        return redirect()->route('inventories.index');
    }

    public function destroy(Inventory $inventory)
    {
        $this->authorize('delete', $inventory);
        $inventory->delete();
        return redirect()->route('inventories.index');
    }
}
