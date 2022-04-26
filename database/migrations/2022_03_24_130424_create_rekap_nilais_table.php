<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->nullable();
            // $table->foreignId('kelas_id');
            // $table->foreignId('user_id');
            $table->foreignId('nilai_pelajaran_id')->nullable();
            $table->foreignId('nilai_sikap_id')->nullable();
            $table->foreignId('absensi_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->integer('rangking')->nullable();
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
        Schema::dropIfExists('rekap_nilais');
    }
}
