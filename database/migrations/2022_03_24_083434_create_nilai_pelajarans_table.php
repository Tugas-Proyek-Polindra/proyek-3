<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id');
            $table->string('al_quran_hadist')->nullable();
            $table->string('al_hadist')->nullable();
            $table->string('aqidah')->nullable();
            $table->string('akhlaq')->nullable();
            $table->string('fiqih')->nullable();
            $table->string('tarikh')->nullable();
            $table->string('b_arab')->nullable();
            $table->string('praktikum')->nullable();
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
        Schema::dropIfExists('nilai_pelajarans');
    }
}
