<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSikap extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function usermenu_nilai_sikap_url()
    {
        return 'nilai/sikap';
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
