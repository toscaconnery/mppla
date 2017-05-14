@extends('master.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
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
                      <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <td>{{$user->no_hp}}</td>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <td>{{$user->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                      <th>Tempat Lahir</th>
                      <td>{{$user->tempat_lahir}}</td>
                    </tr>
                    <tr>
                      <th>Alamat Asal</th>
                      <td>{{$user->alamat_asal}}</td>
                    </tr>
                    <tr>
                      <th>Alamat Surabaya</th>
                      <td>{{$user->alamat_surabaya}}</td>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <td>{{$user->agama}}</td>
                    </tr>
                    <tr>
                      <th>Motivasi</th>
                      <td>{{$user->motivasi}}</td>
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