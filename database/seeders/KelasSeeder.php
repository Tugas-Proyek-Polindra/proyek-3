<?php

namespace Database\Seeders;
use App\Models\Kelas;

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'kelas' => 'Kelas I',
            'wali_kelas' => 'Dina Nuraeni',
            'tahun_ajaran' => '2021/2022'
        ]);

        Kelas::create([
            'kelas' => 'Kelas II',
            'wali_kelas' => 'Ucu Cahyati, S.T',
            'tahun_ajaran' => '2021/2022'
        ]);

        Kelas::create([
            'kelas' => 'Kelas III',
            'wali_kelas' => 'Mita Paujiah',
            'tahun_ajaran' => '2021/2022'
        ]);

        Kelas::create([
            'kelas' => 'Kelas IV',
            'wali_kelas' => 'Unung Husnul Khotimah, S.Pd',
            'tahun_ajaran' => '2021/2022'
        ]);
    }
}
