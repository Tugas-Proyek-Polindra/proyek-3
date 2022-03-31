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
            $table->integer('al_quran')->nullable();
            $table->integer('al_hadist')->nullable();
            $table->integer('aqidah')->nullable();
            $table->integer('akhlaq')->nullable();
            $table->integer('fiqih')->nullable();
            $table->integer('tarikh')->nullable();
            $table->integer('b_arab')->nullable();
            $table->integer('praktikum')->nullable();
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
