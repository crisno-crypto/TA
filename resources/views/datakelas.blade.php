 @extends('layout.base')
 @section('content')
 <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">data kelas</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                
              <table id="example1" class="table table-bordered table-striped">
                               <thead>
                <tr>
                  <th>Prodi</th>              
                  <th>Konsentrasi</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
               
                @foreach($kelas as $data)
                <tr>
                <td> {{ $data->prodi }}</td>
                <td> {{ $data->konsentrasi }}</td>
                <td> {{ $data->kelas }}</td>
                <td>
                    <a href="/kelas/edit/{{$data->id_kelas}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                    <a href="/kelas/hapus/{{$data->id_kelas}}"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                </td>
              </tr>
              @endforeach
              </table>
              <hr class="love">
              <div>
                <a href="kelas/tambah"><button class="btn btn-success"><i class="fa fa-plus-square-o"></i> Tambah</button></a>
              </div>
            </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
@endsection