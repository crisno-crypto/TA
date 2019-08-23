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
                        <h4 class="page-title">Data Dosen</h4> </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div>
                <a href="/dosen/tambah"><button class="btn btn-success"><i class="fa fa-plus-square-o"></i> Tambah</button></a>
              </div><br>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NID</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Telphone</th>                 
                  <th>Aksi</th>
                </tr>
                </thead>
               
                @foreach($dosen as $data)
                <tr>
                <td> {{ $data->nid }}</td>
                <td> {{ $data->nama }}</td>
                <td> {{ $data->jk }}</td>
                <td> {{ $data->alamat }}</td>
                <td> {{ $data->tlp }}</td>
                <td>
                    <a href="/dosen/edit/{{$data->id_dosen}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                    <a href="/dosen/hapus/{{$data->id_dosen}}"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
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