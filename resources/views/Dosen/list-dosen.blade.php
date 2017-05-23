@extends('master.master')

@section('content')

    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                
                  <h3 class="box-title" style="font-weight: bold;">Dosen Teknik Informatika ITS</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Telepon</th>
                      <th>Alamat</th>
                      <th>Action</th>
                    </tr>
                    @foreach($dosen as $dosen)
                      <tr>
                        <td>{{$dosen->nip}}</td>
                        <td><a href="{{url('')}}/detail-dosen/{{$dosen->id}}">{{$dosen->nama}}</a></td>
                        <td>{{$dosen->email}}</td>
                        <td>{{$dosen->no_hp}}</td>
                        <td>{{$dosen->alamat}}</td>
                        <td><a href="{{url('')}}/edit-dosen/{{$dosen->id}}">Edit</a></td>
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