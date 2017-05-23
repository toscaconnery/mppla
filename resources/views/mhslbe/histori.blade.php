@extends('master2.master')

@section('content')

    <div class="row" >
            <div class="col-md-8" >
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">Histori Progres Tugas LBE</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    @php 
                      $x = 1;
                    @endphp
                    <tr>
                      <th>No.</th>
                      <th>Tanggal Submit</th>
                      <th>Detail Tugas</th>
                      <th>Status</th>
                    </tr>
                    @foreach($tugas as $data)
                      <tr>
                        <td>{{$x++}}</td>
                        <td>{{$data->deleted_at == NULL ? "-" : $data->deleted_at }}</td>
                        <td>{{$data->tugas}}</td>
                        <td>{{$data->deleted_at == NULL ? "Not yet completed" : "Completed"}}</td>
                      </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

      @stop