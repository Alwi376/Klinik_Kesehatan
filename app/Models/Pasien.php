<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';
    protected $fillable = ['nama','umur','alamat'];

    public function Reservasi()
    {
        return $this->hasMany(Reservasi::class);
    }

    public function RekamMedis()
    {
        return $this->hasMany(RekamMedis::class);
    }

}

