<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models;
use App\Models\User;
use App\Models\Santri;
use App\Models\Kelas;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        Santri::create([
            'nama_santri' => 'Andini Sri Wahyuni',
            'nisn' => '0139484821',
            'nik' => '3210174509130001',
            'tempat_lahir' => 'Majalengka',
            'tgl_lahir' => '05 September 2013',
            'jenis_kelamin' => 'P',
            'no_hp' => '083162945201',
            'nama_ibu' => 'Marpuah',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul'
        ]);

        Kelas::create([
            'kelas' => 'Kls I',
            'wali_kelas' => 'Dina Nuraeni',
            'tahun_ajaran' => '2021/2022'
        ]);
    }
}
