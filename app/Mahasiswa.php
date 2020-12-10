<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';

    protected $fillable = ['nama', 'nim', 'prodi', 'semester','tahun_masuk','tgl_lahir','gender','avatar'];

}
