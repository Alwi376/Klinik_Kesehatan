<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;


class DokterController extends Controller
{
    public function index()
    {
        $search = request()->input('search');
        if ($search) {
            $dokters = Dokter::where('nama', 'like', '%' . $search . '%')->get();
        } else {
            $dokters = Dokter::all();
        }
        return view('admin.dokter.index', compact('dokters', 'search'));
    }

    public function store(Request $request)
    {
        $dokter = Dokter::firstWhere("telepon", $request->telepon);
        if ($dokter) {
            return redirect()->back()->with('error', 'Nomor telepon yang anda masukkan sudah digunakan, coba masukkan nomor telepon lain!') ->withInput();;
        }
        $dokter = Dokter::firstWhere("email", $request->email);
        if ($dokter) {
            return redirect()->back()->with('error', 'Email yang anda masukkan sudah digunakan, coba masukkan email lain!') ->withInput();;
        }
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            // Cek tipe file secara manual
            $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            $mimeType = $file->getMimeType();

            if (!in_array($mimeType, $allowedMimeTypes)) {
                // Jika file bukan gambar, kembalikan dengan pesan error
                return redirect()->back()->with('error', 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif') ->withInput();;
            }

            // Jika file valid, simpan gambar
            $gambarPath = $file->store('images', 'public'); // Menyimpan gambar di folder 'public/images'
        }

        $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'telepon' => 'required|unique:dokters,telepon',
            'email' => 'required|unique:dokters,email',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('images', 'public'); // Menyimpan gambar di folder 'public/images'
        }

        Dokter::create([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'gambar' => $gambarPath,
        ]);
        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $dokter = Dokter::firstWhere("telepon", $request->telepon);
        $dokter_sudah_ada = Dokter::where("telepon", $request->telepon)->where("id", '!=', $id)->first();
        if ($dokter_sudah_ada) {
            return redirect()->route('dokter.index')->with('error', 'Nomor telepon yang anda ubah sudah digunakan');
        }
        $dokter = Dokter::firstWhere("email", $request->email);
        $dokter_sudah_ada = Dokter::where("email", $request->email)->where("id", '!=', $id)->first();
        if ($dokter_sudah_ada) {
            return redirect()->route('dokter.index')->with('error', 'Email yang anda ubah sudah digunakan');
        }
        $dokter = Dokter::findOrFail($id);

        $input = $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'telepon' => 'required|unique:dokters,telepon,' . $id,
            'email' => 'required|unique:dokters,email,' . $id,
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);
        if ($request->hasFile('gambar')) {
            $input['gambar'] = $request->file('gambar')->store('images', 'public');
        } else {
            $input['gambar'] = $dokter->gambar;
        }
        $dokter->update($input);

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil diupdate.');
    }
    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        if ($dokter->rekamMedis()->exists()) {
            return redirect()->route('dokter.index')->with('error', 'Dokter tidak dapat dihapus karena sudah digunakan dalam data lain!');
        }
        if ($dokter->reservasi()->exists()) {
            return redirect()->route('dokter.index')->with('error', 'Dokter tidak dapat dihapus karena sudah digunakan dalam data lain!');
        }
        if ($dokter->jadwalDokter()->exists()) {
            return redirect()->route('dokter.index')->with('error', 'Dokter tidak dapat dihapus karena sudah digunakan dalam data lain!');
        }
        $dokter->delete();

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil dihapus.');
    }
}
