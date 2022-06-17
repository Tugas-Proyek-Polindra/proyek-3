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
            'jumlah' => '786',
            'rata_rata' => '87.6',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 2,
            'al_quran' => '80',
            'al_hadist' => '90',
            'aqidah' => '80',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '756',
            'rata_rata' => '78.9',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 3,
            'al_quran' => '80',
            'al_hadist' => '98',
            'aqidah' => '84',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '986',
            'rata_rata' => '98.7',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 4,
            'al_quran' => '80',
            'al_hadist' => '99',
            'aqidah' => '84',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '756',
            'rata_rata' => '78.9',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 5,
            'al_quran' => '80',
            'al_hadist' => '90',
            'aqidah' => '84',
            'akhlaq' => '80',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '756',
            'rata_rata' => '78.9',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 6,
            'al_quran' => '80',
            'al_hadist' => '90',
            'aqidah' => '80',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '897',
            'rata_rata' => '91.8',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 7,
            'al_quran' => '80',
            'al_hadist' => '90',
            'aqidah' => '80',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '756',
            'rata_rata' => '78.9',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 8,
            'al_quran' => '80',
            'al_hadist' => '90',
            'aqidah' => '80',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '756',
            'rata_rata' => '78.9',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 9,
            'al_quran' => '80',
            'al_hadist' => '90',
            'aqidah' => '80',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '875',
            'rata_rata' => '781.8',
        ]);
        NilaiPelajaran::create([
            'santri_id' => 10,
            'al_quran' => '80',
            'al_hadist' => '90',
            'aqidah' => '80',
            'akhlaq' => '87',
            'fiqih' => '83',
            'tarikh' => '93',
            'b_arab' => '90',
            'praktikum' => '89',
            'jumlah' => '790',
            'rata_rata' => '79.9',
        ]);


    }
}
