@extends('master.master')
@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label>Nama Laboratorium</label>
                  <input type="text" class="form-control" name="nama_lab">
                </div>
                <div class="form-group">
                  <label>Deskripsi Laboratorium</label>
                  <textarea name="deskripsi_lab" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label>Reservasi</label><br>
                  <input type="radio" name="reservasiable" value="1"> Bisa direservasi<br>
                  <input type="radio" name="reservasiable" value="0"> Tidak bisa direservasi<br>
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
