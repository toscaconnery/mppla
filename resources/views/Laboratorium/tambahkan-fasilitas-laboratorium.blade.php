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
                  <label>{{$laboratorium->nama_lab}}</label>
                  <input type="hidden" name="id_lab" value="{{$laboratorium->id}}">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Fasilitas:</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" class="form-control" name="nama_fasil" placeholder="Nama Fasilitas">
                </div>

                <!-- Date -->
                <div class="form-group">
                  <label>Tahun Masuk:</label>
                  <input type="number" class="form-control" name="tahun_masuk" placeholder="2000">
                </div>

                <div class="form-group">
                  <label>Jumlah:</label>
                  <input type="number" class="form-control" name="jumlah" placeholder="1">
                </div>

                 <div class="form-group">
                  <label>Kondisi:</label>
                  <select name="kondisi">
                    <option value="Sangat baik">Sangat baik</option>
                    <option value="Baik">Baik</option>
                    <option value="Kurang baik">Kurang baik</option>
                    <option value="Rusak">Rusak</option>
                  </select>
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