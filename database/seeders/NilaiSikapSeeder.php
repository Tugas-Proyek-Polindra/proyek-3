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
    }
}
