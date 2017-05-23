@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Masukkan Proyek LBE</h3>
            </div>
            <div class="box-body">
            @if($isadmin)
              <form role="form" action="" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <label>Nama proyek</label>
                  <input type="text" class="form-control" name="nama_proyek">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" rows="15"></textarea>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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

