@extends('master.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Administrator Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama:</label>
                  <input type="text" class="form-control" placeholder="Nama Admin">
                </div>

                <div class="form-group">
                  <label>NRP:</label>
                  <input type="text" class="form-control" placeholder="511...">
                </div>

                <!-- Date -->
                 <div class="form-group">
                  <label>Nomor Handphone:</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

                 <div class="form-group">
                  <label>Angkatan:</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    @stop
