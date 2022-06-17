<?php

namespace Database\Seeders;
use App\Models\Santri;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 1,
            'nilai_sikap_id' => 1,
            'absensi_id' => 1,
        ]);
        Santri::create([
            'nama_santri' => 'Angel Melisza Zivania',
            'nisn' => '0139251939',
            'nik' => '3210176905130002',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-05-29')->format('Y-m-d'),
            'jenis_kelamin' => 'P',
            'no_hp' => '083842897922',
            'nama_ibu' => 'Kasitri',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 2,
            'nilai_sikap_id' => 2,
            'absensi_id' => 2,
        ]);
        Santri::create([
            'nama_santri' => 'Bayu Nur Ilham',
            'nisn' => '3138408170',
            'nik' => '3210172206130002',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-06-22')->format('Y-m-d'),
            'jenis_kelamin' => 'L',
            'no_hp' => '082127143317',
            'nama_ibu' => 'Linah Mardiana',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 3,
            'nilai_sikap_id' => 3,
            'absensi_id' => 3,
        ]);
        Santri::create([
            'nama_santri' => 'Laras Ayu Juliyanti',
            'nisn' => '3139799275',
            'nik' => '3210174407130001',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-07-04')->format('Y-m-d'),
            'jenis_kelamin' => 'P',
            'no_hp' => '083120475029',
            'nama_ibu' => 'Mutiawati',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 4,
            'nilai_sikap_id' => 4,
            'absensi_id' => 4,
        ]);
        Santri::create([
            'nama_santri' => 'Muhammad Ridho Firdaus',
            'nisn' => '0139672712',
            'nik' => '3210171111130001',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-11-11')->format('Y-m-d'),
            'jenis_kelamin' => 'L',
            'no_hp' => '081318061411',
            'nama_ibu' => 'Oma Isah',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 5,
            'nilai_sikap_id' => 5,
            'absensi_id' => 5,
        ]);
        Santri::create([
            'nama_santri' => 'Oktavia Adzansa',
            'nisn' => '0138612244',
            'nik' => '3210172210130005',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-10-22')->format('Y-m-d'),
            'jenis_kelamin' => 'L',
            'no_hp' => '082315014615',
            'nama_ibu' => 'Yunitasari',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 6,
            'nilai_sikap_id' => 6,
            'absensi_id' => 6,
        ]);
        Santri::create([
            'nama_santri' => 'Ramdan Al Fazri',
            'nisn' => '0132186178',
            'nik' => '3210172907130002',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-07-29')->format('Y-m-d'),
            'jenis_kelamin' => 'L',
            'no_hp' => '082119869118',
            'nama_ibu' => 'Widiawati',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 7,
            'nilai_sikap_id' => 7,
            'absensi_id' => 7,
        ]);
        Santri::create([
            'nama_santri' => 'Reno Saputra Pratama',
            'nisn' => '3136110551',
            'nik' => '3210172502130001',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-02-25')->format('Y-m-d'),
            'jenis_kelamin' => 'L',
            'no_hp' => '083824354260',
            'nama_ibu' => 'Mintarsih',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 8,
            'nilai_sikap_id' => 8,
            'absensi_id' => 8,
        ]);
        Santri::create([
            'nama_santri' => 'Adzana Karisma',
            'nisn' => '3136110552',
            'nik' => '3210176711120000',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-11-27')->format('Y-m-d'),
            'jenis_kelamin' => 'P',
            'no_hp' => '083143085426',
            'nama_ibu' => 'Unasih',
            'sekolah_asal' => 'SDN Bongas Wetan II',
            'alamat_sekolah' => 'Kampung Munjul',
            'nilai_pelajaran_id' => 9,
            'nilai_sikap_id' => 9,
            'absensi_id' => 9,
        ]);
        Santri::create([
            'nama_santri' => 'Arrohman',
            'nisn' => '0124746482',
            'nik' => '3210170709120000',
            'tempat_lahir' => 'Majalengka',
            // 'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-05')->toDateTimeImmutable()->format('d-m-Y'),
            'tgl_lahir' => Carbon::createFromFormat('Y-m-d', '2013-09-07')->format('Y-m-d'),
            'jenis_kelamin' => 'L',
            'no_hp' => '087745615809',
            'nama_ibu' => 'Eri Sunaeri',
            'sekolah_asal' => 'SDN Cidenok II',
            'alamat_sekolah' => 'Jalan Desa',
            'nilai_pelajaran_id' => 10,
            'nilai_sikap_id' => 10,
            'absensi_id' => 10,
        ]);
    }
}
