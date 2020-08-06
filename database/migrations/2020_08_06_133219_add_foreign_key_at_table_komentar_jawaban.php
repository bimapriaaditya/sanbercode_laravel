<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyAtTableKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints('komentar_jawaban', function (Blueprint $table) {
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
        Schema::disableForeignKeyConstraints('komentar_jawaban', function (Blueprint $table) {
            $table->dropForeign(['jawaban_id', 'profil_id']);
        });
    }
}
