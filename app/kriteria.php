<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    protected $table="kriteria_data_siswa";
    protected $fillable=['id','data_siswa_id','kriteria'];
}
