<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    // Menampilkan semua obat
        public function index(){
        $search = request()->input('search');
        if ($search) {
            $obats = Obat::where('nama_obat', 'like', '%' . $search . '%')->get();
        } else {
            $obats = Obat::all();
        }

        return view('admin.obat.index', compact('obats'));
    }

    // Menampilkan form tambah obat
    public function create()
    {
        return view('obat.create');
    }

    // Menyimpan obat baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
        ]);
        $obat = Obat::firstWhere("nama_obat",$request->nama_obat);
        if($obat){
        return redirect()->back()->with('error','Data yang anda tambahkan sudah digunakan') ->withInput();;
        }

        Obat::create($request->all());

        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    // Menampilkan form edit obat
    public function edit($id)
    {

        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));
    }

    // Mengupdate data obat
    public function update(Request $request, $id)
    {
        $obat = Obat::firstWhere("nama_obat",$request->nama_obat);
        $obat_sudah_ada = Obat::where("nama_obat", $request->nama_obat)->where("id",'!=',$id)->first();
        if($obat_sudah_ada){
        return redirect()->route('obat.index')->with('error','Data yang anda ubah sudah digunakan');
        }
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
        ]);
        $obat->update($request->all());

        return redirect()->route('obat.index')->with('success', 'Obat berhasil diupdate.');
    }

    // Menghapus obat
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}
