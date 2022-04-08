<?php

namespace Database\Seeders;
use App\Models\Pelajaran;

use Illuminate\Database\Seeder;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelajaran::create([
            'nama_pelajaran' => "Al-Qur'an",
            'nilai_kkm' => '75',
        ]);
        Pelajaran::create([
            'nama_pelajaran' => "Al-Hadist",
            'nilai_kkm' => '75',
        ]);
        Pelajaran::create([
            'nama_pelajaran' => "Akidah",
            'nilai_kkm' => '75',
        ]);
        Pelajaran::create([
            'nama_pelajaran' => "Akhlaq",
            'nilai_kkm' => '75',
        ]);
        Pelajaran::create([
            'nama_pelajaran' => "Fiqih",
            'nilai_kkm' => '75',
        ]);
        Pelajaran::create([
            'nama_pelajaran' => "Tarikh",
            'nilai_kkm' => '75',
        ]);
        Pelajaran::create([
            'nama_pelajaran' => "B. Arab",
            'nilai_kkm' => '75',
        ]);
        Pelajaran::create([
            'nama_pelajaran' => "Praktikum",
            'nilai_kkm' => '75',
        ]);
    }
}
