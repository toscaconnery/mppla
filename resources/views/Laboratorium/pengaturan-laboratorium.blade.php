@extends('master.master')
@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Laboratorium {{$laboratorium->nama_lab}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST">
                <div class="form-group">
                  <label>Reservasi</label><br>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="radio" name="reservasiable" value="1" {{$laboratorium->reservasiable == 1 ? "checked=\"checked\"" : "" }}>Bisa direservasi<br>
                  <input type="radio" name="reservasiable" value="0" {{$laboratorium->reservasiable == 0 ? "checked=\"checked\"" : "" }}>Tidak bisa direservasi<br>
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

