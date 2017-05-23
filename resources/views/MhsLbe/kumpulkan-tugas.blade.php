@extends('master2.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Submit Progres Tugas LBE</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <!-- file input -->
                <div class="form-group">
                  <label for="modul">Silahkan pilih tugas yang telah Anda kerjakan untuk diupload.</label>
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

<script>
  //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd'
      autoclose: true
    });
</script>
