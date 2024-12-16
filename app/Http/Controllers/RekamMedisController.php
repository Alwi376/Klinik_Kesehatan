<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    // Menampilkan semua rekam medis
    public function index()
    {
        $search = request()->input('search');
        if ($search) {
            $rekamMedis = RekamMedis::with(['pasien'])->whereHas('pasien', function ($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%');
            })->get();
        } else {
            $rekamMedis = RekamMedis::with(['pasien'])->get();
        }
        $pasiens = User::where('role', 'user')->get();
        $doktors = Dokter::get();

        return view('admin.rekammedis.index', compact('rekamMedis','pasiens','doktors'));
    }

    public function create()
    {
        $pasien = Pasien::all(); // Daftar pasien
        $dokter = Dokter::all(); // Daftar dokter
        return view('rekam_medis.create', compact('pasien', 'dokter'));
    }

    // Menyimpan rekam medis baru
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'dokter_id' => 'required|exists:dokters,id',
            'tanggal_periksa' => 'required|date',
            'diagnosa' => 'required|string|max:255',
            'tindakan' => 'nullable|string|max:255',
        ]);

        RekamMedis::create($request->all());

        return redirect()->route('rekam_medis.index')->with('success', 'Rekam Medis berhasil ditambahkan.');
    }

    // Menampilkan form edit rekam medis
    public function edit($id)
    {
        $rekamMedis = RekamMedis::findOrFail($id);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        return view('rekam_medis.edit', compact('rekamMedis', 'pasien', 'dokter'));
    }

    // Mengupdate rekam medis
    public function update(Request $request, $id)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
            'tanggal_periksa' => 'required|date',
            'diagnosa' => 'required|string|max:255',
            'tindakan' => 'nullable|string|max:255',
        ]);

        $rekamMedis = RekamMedis::findOrFail($id);
        $rekamMedis->update($request->all());

        return redirect()->route('rekam_medis.index')->with('success', 'Rekam Medis berhasil diupdate.');
    }

    // Menghapus rekam medis
    public function destroy($id)
    {
        $rekamMedis = RekamMedis::findOrFail($id);
        $rekamMedis->delete();

        return redirect()->route('rekam_medis.index')->with('success', 'Rekam Medis berhasil dihapus.');
    }
}
