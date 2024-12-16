<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\JadwalDokter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservasiController extends Controller
{
    // Menampilkan semua reservasi
    public function index()
    {
        $search = request()->input('search');
        $status = request()->input('status'); // Menangani filter status

        $query = Reservasi::with(['pasien']);

       
        if ($search) {
           $query->whereHas('pasien', function ($query) use ($search) {
              return  $query->where('name', 'like', '%' . $search . '%');
            });
        }

        // Jika ada filter berdasarkan status
        if ($status && $status != 'all') {
            $query->where('status', $status);
        }

        // Ambil data sesuai query yang sudah difilter
        $reservasis = $query->get();

        $pasiens = User::get();
        $doktors = Dokter::with('jadwalDokter')->get();
        $jadwals = JadwalDokter::get();

        return view('user.reservasi.index', compact('reservasis', 'pasiens', 'doktors', 'jadwals'));
    }


    // Menampilkan form tambah reservasi
    public function create()
    {
        // $pasiens = Pasien::all();
        $doktors = Dokter::all();
        $jadwals = JadwalDokter::all();
        return view('user.reservasi.create', compact('doktors', 'jadwals'));
    }

    // Menyimpan reservasi baru
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'dokter_id' => 'required|exists:dokters,id',
            'jadwal_dokter_id' => 'required|exists:jadwal_dokters,id',
            'keluhan' => 'required|string|max:255',
            'tanggal_reservasi' => 'required|date',

        ]);

        Reservasi::create([
            'user_id' => Auth::id(),
            'dokter_id' => $request->dokter_id,
            'jadwal_dokter_id' => $request->jadwal_dokter_id,
            'keluhan' => $request->keluhan,
            'tanggal_reservasi' => $request->tanggal_reservasi,
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Reservasi berhasil ditambahkan.');
    }

    // Menampilkan form edit reservasi
    public function edit($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $dokter = Dokter::all();
        $jadwal = JadwalDokter::all();
        return view('reservasi.edit', compact('reservasi', 'dokter', 'jadwal'));
    }

    // Mengupdate reservasi
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'dokter_id' => 'required|exists:dokters,id',
        //     'jadwal_dokter_id' => 'required|exists:jadwal_dokters,id',
        //     'keluhan' => 'required|string|max:255',
        //     'tanggal_reservasi' => 'required|date',
        // ]);

        // $reservasi = Reservasi::findOrFail($id);
        // $reservasi->update($request->all());
        $input =  $request->validate([
            'status' => 'required|in:menunggu,ditolak,diterima',
        ]);
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($input);

        return redirect()->route('reservasi.index')->with('success', 'Status berhasil diupdate.');
    }

    // Menghapus reservasi
    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus.');
    }
}
