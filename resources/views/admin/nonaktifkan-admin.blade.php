@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Detail User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{url('')}}/update_nonaktifkan_admin/{{$admin->id}}" method="POST">
                <div class="form-group">
                  <label>Username:</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  {{$admin->name}}
                </div>

                <div class="form-group">
                  <label>Email:</label>
                  {{$admin->email}}
                </div>

                <div class="form-group">
                  <label>Admin:</label>
                  {{$admin->id_lab}}
                </div>

                <div class="box-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-primary">Nonaktifkan Admin</button>
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
