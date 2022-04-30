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
            'alamat_sekolah' => 'Kampung Munjul'
        ]);
    }
}
