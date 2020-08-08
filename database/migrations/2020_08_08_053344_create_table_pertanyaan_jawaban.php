<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePertanyaanJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi');
            $table->unsignedBigInteger('jawaban_id')->nullable();
            $table->unsignedBigInteger('profil_id');
            $table->timestamps();
        });

        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->text('isi');
            $table->unsignedBigInteger('soal_id');
            $table->unsignedBigInteger('profil_id');
            $table->timestamps();
        });

        Schema::table('soal', function (Blueprint $table) {
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->foreign('profil_id')->references('id')->on('profil');
        });

        Schema::table('jawaban', function (Blueprint $table) {
            $table->foreign('soal_id')->references('id')->on('soal');
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
        Schema::dropIfExists('soal');
        Schema::dropIfExists('jawaban');
    }
}
