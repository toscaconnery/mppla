@extends('master.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
    <div class="row" >
            <div class="col-md-8" >
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">Progres LBE</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No.</th>
                      <th>NRP</th>
                      <th>Progres</th>
                      <th>Unduh</th>
                    </tr>
                      @if(isset($progres))
                      @foreach ($progres as $progres)                    
                      <tr>
                        <td><?php echo $progres->id ?></td>
                        <td><?php echo $progres->id_mhs ?></td>
                        <td><?php echo $progres->upload_tugas ?></td>
                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                      </tr>
                      @endforeach
                      @endif
                    <!-- <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
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