@extends('master.master')
@section('content')

    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                
                  <h3 class="box-title" style="font-weight: bold;">Laboratorium</h3> 

                  <a href="{{url('')}}/tambahkan-laboratorium"><button class="btn btn-primary" style="float: right;">
                    Tambah Lab
                  </button></a>
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Nama Laboratorium</th>
                      <th>Keterangan</th>
                      <th>Bisa direservasi</th>
                      @if(Auth::user()->is_admin==2)
                      <th>Action</th>
                      @endif
                    </tr>
                    @foreach($laboratorium as $list)
                      <tr>
                        <td>{{$list->id}}</td>
                        <td><a href="{{url('')}}/deskripsi-laboratorium/{{$list->id}}">{{$list->nama_lab}}</a></td>
                        <td>{{$list->deskripsi_lab}}</td>
                        <td>{{$list->reservasiable}}</td>
                        @if(Auth::user()->is_admin==2)
                          <td><a href="{{url('')}}/pengaturan-laboratorium/{{$list->id}}">Config Lab</a></td>
                        @endif
                        <!-- <td><a href="{{url('')}}/edit-deskripsi-laboratorium/{{$list->id}}">Edit Description</a></td> -->
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
    