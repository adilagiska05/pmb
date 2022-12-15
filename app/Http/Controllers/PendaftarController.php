<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    
    public function index()
    {
       
        $pendaftar = Pendaftar::all();
        return view('pendaftar.index', compact('pendaftar'));
    }

    public function create()
    {
        //
        $pendaftar = Pendaftar::all();
        return view('pendaftar.create', compact('pendaftar'));
    }

    
    public function store(Request $request)
    {
        //
        //validasi
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'tgl_lahir' => 'required',
            'kampus' => 'required',
            'prodi' => 'required',
            'kelas' => 'required',
            'status' => 'required',
            'rekomendasi' => 'required',
            'id_prodi' => 'required',
        ]);

       $pendaftar = new Pendaftar();
       $pendaftar->nama = $request->nama;
       $pendaftar->email = $request->email;
       $pendaftar->no_hp = $request->no_hp;
       $pendaftar->tgl_lahir = $request->tgl_lahir;
       $pendaftar->kampus = $request->kampus;
       $pendaftar->prodi = $request->prodi;
       $pendaftar->kelas = $request->kelas;
       $pendaftar->status = $request->status;
       $pendaftar->rekomendasi = $request->rekomendasi;
       $pendaftar->id_prodi = $request->id_prodi;
       $pendaftar->save();
        return redirect()->route('pendaftar.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
