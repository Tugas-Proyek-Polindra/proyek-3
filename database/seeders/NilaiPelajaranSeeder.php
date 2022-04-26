<?php

namespace Database\Seeders;
use App\Models\NilaiPelajaran;

use Illuminate\Database\Seeder;

class NilaiPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NilaiPelajaran::create([
            'santri_id' => 1,
            'al_quran' => '80',
            'al_hadist' => '90',
            'aqidah' => '84',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
        ]);

    }
}
