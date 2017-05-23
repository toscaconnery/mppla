@extends('master.master')

@section('content')

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Profil Diri</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <form role="form" action="" method="POST">
              <div class="form-group">
                <label>Nama:</label>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" class="form-control" name="nama" value="{{$admin->name}}">
              </div>

              <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="email" value="{{$admin->email}}">
              </div>

              <div class="form-group">
                <label>Nomor Handphone:</label>
                <input type="text" class="form-control" name="nohp" value="{{$admin->no_hp}}">
              </div>

              <div class="form-group">
                <label>Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tgllahir" value="{{$admin->tanggal_lahir}}">
              </div>

              <div class="form-group">
                <label>Tempat Lahir:</label>
                <input type="text" class="form-control" name="tempatlhr" value="{{$admin->tempat_lahir}}">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>NRP:</label>
                <input type="text" class="form-control" name="nrp" value="{{$admin->nrp}}">
              </div>
              
              <div class="form-group">
                  <label>Alamat Asal:</label>
                  <input type="text" class="form-control" name="asal" value="{{$admin->alamat_asal}}">
                </div>

                <div class="form-group">
                  <label>Alamat Surabaya:</label>
                  <input type="text" class="form-control" name="addsby" value="{{$admin->alamat_surabaya}}">
                </div>

                <div class="form-group">
                  <label>Agama:</label>
                  <input type="text" class="form-control" name="agama" value="{{$admin->agama}}">
                </div>

                <div class="form-group">
                  <label>Motivasi:</label>
                  <input type="text" class="form-control" name="motivasi" value="{{$admin->motivasi}}">
                </div>
              <!-- /.form-group -->
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div> -->
      </div>
      <!-- /.box -->
    @stop
