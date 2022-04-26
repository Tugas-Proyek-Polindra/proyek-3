<?php

namespace Database\Seeders;
use App\Models\RiwayatKeaktifan;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class RiwayatKeaktifanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RiwayatKeaktifan::create([
            'user_id' => '2',
            'status_keaktifan' => 'Aktif',
            'tgl_mulai_bertugas' => Carbon::createFromFormat('Y-m-d', '2021-07-01')->format('Y-m-d'),
            'status_penugasan' => 'Tetap',
            'tugas_utama' => 'Lainnya',
        ]);
    }
}
