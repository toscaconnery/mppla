@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data Dosen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" class="form-control" name="nama" value="{{$dosen->nama}}">
                </div>
                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" class="form-control" name="nip" value="{{$dosen->nip}}">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="{{$dosen->email}}">
                </div>
                <div class="form-group">
                  <label>Nomor HP</label>
                  <input type="text" class="form-control" name="no_hp" value="{{$dosen->no_hp}}">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="{{$dosen->alamat}}">
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
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
    
<script>
  //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd'
      autoclose: true
    });
</script>

