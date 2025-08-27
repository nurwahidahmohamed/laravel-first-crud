<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homestay;

class HomestayController extends Controller
{
      public function index()
    {
        // query all homestay from the table 'homestays' using model
        $homestays = Homestay::all();

        // return to view with $homestays (resources/views/homestays/index.blade.php)
        return view('homestays.index', compact('homestays'));
    }
    public function create()
    {
        return view('homestays.create');

    }
    public function store(Request $request)
    {
        // store in the table 'homestays' using model

        //POPO - Plain Old PHP Object
        $homestay = new Homestay();
        $homestay->nama_pengusaha = $request->input('nama_pengusaha');
        $homestay->jantina = $request->input('jantina');
        $homestay->no_kp = $request->input('no_kp');
        $homestay->no_tel = $request->input('no_tel');
        $homestay->alamat = $request->input('alamat');
        $homestay->jumlah_bilik = $request->input('jumlah_bilik');
        $homestay->catatan = $request->input('catatan');
        $homestay->insurans = $request->input('insurans');
        $homestay->pakej_produk = $request->input('pakej_produk');
        $homestay->save();

        //returs to homestay index
        return redirect('/homestays');
    }


    public function show(Homestay $homestay)
    {
        return view('homestays.show', compact('homestay'));
    }

    public function edit(Homestay $homestay)
    {
        return view('homestays.edit', compact('homestay'));
    }

    public function update(Request $request, Homestay $homestay)
    {
        //update using model

        $homestay->nama_pengusaha = $request->nama_pengusaha;
        $homestay->jantina = $request->jantina;
        $homestay->no_kp = $request->no_kp;
        $homestay->no_tel = $request->no_tel;
        $homestay->alamat = $request->alamat;
        $homestay->jumlah_bilik = $request->jumlah_bilik;
        $homestay->catatan = $request->catatan;
        $homestay->insurans = $request->insurans;
        $homestay->pakej_produk = $request->pakej_produk;
        $homestay->save();

        //return to homestay index
        return redirect()->route('homestays.index');
    }

    public function destroy(Homestay $homestay)
    {
        $homestay->delete();
        return redirect()->route('homestays.index');
    }

}
