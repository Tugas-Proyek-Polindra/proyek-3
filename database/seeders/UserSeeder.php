<?php

namespace Database\Seeders;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Staff',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Dina Nuraeni',
            'email' => 'dina.nuraeni@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '3210176804980001',
            'tempat_lahir' => 'Majalengka',
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '1998-04-28')->format('Y-m-d'),
            'jenis_kelamin' => 'Perempuan',
            'no_hp' => '082213395696',
            'nama_ibu' => "Suni'ah",
            'status_pegawai' => 'Non-PNS',
            'pendidikan_terakhir' => 'SMA',
            'role' => 'guru'
        ]);
    }
}
