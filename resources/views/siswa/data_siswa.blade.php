@extends('layouts/siswa')
@section('content')

  <div class="container">

    <section class="content-header">
              <h1>
                Data Siswa
              </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
            </div><!-- /.box-header -->
          </div>
          {{-- end box --}}

              <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data</button>
              <div class="box-body">
                <table id="tabel_surat_keluar" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Mahasiswa</th>
                      <th>NIM</th>
                      <th>IPK</th>
                      <th>TOEFL</th>
                      <th>PRESTASI</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($siswa as $number => $ini)
                      <tr>
                        <td>{{$number+1}}</td>
                        <td>{{$ini->nama}}</td>
                        <td>{{$ini->nim}}</td>
                        <td>{{$ini->ipk}}</td>
                        <td>{{$ini->toefl}}</td>
                        <td>{{$ini->prestasi}}</td>
                        <td>
                          <a title="Detail" class="btn btn-xs btn-default" href=""><i class="fa fa-search"></i></a>
                          <a title="Edit" class="btn btn-xs btn-default" href=""><i class="fa fa-edit"></i></a>
                          <a title="Delete" class="btn btn-xs btn-default"  onclick="event.preventDefault();document.getElementById('delete').submit()"><i class="fa fa-close"></i></a>
                          <form class="" id="detail" action="index.html" method="post">
                            <input type="hidden" name="id" value="{{$ini->id}}">
                          </form>
                          <form class="" id="edit" action="index.html" method="post">
                            <input type="hidden" name="id" value="{{$ini->id}}">
                          </form>
                          <form class="" id="delete" action="{{url('dataSiswa/delete')}}" method="post">
                            <input type="hidden" name="id" value="{{$ini->id}}">
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <tr>
                        <th>No</th>
                        <th>Mahasiswa</th>
                        <th>NIM</th>
                        <th>IPK</th>
                        <th>TOEFL</th>
                        <th>PRESTASI</th>
                        <th>Action</th>
                    </tr>
                    </tr>
                  </tfoot>
                </table>
              </div><!-- /.box-body -->

          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->

  </div>
  {{-- end container --}}

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Input</h4>
      </div>
      <div class="modal-body">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Input new Data</h3>
          </div><!-- /.box-header -->
        </div>
        {{-- end box --}}
        <form class="form" action="{{url('dataSiswa/store')}}" method="post">
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" value="">
          </div>
          <div class="form-group">
            <label for="">Nim</label>
            <input type="text" class="form-control" name="nim" value="">
          </div>
          <div class="form-group">
            <label for="">IPK</label>
            <input type="text" class="form-control" name="ipk" value="">
          </div>
          <div class="form-group">
            <label for="">TOEFL</label>
            <input type="text" class="form-control" name="toefl" value="">
          </div>
          <div class="form-group">
            <label for="">Prestasi</label>
            <input type="text" class="form-control" name="prestasi" value="">
          </div>
          <button type="submit" class="btn btn-success" name="button">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
{{-- end myModal --}}

@endsection
