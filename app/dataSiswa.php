<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataSiswa extends Model
{
    protected $table = "data_siswa";
    protected $fillable = ['nama','nim','ipk','toefl','prestasi'];
}
