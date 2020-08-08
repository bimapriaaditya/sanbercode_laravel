<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLikeDislike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_soal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('soal_id');
            $table->unsignedBigInteger('profil_id');
            $table->integer('poin');
            $table->timestamps();
        });

        Schema::create('like_dislike_jawaban', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jawaban_id');
            $table->unsignedBigInteger('profil_id');
            $table->integer('poin');
            $table->timestamps();
        });

        Schema::table('like_dislike_soal', function (Blueprint $table) {
            $table->foreign('soal_id')->references('id')->on('soal');
            $table->foreign('profil_id')->references('id')->on('profil');
        });

        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
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
        Schema::dropIfExists('like_dislike_soal');
        Schema::dropIfExists('like_dislike_jawaban');
    }
}
