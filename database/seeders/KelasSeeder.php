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
            'kelas' => 'Kls I',
            'wali_kelas' => 'Dina Nuraeni',
            'tahun_ajaran' => '2021/2022'
        ]);

        Kelas::create([
            'kelas' => 'Kls 2',
            'wali_kelas' => 'Dina Nuraeni',
            'tahun_ajaran' => '2021/2022'
        ]);

        Kelas::create([
            'kelas' => 'Kls 3',
            'wali_kelas' => 'Dina Nuraeni',
            'tahun_ajaran' => '2021/2022'
        ]);

        Kelas::create([
            'kelas' => 'Kls 4',
            'wali_kelas' => 'Dina Nuraeni',
            'tahun_ajaran' => '2021/2022'
        ]);
    }
}
