<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    //
    protected $table = 'krs';

    protected $fillable = ['nim', 'matkul', 'no_frs', 'tahun_akademik'];

}
