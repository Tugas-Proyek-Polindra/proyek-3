<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatKeaktifansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_keaktifans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('status_keaktifan')->nullable();
            $table->string('tgl_mulai_bertugas')->nullable();
            $table->string('status_penugasan')->nullable();
            $table->string('tugas_utama')->nullable();
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
        Schema::dropIfExists('riwayat_keaktifans');
    }
}
