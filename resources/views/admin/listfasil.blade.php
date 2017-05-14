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
                        <td><?php echo $listfasil->id?></td>
                        <td><?php echo $listfasil->nama_fasil?></td>
                        <td><?php echo $listfasil->tahun_masuk?></td>
                        <td><?php echo $listfasil->jumlah?></td>
                        <td><?php echo $listfasil->kondisi?></td>
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
