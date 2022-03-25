<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function nilai_pelajaran()
    {
        return $this->hasMany(NilaiPemesanan::class);
    }
    public function nilai_sikap()
    {
        return $this->hasMany(NilaiSikap::class);
    }

    public function rekap_nilai()
    {
        return $this->hasMany(RekapNilai::class);
    }
}
