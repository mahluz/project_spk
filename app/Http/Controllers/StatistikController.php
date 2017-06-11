<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use App\dataSiswa;
use App\perhitungan;

class StatistikController extends Controller
{
    public function index(){
      return view('statistik/index');
    }
    public function ipk(){
      $data=dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')->orderBy('perhitungan_data_siswa.ipk_banyak','desc')->get();
      // dd($data['ipk']);
      return Response::json($data);
    }
    public function chart_ipk(){
      $count['ipk_sedikit']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("ipk_sedikit",">=",0.5)
      ->count();
      $count['ipk_sedang']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("ipk_sedang",">=",0.5)
      ->count();
      $count['ipk_banyak']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("ipk_banyak",">=",0.5)
      ->count();
      return Response::json($count);
    }
    public function toefl(){
      $data=dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')->orderBy('perhitungan_data_siswa.toefl_banyak','desc')->get();
      // dd($data['ipk']);
      return Response::json($data);
    }
    public function chart_toefl(){
      $count['toefl_sedikit']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("toefl_sedikit",">=",0.5)
      ->count();
      $count['toefl_sedang']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("toefl_sedang",">=",0.5)
      ->count();
      $count['toefl_banyak']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("toefl_banyak",">=",0.5)
      ->count();
      return Response::json($count);
    }
    public function prestasi(){
      $data=dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')->orderBy('perhitungan_data_siswa.prestasi_banyak','desc')->get();
      // dd($data['ipk']);
      return Response::json($data);
    }
    public function chart_prestasi(){
      $count['prestasi_sedikit']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("prestasi_sedikit",">=",0.5)
      ->count();
      $count['prestasi_sedang']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("prestasi_sedang",">=",0.5)
      ->count();
      $count['prestasi_banyak']= dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where("prestasi_banyak",">=",0.5)
      ->count();
      return Response::json($count);
    }
}
