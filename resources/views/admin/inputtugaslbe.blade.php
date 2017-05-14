@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Penugasan LBE</h3>
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
                  <label>Judul Penugasan</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" class="form-control" name="judul" placeholder="Judul">
                </div>


                <!-- textarea -->
                <div class="form-group">
                  <label>Deskripsi Tugas</label>
                  <textarea class="form-control" rows="15" name="tugas" placeholder="Penugasan ..."></textarea>
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

