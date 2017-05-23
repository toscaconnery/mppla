@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Kegiatan Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST">
                <!-- text input -->
                <!-- <input type="hidden" name="id_lab" value=""> -->
                <div class="form-group">
                  <label>Nama Dosen</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label>NIP Dosen</label>
                  <input type="text" class="form-control" name="nip" placeholder="NIP">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="lecturer@email.com">
                </div>
                <div class="form-group">
                  <label>Nomor HP</label>
                  <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Tambah Dosen</button>
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
