@extends('master.master')
@section('content')

    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                
                  <h3 class="box-title" style="font-weight: bold;">List User</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Status Admin</th>
                      <th>Lab</th>
                      <th>Action</th>
                    </tr>
                    @foreach($user as $list)
                      <tr>
                        <td>{{$list->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>
                          @if(is_null($list->is_admin))
                            {{'Bukan Admin'}}
                          @else
                            {{'Admin'}}
                          @endif
                        </td>
                        <td>
                          @if(is_null($list->id_lab))
                            {{' '}}
                          @else
                            {{$list->id_lab}}
                          @endif
                        </td>
                        <td>
                          @if(is_null($list->is_admin))
                            <a href="{{url('')}}/jadikan_admin/{{$list->id}}">Jadikan admin</a>
                          @else
                            <a href="{{url('')}}/nonaktifkan_admin/{{$list->id}}">Nonaktifkan admin</a>
                          @endif
                        </td>
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