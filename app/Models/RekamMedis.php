<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekam_medis';
    protected $fillable = ['user_id', 'dokter_id', 'tanggal_periksa', 'diagnosa', 'tindakan'];

    public function pasien()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
