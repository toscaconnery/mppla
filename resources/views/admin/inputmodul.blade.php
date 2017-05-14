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
              <form role="form" action=" " method="POST">
                <!-- text input -->
                <div class="form-group">
                  <label>ID Lab</label>
                  <select name="id_lab">
                    @foreach($id_lab as $list)
                      <option value="{{$list->id}}">{{$list->nama_lab}}</option>
                    @endforeach
                  </select>
                </div>
                  <!-- <input type="hidden" name="id_lab" value=""> -->
                <div class="form-group">
                  <label>Judul Modul</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" class="form-control" name="judul" placeholder="Judul">
                </div>
                <!-- file input -->
                <div class="form-group">
                  <label for="modul">File input</label>
                  <input type="file" id="modul">
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

