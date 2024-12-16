<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters';
    protected $fillable = ['nama', 'spesialis', 'telepon', 'email', 'gambar'];

    public function JadwalDokter()
    {
        return $this->hasMany(JadwalDokter::class);
    }

    public function Reservasi()
    {
        return $this->hasOne(Reservasi::class);
    }

    public function RekamMedis()
    {
        return $this->hasOne(RekamMedis::class);
    }

}
