@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Modul LBE</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST" enctype="multipart/form-data">
                <!-- text input -->
                <div class="form-group">
                  <label>Silahkan input modul untuk {{$nama_lab}}</label>
                </div>
                  <!-- <input type="hidden" name="id_lab" value=""> -->
                <div class="form-group">
                  <label>Judul Modul</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" class="form-control" name="judul" placeholder="Judul">
                </div>

                <div class="form-group">
                  <label>Pilih Proyek Lab Yang Sedang Dikerjakan</label>
                  <br>
                  <select name="id_proyek">
                    @foreach($proyek as $proyek)
                      <option value="{{$proyek->id}}">{{$proyek->nama_proyek}}</option>
                    @endforeach
                  </select>
                </div>

                <!-- file input -->
                <div class="form-group">
                  <label for="modul">Silahkan pilih file modul untuk diupload.</label>
                  <input type="file" id="modul" name="berkas">
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Upload</button>
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

