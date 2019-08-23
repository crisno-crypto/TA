 @extends('layout.base')
 @section('content')
 <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"></h4> </div>
                   
                </div>
                <!-- /.row -->
                <!-- .row -->
                
              <table id="example1" class="table table-bordered table-striped">
                               <thead>
                <tr>
                  <th>Prodi</th>              
                  <th>Konsentrasi</th>
                  <th>Kelas</th>
                  <th>Pilih Kelas</th>
                </tr>
                </thead>
               
                @foreach($inputnilai as $data)
                <tr>
                <td> {{ $data->prodi }}</td>
                <td> {{ $data->konsentrasi }}</td>
                <td> {{ $data->kelas }}</td>
                <td>
                    <a href="/inputnilai/pilihkelas/{{$data->id_kelas}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>                    
                </td>
              </tr>
              @endforeach
              </table>
              <hr class="love">
            </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
@endsection