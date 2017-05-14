@extends('master.master')

@section('content')

    <div class="row">
            <div class="col-xs-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">Daftar User Lab</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Nama</th>
                      <td>Nafia Rizky</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>nafia.ry@gmail.com</td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <td>082216612220</td>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <td>09 Juli 1996</td>
                    </tr>
                    <tr>
                      <th>Tempat Lahir</th>
                      <td>Batam</td>
                    </tr>
                    <tr>
                      <th>Alamat Asal</th>
                      <td>DutaMas Cluster Victoria No.8D</td>
                    </tr>
                    <tr>
                      <th>Alamat Surabaya</th>
                      <td>Perumdos J-45</td>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <td>Islam</td>
                    </tr>
                    <tr>
                      <th>Motivasi</th>
                      <td>Salah pilih</td>
                    </tr>              
                              

                    <!-- <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr> -->
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

      @stop
