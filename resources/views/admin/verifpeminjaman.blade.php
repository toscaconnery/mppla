@extends('master.master')

@section('content')

    <div class="row" >
            <div class="col-md-8" >
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">Verifikasi Peminjaman</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Nama Peminjam</th>
                      <th>Kegiatan</th>
                      <th>Tanggal</th>
                      <th>Terima</th>
                      <th>Tolak</th>
                    </tr>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

    @stop