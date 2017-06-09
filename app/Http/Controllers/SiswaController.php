<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\dataSiswa;

class SiswaController extends Controller
{
    public function index(){
    	return view('siswa/beranda');
    }
    public function dataSiswa(){
      // return dataSiswa::get();
      $data['siswa']=dataSiswa::get();
      return view('siswa/data_siswa',$data);
    }
    public function create(){
      $request = Input::all();
      return $request;
    }
    public function store(){
      $request = Input::all();

      $result=dataSiswa::create([
        "nama"=>$request['nama'],
        "nim"=>$request['nim'],
        "ipk"=>$request['ipk'],
        "toefl"=>$request['toefl'],
        "prestasi"=>$request['prestasi']
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
