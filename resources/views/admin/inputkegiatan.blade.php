
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
              <form role="form" action=" " method="POST">
                <!-- text input -->
                <div class="form-group">
                  <!-- <label>ID Lab</label> -->
                  <!-- <select name="id_lab">
                    @foreach($id_lab as $list)
                      <option value="{{$list->id}}">{{$list->nama_lab}}</option>
                    @endforeach
                  </select> -->
                  <input type="hidden" name="id_lab" value="{{ $id_lab }}">
                </div>


                  <!-- <input type="hidden" name="id_lab" value=""> -->
                <div class="form-group">
                  <label>Judul</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" class="form-control" name="judul" placeholder="Judul">
                </div>

                <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" name="tgl" id="datepicker">
                  </div>
                  <!-- /.input group -->
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Kegiatan</label>
                  <textarea class="form-control" rows="5" name="kegiatan" placeholder="Deskripsi..."></textarea>
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

