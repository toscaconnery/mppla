@extends('master.master')

@section('content')

    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">Administrator Laboratorium Pemrograman 2</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NRP</th>
                      <th>Laboratorium</th>
                      <th>No. Handphone</th>
                      <th><i class="fa fa-edit"></i></th>
                    </tr>
                    @php
                      $x = 1;
                    @endphp
                    @foreach($administrator as $data)
                      <tr>
                        <td>{{$x++}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->nrp}}</td>
                        <td>{{$data->nama_lab}}</td>
                        <td>{{$data->no_hp}}</td>
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
    