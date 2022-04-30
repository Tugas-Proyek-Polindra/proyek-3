<?php

namespace Database\Seeders;
use App\Models\RekapNilai;

use Illuminate\Database\Seeder;

class RekapNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 1,
            'nilai_pelajaran_id' => 1,
            'nilai_sikap_id' => 1,
            'absensi_id' => 1,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 4,
        ]);
    }
}
