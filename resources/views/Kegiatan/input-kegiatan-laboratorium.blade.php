@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Kegiatan {{$laboratorium->nama_lab}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action=" " method="POST">
                <!-- text input -->
                <div class="form-group">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="id_lab" value="{{ $laboratorium->id }}">
                </div>
                <div class="form-group">
                  <label>Nama kegiatan</label>
                  <input type="text" class="form-control" name="nama_kegiatan" placeholder="Judul">
                </div>

                <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" name="tanggal" id="datepicker">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label>Jam mulai</label>
                  <input type="time" name="jam_mulai"  class="form-control" >
                </div>
                <div class="form-group">
                  <label>Jam selesai</label>
                  <input type="time" name="jam_selesai"  class="form-control" >
                </div>
                <div class="form-group">
                  <label>Silahkan deskripsikan kegiatan tersebut :</label>
                  <input type="text" name="deskripsi"  class="form-control" >
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
