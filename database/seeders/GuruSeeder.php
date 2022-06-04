<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dina Nuraeni',
            'email' => 'dina.nuraeni@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '3210176804980001',
            'tempat_lahir' => 'Majalengka',
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '1998-04-28')->format('Y-m-d'),
            'jenis_kelamin' => 'P',
            'no_hp' => '082213395696',
            'nama_ibu' => "Suni'ah",
            'status_pegawai' => 'Non-PNS',
            'pendidikan_terakhir' => 'SMA',
            'level' => false
            // 'role' => 'guru'
        ]);
        User::create([
            'name' => 'ERDI TAUFIQ ISKANDAR, S.Pd.I., M.Pd',
            'email' => 'erditaufiq@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '3210171011910001',
            'tempat_lahir' => 'Majalengka',
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '1991-11-10')->format('Y-m-d'),
            'jenis_kelamin' => 'L',
            'no_hp' => '082116871665',
            'nama_ibu' => "SANAH SUWANAH",
            'status_pegawai' => 'Non-PNS',
            'pendidikan_terakhir' => 'SMA',
            'level' => false
            // 'role' => 'guru'
        ]);
        User::create([
            'name' => 'UNUNG HUSNUL KHOTIMAH, S.Pd',
            'email' => 'ununghusnul@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '3215236809950001',
            'tempat_lahir' => 'KARAWANG',
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '1991-09-28')->format('Y-m-d'),
            'jenis_kelamin' => 'P',
            'no_hp' => '081312567441',
            'nama_ibu' => "Hj. SAODAH",
            'status_pegawai' => 'Non-PNS',
            'pendidikan_terakhir' => 'SMA',
            'level' => false
            // 'role' => 'guru'
        ]);
        User::create([
            'name' => 'MITA PAUJIAH',
            'email' => 'mitafaujiah@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '3210175008020041',
            'tempat_lahir' => 'Majalengka',
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2002-08-10')->format('Y-m-d'),
            'jenis_kelamin' => 'P',
            'no_hp' => '097745615809',
            'nama_ibu' => "ERI SUNAERI",
            'status_pegawai' => 'Non-PNS',
            'pendidikan_terakhir' => 'SMA',
            'level' => false
            // 'role' => 'guru'
        ]);
        User::create([
            'name' => 'UCU CAHYATI, S.T',
            'email' => 'ucu_cahyati@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '3210174204960001',
            'tempat_lahir' => 'Majalengka',
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2002-04-02')->format('Y-m-d'),
            'jenis_kelamin' => 'P',
            'no_hp' => '085282944424',
            'nama_ibu' => "SATINI",
            'status_pegawai' => 'Non-PNS',
            'pendidikan_terakhir' => 'SMA',
            'level' => false
            // 'role' => 'guru'
        ]);

    }
}
