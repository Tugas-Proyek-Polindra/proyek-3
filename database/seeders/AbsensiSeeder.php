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
        Absensi::create([
            'santri_id' => 2,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
        Absensi::create([
            'santri_id' => 3,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
        Absensi::create([
            'santri_id' => 4,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
        Absensi::create([
            'santri_id' => 5,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
        Absensi::create([
            'santri_id' => 6,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
        Absensi::create([
            'santri_id' => 7,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
        Absensi::create([
            'santri_id' => 8,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
        Absensi::create([
            'santri_id' => 9,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
        Absensi::create([
            'santri_id' => 10,
            'sakit' => 2,
            'izin' => 1,
            'alpha' => 1,
        ]);
    }
}
