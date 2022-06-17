<?php

namespace Database\Seeders;
use App\Models\RekapNilai;

use Illuminate\Database\Seeder;

class RekapNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 1,
            'nilai_pelajaran_id' => 1,
            'nilai_sikap_id' => 1,
            'absensi_id' => 1,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 1,
        ]);
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 2,
            'nilai_pelajaran_id' => 2,
            'nilai_sikap_id' => 2,
            'absensi_id' => 2,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 3,
        ]);
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 3,
            'nilai_pelajaran_id' => 3,
            'nilai_sikap_id' => 3,
            'absensi_id' => 3,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 5,
        ]);
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 4,
            'nilai_pelajaran_id' => 4,
            'nilai_sikap_id' => 4,
            'absensi_id' => 4,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 4,
        ]);RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 5,
            'nilai_pelajaran_id' => 5,
            'nilai_sikap_id' => 5,
            'absensi_id' => 5,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 7,
        ]);
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 6,
            'nilai_pelajaran_id' => 6,
            'nilai_sikap_id' => 6,
            'absensi_id' => 6,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 6,
        ]);
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 7,
            'nilai_pelajaran_id' => 7,
            'nilai_sikap_id' => 7,
            'absensi_id' => 7,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 10,
        ]);
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 8,
            'nilai_pelajaran_id' => 8,
            'nilai_sikap_id' => 8,
            'absensi_id' => 8,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 9,
        ]);
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 9,
            'nilai_pelajaran_id' => 9,
            'nilai_sikap_id' => 9,
            'absensi_id' => 9,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 8,
        ]);
        RekapNilai::create([
            // 'user_id' => 2,
            'santri_id' => 10,
            'nilai_pelajaran_id' => 10,
            'nilai_sikap_id' => 10,
            'absensi_id' => 10,
            // 'kelas_id' => 1,
            'jumlah' => 599,
            'rata_rata' => 74.88,
            'rangking' => 2,
        ]);

    }
}
