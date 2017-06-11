@extends('layouts/siswa')
@section('content')
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pencarian Rekomendasi
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> <a href="{{url('admin/dashboard')}}"> Pencarian</a>
                </li>
            </ol>
        </div>
    </div>
    {{-- end row --}}
    <div class="row">
      <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-heading">Form Data Siswa</div>
          <div class="panel-body">
            <form class="" id="search" action="index.html" method="post">
              <div class="form-group">
                <label for="">IPK</label>
                <select class="form-control" name="ipk" id="ipk">
                  <option value="ipk_sedikit">Sedikit</option>
                  <option value="ipk_sedang">Sedang</option>
                  <option value="ipk_banyak">Banyak</option>
                </select>
              </div>
              {{-- end form group --}}
              <div class="form-group">
                <label for="">Operator 1</label>
                <select class="form-control" name="op1" id="op1">
                  <option value="where">AND</option>
                  <option value="orWhere">OR</option>
                </select>
              </div>
              {{-- end form group --}}
              <div class="form-group">
                <label for="">TOEFL</label>
                <select class="form-control" name="toefl" id="toefl">
                  <option value="toefl_sedikit">Sedikit</option>
                  <option value="toefl_sedang">Sedang</option>
                  <option value="toefl_banyak">Banyak</option>
                </select>
              </div>
              {{-- end form group --}}
              <div class="form-group">
                <label for="">Operator 2</label>
                <select class="form-control" name="op2" id="op2">
                  <option value="where">AND</option>
                  <option value="orWhere">OR</option>
                </select>
              </div>
              {{-- end form group --}}
              <div class="form-group">
                <label for="">PRESTASI</label>
                <select class="form-control" name="prestasi" id="prestasi">
                  <option value="prestasi_sedikit">Sedikit</option>
                  <option value="prestasi_sedang">Sedang</option>
                  <option value="prestasi_banyak">Banyak</option>
                </select>
              </div>
              <button type="button" class="btn btn-success btn-block" name="button" onclick="search()">Cari</button>
            </form>
          </div>
        </div>
        {{-- end panel --}}
      </div>
      {{-- end col md 6 --}}
      <div class="col-md-10">
        <table id="tabel_surat_keluar" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Mahasiswa</th>
              <th>NIM</th>
              <th>IPK</th>
              <th>TOEFL</th>
              <th>PRESTASI</th>
              <th>IPK Sedikit</th>
              <th>IPK Sedang</th>
              <th>IPK Banyak</th>
              <th>Toefl Sedikit</th>
              <th>Toefl Sedang</th>
              <th>Toefl Banyak</th>
              <th>Prestasi Sedikit</th>
              <th>Prestasi Sedang</th>
              <th>Prestasi Banyak</th>
            </tr>
          </thead>
          <tbody id="result">

          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Mahasiswa</th>
              <th>NIM</th>
              <th>IPK</th>
              <th>TOEFL</th>
              <th>PRESTASI</th>
              <th>IPK Sedikit</th>
              <th>IPK Sedang</th>
              <th>IPK Banyak</th>
              <th>Toefl Sedikit</th>
              <th>Toefl Sedang</th>
              <th>Toefl Banyak</th>
              <th>Prestasi Sedikit</th>
              <th>Prestasi Sedang</th>
              <th>Prestasi Banyak</th>
            </tr>
          </tfoot>
        </table>
      </div>
      {{-- end col md 6 --}}
    </div>
    {{-- end row --}}
  </div>
  {{-- end container fluid --}}
@endsection
@section('script')
  <script type="text/javascript">
    function search(){

      var ipk = $("#ipk").val();
      var op1 = $("#op1").val();
      var toefl = $("#toefl").val();
      var op2 = $("#op2").val();
      var prestasi = $("#prestasi").val();
      var data = {
        ipk : ipk,
        op1 : op1,
        toefl : toefl,
        op2 : op2,
        prestasi : prestasi
      };
      // console.log(data);
      $.post("http://localhost/project_spk/pencarian/get",data,function(result){
        console.log(result);

        $.each(result,function(i,item){
          i+=1;
          $("#result").append(
            "\
              <tr>\
                <td>"+i+"</td>\
                <td>"+this.nama+"</td>\
                <td>"+this.nim+"</td>\
                <td>"+this.ipk+"</td>\
                <td>"+this.toefl+"</td>\
                <td>"+this.prestasi+"</td>\
                <td>"+this.ipk_sedikit+"</td>\
                <td>"+this.ipk_sedang+"</td>\
                <td>"+this.ipk_banyak+"</td>\
                <td>"+this.toefl_sedikit+"</td>\
                <td>"+this.toefl_sedang+"</td>\
                <td>"+this.toefl_banyak+"</td>\
                <td>"+this.prestasi_sedikit+"</td>\
                <td>"+this.prestasi_sedang+"</td>\
                <td>"+this.prestasi_banyak+"</td>\
              </tr>\
            "
          );
        });

      },"json");
      // end post
    }
    // end search
  </script>
@endsection
