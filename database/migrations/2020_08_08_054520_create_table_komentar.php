<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKomentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_soal', function (Blueprint $table) {
            $table->id();
            $table->text('isi');
            $table->unsignedBigInteger('soal_id');
            $table->unsignedBigInteger('profil_id');
            $table->timestamps();
        });

        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->id();
            $table->text('isi');
            $table->unsignedBigInteger('jawaban_id');
            $table->unsignedBigInteger('profil_id');
            $table->timestamps();
        });

        Schema::table('komentar_soal', function (Blueprint $table) {
            $table->foreign('soal_id')->references('id')->on('soal');
            $table->foreign('profil_id')->references('id')->on('profil');
        });

        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar');
        Schema::dropIfExists('komentar');
    }
}
