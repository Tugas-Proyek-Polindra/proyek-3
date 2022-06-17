<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri');
            $table->foreignId('nilai_pelajaran_id')->nullable();
            $table->foreignId('nilai_sikap_id')->nullable();
            $table->foreignId('absensi_id')->nullable();
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('nama_ibu');
            $table->string('sekolah_asal');
            $table->string('alamat_sekolah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('santris');
    }
}
