@extends('master.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
    <div class="row" >
            <div class="col-md-8" >
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">Modul LBE</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No.</th>
                      <th>Modul</th>
                    </tr>
                      @php
                        $x = 1;
                      @endphp
                      @if(isset($modul))
                        @foreach ($modul as $modul)                    
                        <tr>
                          <td>{{$x++}}</td>
                          <td>{{$modul->judul}}</td>
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