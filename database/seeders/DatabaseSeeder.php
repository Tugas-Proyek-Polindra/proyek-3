<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models;
use App\Models\User;
use App\Models\Santri;
use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\NilaiPelajaran;
use App\Models\NilaiSikap;
use App\Models\RiwayatKeaktifan;
use App\Models\RekapNilai;
use App\Models\Absensi;


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

        Santri::create([
            'nama_santri' => 'Andini Sri Wahyuni',
            'nisn' => '0139484821',
            'nik' => '3210174509130001',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->format('Y-m-d'),
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

        Pelajaran::create([
            'nama_pelajaran' => "Al-Qur'an Hadist",
            'nilai_kkm' => '75',
        ]);

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

        NilaiSikap::create([
            'santri_id' => 1,
            'mengaji' => 'A',
            'hafalan' => 'B',
            'disiplin' => 'B',
            'bersih' => 'A',
            'sopan' => 'A',
            'keterangan' => 'Murid Teladan',
        ]);

        RiwayatKeaktifan::create([
            'user_id' => '2',
            'status_keaktifan' => 'Aktif',
            'tgl_mulai_bertugas' => Carbon::createFromFormat('Y-m-d', '2021-07-01')->format('Y-m-d'),
            'status_penugasan' => 'Tetap',
            'tugas_utama' => 'Lainnya',
        ]);

        RekapNilai::create([
            'user_id' => 2,
            'santri_id' => 1,
            'pelajaran_id' => 1,
            'nilai_pelajaran_id' => 1,
            'nilai_sikap_id' => 1,
            'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 4,
        ]);

        Absensi::create([
            'santri_id' => 1,
            'sakit' => 4,
            'izin' => 1,
            'alpha' => 2,         
        ]);


    }
}
