@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Menambahkan Peserta LBE {{$namalab}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST">
                <!-- text input -->
                <!-- <input type="hidden" name="id_lab" value=""> -->
                <div class="form-group">
                  <label>Tambahkan daftar mahasiswa yang akan mengikuti LBE di {{$namalab}}.</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <select class="form-control select2" multiple="multiple" name="mhs[]" style="width: 100%;">
                    @foreach($mahasiswa as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>
                    @endforeach
                  </select>
                  <!-- <script type="text/javascript">
                    $(".js-example-basic-multiple").select2();
                  </script>
                  <select class="js-example-basic-multiple" multiple="multiple" name="mhs[]">
                    @foreach($mahasiswa as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>
                    @endforeach
                  </select> -->
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
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
