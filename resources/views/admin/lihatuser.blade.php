@extends('master.master')

@section('content')

    <div class="row">
            <div class="col-xs-12">
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
                      <th>Email</th>
                      <th>No. Handphone</th>
                      <th> </th>
                    </tr>
                    <tr>
                      <td>Nafia Rizky</td>
                      <td>nafia.ry@gmail.com</td>
                      <td>082216612220</td>
                      <td><a href="{{url('')}}/detailuser">Lihat Detail</a></td>
                    </tr>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

      @stop
