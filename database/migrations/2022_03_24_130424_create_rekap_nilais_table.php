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
            $table->foreignId('santri_id');
            $table->foreignId('pelajaran_id');
            $table->foreignId('kelas_id');
            $table->foreignId('user_id');
            $table->foreignId('nilai_pelajaran_id');
            $table->foreignId('nilai_sikap_id');
            $table->integer('jumlah');
            $table->float('rata_rata');
            $table->integer('rangking');
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
