@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Set Admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{url('')}}/update_jadikan_admin/{{$admin->id}}" method="POST">
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
                  <label>Laboratorium:</label>
                  <select name="id_lab">
                    @foreach($namaLaboratorium as $list)
                      <option value="{{$list->id}}">{{$list->nama_lab}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="box-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-primary">Set as Admin</button>
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
