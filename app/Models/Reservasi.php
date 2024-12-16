<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasis';
    protected $fillable = ['user_id', 'dokter_id', 'jadwal_dokter_id', 'keluhan', 'tanggal_reservasi', 'status'];

    public function pasien()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function jadwalDokter()
    {
        return $this->belongsTo(JadwalDokter::class);
    }
}
