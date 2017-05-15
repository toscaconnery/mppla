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
                <div class="form-group">
                  <label>Pilih Laboratorium</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <br>
                  <select name="id_lab">
                    @foreach($laboratorium as $list)
                      <option value="{{$list->id}}">{{$list->nama_lab}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama dosen</label>
                  <br>
                  <select name="id_dosen">
                    @foreach($dosen as $list)
                      <option value="{{$list->id}}">{{$list->nama}}</option>
                    @endforeach
                  </select>
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

