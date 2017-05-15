@extends('master.master')
@section('content')

    <div class="row" >
            <div class="col-md-8" >
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">List Fasilitas Laboratorium Pemrograman 2</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Nama Fasilitas</th>
                      <th>Tahun Masuk</th>
                      <th>Jumlah</th>
                      <th>Kondisi</th>
                      <th><i class="fa fa-edit"></i></th>
                    </tr>

                    @if(isset($listfasil))
                      @foreach ($listfasil as $listfasil)                    
                      <tr>
                        <td>{{$listfasil->id}}</td>
                        <td>{{$listfasil->nama_fasil}}</td>
                        <td>{{$listfasil->tahun_masuk}}</td>
                        <td>{{$listfasil->jumlah}}</td>
                        <td>{{$listfasil->kondisi}}</td>
                        <td><a href="{{url('')}}\edit-fasilitas-laboratorium\{{$listfasil->id}}">Ubah</a></td>
                      </tr>
                      @endforeach
                      @endif
                    </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

      @stop