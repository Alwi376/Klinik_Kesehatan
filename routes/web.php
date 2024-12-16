<?php

use App\Http\Controllers\adminPasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ReservasiController;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\RekamMedis;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if(Auth::user()->role != 'admin'){
        return redirect()->route('user.dashboard');
    }
    $search = request()->get('search');
    if($search){
        $rekamMedis = RekamMedis::with(['pasien'])->whereHas('pasien', function ($query) use ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })->get();
    }else{
        $rekamMedis = RekamMedis::with(['pasien'])->get();
    }
    $jumlah_pasien = User::where('role', 'user')->get()->count();
    $jumlah_dokter = Dokter::all()->count();
    $stok_obat = Obat::all()->count();
    return view('admin.dashboard', compact('rekamMedis','jumlah_pasien','jumlah_dokter','stok_obat'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user/dashboard', function () {
    if(Auth::user()->role != 'user'){
        return redirect()->route('dashboard');
    }
    $doktors = Dokter::all();
    $pasiens = Pasien::all();
    return view('user.dashboard', compact('doktors', 'pasiens'));
})->middleware(['auth', 'verified'])->name('user.dashboard');

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
// });
// Route::middleware(['auth', 'role:pasien'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });





Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('/dokter', DokterController::class);
    Route::resource('/jadwal', JadwalDokterController::class);
    Route::resource('/obat', ObatController::class);
    Route::resource('/rekam_medis', RekamMedisController::class);
    Route::resource('/reservasi', ReservasiController::class)->only(['index', 'destroy', 'edit', 'update']);
    Route::resource('/admin-pasien', adminPasienController::class);
});



Route::middleware(['auth', 'role:user'])->group(function () {
    Route::resource('/reservasi', ReservasiController::class)->only(['create','store']);
    Route::resource('/pasien', PasienController::class)->only(['create','store']);
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';





