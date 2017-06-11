@extends('layouts/siswa')
@section('content')
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pemilihan data
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> <a href="{{url('admin/dashboard')}}"> Data</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
  </div>
  {{-- end container --}}
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
               <div id="list">
                <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>IPK</h3>
                    <p>Cari siswa dengan IPK Tertinggi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-checkmark-circled"></i>
                  </div>
                  <a onclick="ipk()" class="small-box-footer">Cari sekarang <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->
              <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>Toefl</h3>
                    <p>Cari siswa dengan toefl tertinggi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-edit"></i>
                  </div>
                  <a onclick="toefl()" class="small-box-footer">Cari sekarang <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->
              <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>Prestasi</h3>
                    <p>Cari siswa dengan prestasi terbaik</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-mortar-board"></i>
                  </div>
                  <a onclick="prestasi()" class="small-box-footer">Cari sekarang <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                  </div>
                   <div class="col-lg-4 col-xs-6">
                <!-- small box -->
              </div><!-- ./col -->
            </div>
            {{-- end list --}}
          </div><!-- /.box-body -->

        </div><!-- /.box -->
      </div><!-- /.col -->

    </div>
    {{-- end row --}}
  </div>
  {{-- end container --}}

      <div class="container-fluid">
        <div id="result">

        </div>
        <canvas id="myChart"></canvas>
      </div>

@endsection
@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      // var ctx = document.getElementById('myChart').getContext('2d');
      // var chart = new Chart(ctx, {
      //     // The type of chart we want to create
      //     type: 'line',
      //
      //     // The data for our dataset
      //     data: {
      //         labels: ["IPK Rendah", "IPK Sedang", "IPK Banyak","TOEFL Rendah", "TOEFL Sedang", "TOEFL Banyak","Prestasi Rendah", "Prestasi Sedang", "Prestasi Banyak"],
      //         datasets: [{
      //             label: "My First dataset",
      //             backgroundColor: 'rgb(255, 99, 132)',
      //             borderColor: 'rgb(255, 99, 132)',
      //             data: [0, 10, 5,0, 10, 5,0, 10, 5],
      //         }]
      //     },
      //
      //     // Configuration options go here
      //     options: {}
      // });
    });

    function ipk(){
      $.post("http://localhost/project_spk/statistik/ipk",function(data){
        console.log(data);
        $("#result").html(
          "<table class='table table-bordered table-striped'>\
            <thead>\
              <tr>\
                <th>No</th>\
                <th>Mahasiswa</th>\
                <th>NIM</th>\
                <th>IPK</th>\
                <th>IPK Rendah</th>\
                <th>IPK Sedang</th>\
                <th>IPK Tinggi</th>\
                <th>Action</th>\
              </tr>\
            </thead>\
            <tbody id=content>\
            </tbody>\
            <tfoot>\
                <tr>\
                  <th>No</th>\
                  <th>Mahasiswa</th>\
                  <th>NIM</th>\
                  <th>IPK</th>\
                  <th>IPK Rendah</th>\
                  <th>IPK Sedang</th>\
                  <th>IPK Tinggi</th>\
                  <th>Action</th>\
              </tr>\
            </tfoot>\
          </table>\
          "
        );

        $.each(data,function(i,item){
          i+=1;
          $("#content").append(
            "\
              <tr>\
                <td>"+i+"</td>\
                <td>"+this.nama+"</td>\
                <td>"+this.nim+"</td>\
                <td>"+this.ipk+"</td>\
                <td>"+this.ipk_sedikit+"</td>\
                <td>"+this.ipk_sedang+"</td>\
                <td>"+this.ipk_banyak+"</td>\
                <td></td>\
              </tr>\
            "
          );
        });
      },"json");
      //end post
      $.post("http://localhost/project_spk/statistik/chart_ipk",function(count){
        console.log(count);
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["IPK Rendah", "IPK Sedang", "IPK Banyak"],
                datasets: [{
                    label: "Statistik IPK",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [count.ipk_sedikit,count.ipk_sedang,count.ipk_banyak],
                }]
            },

            // Configuration options go here
            options: {}
        });
      },"json");
      // console.log('hore');
    }
    // end ipk
    function toefl(){
      $.post("http://localhost/project_spk/statistik/toefl",function(data){
        console.log(data);
        $("#result").html(
          "<table class='table table-bordered table-striped'>\
            <thead>\
              <tr>\
                <th>No</th>\
                <th>Mahasiswa</th>\
                <th>NIM</th>\
                <th>Toefl</th>\
                <th>Toefl Rendah</th>\
                <th>Toefl Sedang</th>\
                <th>Toefl Tinggi</th>\
                <th>Action</th>\
              </tr>\
            </thead>\
            <tbody id=content>\
            </tbody>\
            <tfoot>\
              <tr>\
                <th>No</th>\
                <th>Mahasiswa</th>\
                <th>NIM</th>\
                <th>Toefl</th>\
                <th>Toefl Rendah</th>\
                <th>Toefl Sedang</th>\
                <th>Toefl Tinggi</th>\
                <th>Action</th>\
              </tr>\
            </tfoot>\
          </table>\
          "
        );

        $.each(data,function(i,item){
          i+=1;
          $("#content").append(
            "\
              <tr>\
                <td>"+i+"</td>\
                <td>"+this.nama+"</td>\
                <td>"+this.nim+"</td>\
                <td>"+this.toefl+"</td>\
                <td>"+this.toefl_sedikit+"</td>\
                <td>"+this.toefl_sedang+"</td>\
                <td>"+this.toefl_banyak+"</td>\
                <td></td>\
              </tr>\
            "
          );
        });
      },"json");
      //end post
      $.post("http://localhost/project_spk/statistik/chart_toefl",function(count){
        console.log(count);
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["TOEFL Rendah", "TOEFL Sedang", "TOEFL Banyak"],
                datasets: [{
                    label: "Statistik TOEFL",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [count.toefl_sedikit,count.toefl_sedang,count.toefl_banyak],
                }]
            },

            // Configuration options go here
            options: {}
        });
      },"json");
      // end post
    }
    // end toefl

    function prestasi(){
      $.post("http://localhost/project_spk/statistik/toefl",function(data){
        console.log(data);
        $("#result").html(
          "<table class='table table-bordered table-striped'>\
            <thead>\
              <tr>\
                <th>No</th>\
                <th>Mahasiswa</th>\
                <th>NIM</th>\
                <th>Prestasi</th>\
                <th>Prestasi Rendah</th>\
                <th>Prestasi Sedang</th>\
                <th>Prestasi Tinggi</th>\
                <th>Action</th>\
              </tr>\
            </thead>\
            <tbody id=content>\
            </tbody>\
            <tfoot>\
              <tr>\
                <th>No</th>\
                <th>Mahasiswa</th>\
                <th>NIM</th>\
                <th>Prestasi</th>\
                <th>Prestasi Rendah</th>\
                <th>Prestasi Sedang</th>\
                <th>Prestasi Tinggi</th>\
                <th>Action</th>\
              </tr>\
            </tfoot>\
          </table>\
          "
        );

        $.each(data,function(i,item){
          i+=1;
          $("#content").append(
            "\
              <tr>\
                <td>"+i+"</td>\
                <td>"+this.nama+"</td>\
                <td>"+this.nim+"</td>\
                <td>"+this.prestasi+"</td>\
                <td>"+this.prestasi_sedikit+"</td>\
                <td>"+this.prestasi_sedang+"</td>\
                <td>"+this.prestasi_banyak+"</td>\
                <td></td>\
              </tr>\
            "
          );
        });
      },"json");
      //end post
      $.post("http://localhost/project_spk/statistik/chart_prestasi",function(count){
        console.log(count);
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["Prestasi Rendah", "Prestasi Sedang", "Prestasi Banyak"],
                datasets: [{
                    label: "Statistik Prestasi",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [count.prestasi_sedikit,count.prestasi_sedang,count.prestasi_banyak],
                }]
            },

            // Configuration options go here
            options: {}
        });
      },"json");
      // end post
    }
    // end prestasi

  </script>
@endsection
