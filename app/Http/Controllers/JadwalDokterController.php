<?php

namespace App\Http\Controllers;

use App\Models\JadwalDokter;
use App\Models\Dokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    // Menampilkan semua jadwal dokter
    public function index()
    {
        $search = request()->input('search');
        if ($search) {
            $jadwal_dokters = JadwalDokter::with('dokter')->whereHas('dokter', function ($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%');
            })->get();
        } else {
            $jadwal_dokters = JadwalDokter::with('dokter')->get();
        }
        $doktors = Dokter::get(); // Ambil data dengan relasi dokter


        return view('admin.jadwal.index', compact('jadwal_dokters', 'doktors'));
    }

    // Menampilkan form tambah jadwal dokter
    public function create()
    {
        $dokter = Dokter::all(); // Ambil semua data dokter
        return view('jadwal.create', compact('dokter'));
    }

    // Menyimpan jadwal dokter baru
    public function store(Request $request)
    {

$cek_waktu = \Carbon\Carbon::parse($request->jam_mulai) > \Carbon\Carbon::parse($request->jam_selesai);
        if ($cek_waktu){
            return redirect()->back()->with('error', '\Waktu mulai harus lebih awal dari waktu selesai!');
        }



        $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'hari' => 'required|string|max:50',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        JadwalDokter::create($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Jadwal dokter berhasil ditambahkan.');
    }

    // Menampilkan form edit jadwal dokter
    public function edit($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        $dokter = Dokter::all(); // Ambil semua data dokter
        return view('jadwal.edit', compact('jadwal', 'dokter'));
    }

    // Mengupdate jadwal dokter
    public function update(Request $request, $id)
    {
        $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'hari' => 'required|string|max:50',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required|after:jam_mulai',
        ]);

        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Jadwal dokter berhasil diupdate.');
    }

    // Menghapus jadwal dokter
    public function destroy($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Jadwal dokter berhasil dihapus.');
    }
}
