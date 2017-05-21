@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Input LBE</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if($punya_proyek)
                <form role="form" action=" " method="POST">
                  {{csrf_field()}}
                  <!-- text input -->
                  <div class="form-group">
                    <label>Laboratorium {{$nama_lab}}</label>
                    <h3></h3>
                  </div>
                    <!-- <input type="hidden" name="id_lab" value=""> -->
                  <div class="form-group">
                    <label>Judul Penugasan</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul">
                  </div>

                  <!-- textarea -->
                  <div class="form-group">
                    <label>Deskripsi Tugas</label>
                    <textarea class="form-control" rows="15" name="tugas" placeholder="Penugasan ..."></textarea>
                  </div>

                  <!--Pilih mahasiswa-->
                  <script type="text/javascript">
                    $(".js-example-basic-multiple").select2();
                  </script>
                  <select class="js-example-basic-multiple" multiple="multiple" name="mhs[]">
                    @foreach($mahasiswa as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>
                    @endforeach
                  </select>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              @else
                <h3>{{$nama_lab}} belum memiliki proyek LBE untuk ditambahka tugas. Silahkan tambahkan proyek LBE terlebih dahulu.</h3>
              @endif
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

