<?php

namespace Database\Seeders;
use App\Models\NilaiSikap;

use Illuminate\Database\Seeder;

class NilaiSikapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NilaiSikap::create([
            'santri_id' => 1,
            'mengaji' => 'A',
            'hafalan' => 'B',
            'disiplin' => 'B',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 2,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 3,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 4,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 5,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 6,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 7,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 8,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 9,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
        NilaiSikap::create([
            'santri_id' => 10,
            'mengaji' => 'B',
            'hafalan' => 'B',
            'disiplin' => 'A',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);
    }
}
