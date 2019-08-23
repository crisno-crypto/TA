@extends('layout.base')
@section('content')
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data matakuliah</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <div>
                <a href="/matakuliah/tambah"><button class="btn btn-success"><i class="fa fa-plus-square-o"></i> Tambah</button></a>
              </div><br>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Matakuliah</th>
                  <th>Kelas</th>
                  <th>Nama dosen</th>
                  <th>Semester</th>
                  <th>Aksi</th>
                </tr>
                </thead>
               
                @foreach($matakuliah as $data)
                <tr>
                <td> {{ $data->kd_mk }}</td>
                <td> {{ $data->kelas }}</td>
                <td> {{ $data->kd_dosen }}</td>
                <td> {{ $data->semester }}</td>
                <td>
                    <a href="/matakuliah/edit/{{$data->id_mk}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                    <a href="/matakuliah/hapus/{{$data->id_mk}}"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                </td>
              </tr>
              @endforeach
              </table>
              <hr class="love">
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

@endsection