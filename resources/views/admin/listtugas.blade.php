@extends('master.master')

@section('content')

    <div class="row" >
            <div class="col-md-8" >
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">Penugasan LBE</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Judul Tugas</th>
                      <th>Detail</th>
                      <th>Diberikan ke</th>
                      <th><i class="fa fa-edit"></i></th>
                    </tr>
                      @if(isset($listtugas))
                      @foreach ($listtugas as $listtugas)                    
                      <tr>
                        <td><?php echo $listtugas->judul ?></td>
                        <td><?php echo $listtugas->tugas ?></td>
                        <td><?php echo $listtugas->id_mhs ?></td>
                        <td><a href="#">Ubah</a></td>
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
