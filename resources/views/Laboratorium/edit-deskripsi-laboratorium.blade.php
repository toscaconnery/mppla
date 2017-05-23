@extends('master.master')
@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Deskripsi Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST" enctype="multipart/form-data">
                <!-- text input -->
                {{ csrf_field() }}

                <div class="form-group">
                  <label>{{$laboratorium->nama_lab}}</label>
                </div>

                <!-- <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" placeholder="Judul">
                </div> -->

                <!-- textarea -->
                <div class="form-group">
                  <label>Deskripsi Laboratorium</label>
                  <textarea name="deskripsi_lab" class="form-control" rows="5">{{$laboratorium->deskripsi_lab}}</textarea>
                </div>

                <div class="form-group">
                  <label>Logo Laboratorium</label>
                  <input type="file" id="modul" name="berkas">
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