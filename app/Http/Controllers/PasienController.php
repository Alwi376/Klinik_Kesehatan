<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Menampilkan semua pasien
    public function index()
    {
        $search = request()->input('search');
        if ($search) {
            $pasiens = User::where('role', 'user')->where('name', 'like', '%' . $search . '%')->get();
        } else {
            $pasiens = User::where('role', 'user')->get();
        }
        return view('user.pasien.index', compact('pasiens'));
    }

    // Menampilkan form tambah pasien
    public function create()
    {
        return view('user.pasien.create');
    }

    // Menyimpan data pasien baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:1',
            'alamat' => 'required|string|max:500',

        ]);

        User::create($request->all());

        return redirect()->back()->with('success', 'Pasien berhasil ditambahkan.');
    }

    // Menampilkan form edit pasien
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    // Mengupdate data pasien
    public function update(Request $request, $id)
    {
        $request->validate([
            'umur' => 'required|integer|min:1',
            'email' => 'nullable|email|max:255|unique:pasien,email,' . $id,
            'alamat' => 'required|string|max:1000',
        ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diupdate.');
    }

    // Menghapus data pasien
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus.');
    }
}
