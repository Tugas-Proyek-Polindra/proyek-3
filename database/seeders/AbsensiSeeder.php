<?php

namespace Database\Seeders;
use App\Models\Absensi;

use Illuminate\Database\Seeder;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Absensi::create([
            'santri_id' => 1,
            'sakit' => 4,
            'izin' => 1,
            'alpha' => 2,
        ]);
    }
}
