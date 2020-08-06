<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeigKeyAtTableLikeDislikeJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints('like_dislike_jawaban', function (Blueprint $table) {
            $table->foreignId('jawawban_id')->constrained('jawawban')->onDelete('cascade');
            $table->foreignId('profil_id')->constrained('profil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints('like_dislike_jawaban', function (Blueprint $table) {
            $table->dropForeign(['jawaban_id', 'profil_id']);
        });
    }
}
