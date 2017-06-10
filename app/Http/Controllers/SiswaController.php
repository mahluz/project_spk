<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\dataSiswa;
use App\perhitungan;

class SiswaController extends Controller
{
    public function index(){
    	return view('siswa/beranda');
    }
    public function dataSiswa(){
      // return dataSiswa::get();
      $data['siswa']=dataSiswa::get();
      // dd($data);

      return view('siswa/data_siswa',$data);
    }
    public function create(){
      $request = Input::all();
      return $request;
    }

    public function sedikit($nilai,$bawah,$tengah,$atas){
      $result="null";
      if($nilai<=$tengah){
        $result=1;
      } else if(($nilai>=$tengah) && ($nilai<=$atas)){
        $a=$atas-$nilai;
        $b=$atas-$tengah;
        $result=$a/$b;
      } else if($nilai>=$atas){
        $result=0;
      }
      return $result;
    }
    public function sedang($nilai,$bawah,$tengah,$atas){
      $result="null";
      if($bawah>=$nilai || $nilai>=$atas){
        $result=0;
      } else if($nilai>=$bawah && $nilai<=$tengah){
        $a=$nilai-$bawah;
        $b=$tengah-$bawah;
        $result=$a/$b;
      } else if($nilai>=$tengah && $nilai<=$atas){
        $a=$atas-$nilai;
        $b=$atas-$tengah;
        $result=$a/$b;
      }
      return $result;
    }
    public function banyak($nilai,$bawah,$tengah,$atas){
      $result="null";
      if($nilai<=$bawah){
        $result=0;
      } else if($bawah<=$nilai && $nilai<=$tengah){
        $a=$nilai-$bawah;
        $b=$tengah-$bawah;
        $result=$a/$b;
      } else if($nilai>=$tengah){
        $result=1;
      }
      return $result;
    }

    public function store(){
      $request = Input::all();

      $kabupaten = 2 * $request['kabupaten'];
      $nasional = 4 * $request['nasional'];
      $internasional = 7 * $request['internasional'];
      $prestasi = $kabupaten + $nasional + $internasional;

      // return $this->sedikit($request['toefl'],0,300,400);

      $result=dataSiswa::create([
        "nama"=>$request['nama'],
        "nim"=>$request['nim'],
        "ipk"=>$request['ipk'],
        "toefl"=>$request['toefl'],
        "prestasi"=>$prestasi
      ]);
      $selectedSiswa=dataSiswa::where('nim',$request['nim'])->first();
      $calculate = perhitungan::create([
        "data_siswa_id"=>$selectedSiswa['id'],
        "ipk_sedikit"=>$this->sedikit($request['ipk'],0,2.90,3.20),
        "ipk_sedang"=>$this->sedang($request['ipk'],2.90,3.20,3.50),
        "ipk_banyak"=>$this->banyak($request['ipk'],3.20,3.50,4.00),
        "toefl_sedikit"=>$this->sedikit($request['toefl'],0,300,400),
        "toefl_sedang"=>$this->sedang($request['toefl'],300,400,500),
        "toefl_banyak"=>$this->banyak($request['toefl'],400,500,600),
        "prestasi_sedikit"=>$this->sedikit($prestasi,0,15,25),
        "prestasi_sedang"=>$this->sedang($prestasi,15,25,50),
        "prestasi_banyak"=>$this->banyak($prestasi,25,50,60),
      ]);

      return redirect('dataSiswa');
    }
    public function update(){

    }
    public function delete(){
      $request = Input::all();

      $result=dataSiswa::where('id',$request['id'])->delete();

      return redirect('dataSiswa');
    }
}
