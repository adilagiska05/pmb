<?php

namespace App\Http\Controllers;
use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    
    public function index()
    {

       $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    
    public function create()
    {
       $informasi = Informasi::all();
        return view('informasi.create', compact('informasi'));

    }

   
    public function store(Request $request)
    {
         //validasi
         $validated = $request->validate([
            'jadwal_pmb' => 'required',
            'jalur' => 'required',
            'gelombang' => 'required',
            'jenjang' => 'required',
        ]);

       $informasi = new Informasi();
       $informasi->jadwal_pmb = $request->jadwal_pmb;
       $informasi->jalur = $request->jalur;
       $informasi->gelombang = $request->gelombang;
       $informasi->jenjang = $request->jenjang;
       $informasi->save();
        return redirect()->route('informasi.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    
    public function show($id)
    {
       $informasi = Informasi::findOrFail($id);
        return view('informasi.show', compact('informasi'));
    }

    
    public function edit($id)
    {
       $informasi = Informasi::findOrFail($id);
        return view('informasi.edit', compact('informasi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jadwal_pmb' => 'required',
            'jalur' => 'required',
            'gelombang' => 'required',
            'jenjang' => 'required',
        ]);

       $informasi = Informasi::findOrFail($id);
       $informasi->jadwal_pmb = $request->jadwal_pmb;
       $informasi->jalur = $request->jalur;
       $informasi->gelombang = $request->gelombang;
       $informasi->jenjang = $request->jenjang;
       $informasi->save();
        return redirect()->route('informasi.index')
            ->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
       $informasi = Informasi::findOrFail($id);
       $informasi->delete();
        return redirect()->route('informasi.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}