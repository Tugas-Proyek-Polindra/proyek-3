<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function usermenu_absensi_url()
    {
        return 'absensi';
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function rekap_nilai()
    {
        return $this->hasMany(RekapNilai::class);
    }

}
