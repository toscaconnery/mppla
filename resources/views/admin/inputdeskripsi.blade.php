@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Deskripsi Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST">
                <!-- text input -->
                {{ csrf_field() }}

                <div class="form-group">
                  <label>ID Lab</label>
                  <select name="id_lab">
                    @foreach($id_lab as $list)
                      <option value="{{$list->id}}">{{$list->nama_lab}}</option>
                    @endforeach
                  </select>
                </div>

                <!-- <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" placeholder="Judul">
                </div> -->

                <!-- textarea -->
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" rows="5" placeholder="Deskripsi..."></textarea>
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