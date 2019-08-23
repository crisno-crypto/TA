 @extends('layout.base')
 @section('content')
 <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Mahasiswa</h4> </div>
                   
                </div>

              <div>
                <a href="/mahasiswa/tambah"><button class="btn btn-success"><i class="fa fa-plus-square-o"></i> Tambah</button></a>
              </div><br>
                <!-- /.row -->
                <!-- .row -->
                
              <table id="example1" class="table table-bordered table-striped">
                               <thead>
                <tr>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Telphone</th>
                  <th>Alamat</th>                
                  <th>Aksi</th>
                </tr>
                </thead>
               
                @foreach($kelas as $data)
                <tr>                
                <td> {{ $data->nim }}</td>
                <td> {{ $data->nama }}</td>
                <td> {{ $data->kelas }}</td>
                <td> {{ $data->jk }}</td>
                <td> {{ $data->agama }}</td>
                <td> {{ $data->tlp }}</td>
                <td> {{ $data->alamat }}</td>
                <td>
                    <a href="/mahasiswa/edit/{{$data->id_mhs}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                    <a href="/mahasiswa/hapus/{{$data->id_mhs}}"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                </td>
              </tr>
              @endforeach
              </table>
            </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
@endsection