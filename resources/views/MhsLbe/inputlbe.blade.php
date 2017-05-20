@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">

          @if(!$adalbe)
            <!-- /.box-header -->
            <div class="box-body">
              <h3 class="box-title">Laboratorium {{$namalab}} belum mempunyai LBE.</h3>
              <form role="form" action="" method="POST">
                {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>ID Lab</label>
                </div>
                  <!-- <input type="hidden" name="id_lab" value=""> -->
                <!-- textarea -->
                <div class="form-group">
                  <label>Apa yang akan dibuat dalam LBE kali ini?</label>
                  <textarea class="form-control" rows="15" name="deskripsi"></textarea>
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          @elseif($adalbe)
            <div class="box-header with-border">
              <h3 class="box-title">Laboratorium {{$namalab}} telah memiliki LBE</h3>
            </div>
            <div class="box-body">
              <p>{{$data_lbe->deskripsi}}</p>
              <br>
              <p>created at: {{$data_lbe->created_at}}</p>
            </div>
          @endif
            
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

