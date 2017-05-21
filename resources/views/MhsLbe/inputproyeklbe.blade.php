@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-title">
              Input Proyek LBE
            </div>
            <div class="box-body">
            @if($isadmin)
              <form role="form" action="" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <label>Nama proyek</label>
                  <br>
                  <input type="text" name="nama_proyek">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <br>
                  <textarea name="keterangan" rows="15"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn button-primary">Save</button>
                </div>
              </form>
            @else
              <h3>Anda tidak memiliki hak untuk mendaftarkan proyek LBE.</h3>
            @endif
            </div>
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

