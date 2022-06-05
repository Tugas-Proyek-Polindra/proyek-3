<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapNilai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function usermenu_rekap_nilai_url()
    {
        return 'nilai';
    }

    public function usermenu_cetak_rekap_nilai_url()
    {
        return 'nilai-cetak';
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function guru()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function nilai_pelajaran()
    {
        return $this->belongsTo(NilaiPelajaran::class);
    }

    public function nilai_sikap()
    {
        return $this->belongsTo(NilaiSikap::class);
    }

    public function absensi()
    {
        return $this->belongsTo(Absensi::class);
    }
}
