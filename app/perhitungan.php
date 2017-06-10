<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perhitungan extends Model
{
    protected $table = "perhitungan_data_siswa";
    protected $fillable = ['id','data_siswa_id','ipk_sedikit','ipk_sedang','ipk_banyak','toefl_sedikit','toefl_sedang','toefl_banyak','prestasi_sedikit','prestasi_sedang','prestasi_banyak'];
}
