<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'Soal';

    protected $fillable = [
        'judul', 'isi', 'jawaban_id', 'profil_id'
    ];
}
