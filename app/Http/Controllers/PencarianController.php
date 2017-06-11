<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use App\dataSiswa;
use App\perhitungan;

class PencarianController extends Controller
{
    public function index(){
      return view('pencarian/index');
    }
    public function search(){
      $request = Input::all();
      $op1 = $request['op1'];
      $op2 = $request['op2'];
      $result = dataSiswa::join('perhitungan_data_siswa','data_siswa.id','=','perhitungan_data_siswa.data_siswa_id')
      ->where($request['ipk'],">=",0.5)
      ->$op1($request['toefl'],">=",0.5)
      ->$op2($request['prestasi'],">=",0.5)
      ->get();

      return Response::json($result);
    }
}
