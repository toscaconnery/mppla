@extends('master.master')

@section('content')

    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Fasilitas Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action=" " method="POST">

                <div class="form-group">
                  <label>Nama Lab</label>
                  <select name="id_lab">
                    @foreach($id_lab as $list)
                      <option value="{{$list->id}}">{{$list->nama_lab}}</option>
                    @endforeach
                  </select>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Fasilitas:</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" class="form-control" name="fasil" placeholder="Nama Fasilitas">
                </div>

                <!-- Date -->
                <div class="form-group">
                  <label>Tahun Masuk:</label>
                  <input type="text" class="form-control" name="tahun" placeholder="2000">
                </div>

                <div class="form-group">
                  <label>Jumlah:</label>
                  <input type="text" class="form-control" name="jumlah" placeholder="1">
                </div>

                 <div class="form-group">
                  <label>Kondisi:</label>
                  <input type="text" class="form-control" name="kondisi" placeholder="Sangat Baik/Baik/Kurang Baik/Rusak">
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
