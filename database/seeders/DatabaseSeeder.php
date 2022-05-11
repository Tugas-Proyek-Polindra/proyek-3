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
            'level' => true
            // 'role' => 'admin'
        ]);

        $this->call(AbsensiSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(NIlaiPelajaranSeeder::class);
        $this->call(NilaiSikapSeeder::class);
        $this->call(PelajaranSeeder::class);
        $this->call(RekapNilaiSeeder::class);
        $this->call(RiwayatKeaktifanSeeder::class);
        $this->call(SantriSeeder::class);

    }
}
