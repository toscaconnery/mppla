@extends('master.master')
@section('content')

    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                
                  <h3 class="box-title" style="font-weight: bold;">Daftar User Aplikasi</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No. Handphone</th>
                      <th> </th>
                    </tr>
                    @foreach($user as $list)
                      <tr>
                        <td>{{$list->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->no_hp}}</td>
                        <td><a href="{{url('')}}/detail-user/{{$list->id}}">Lihat Detail</a></td>
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