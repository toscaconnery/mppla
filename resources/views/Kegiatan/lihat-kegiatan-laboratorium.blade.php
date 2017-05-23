@extends('master.master')

@section('content')

      <div class="row">
        <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <!-- /.box-header -->

            <div class="box-body">
              <h3>Kegiatan {{$laboratorium->nama_lab}}</h3>
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>Nama Kegiatan</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                </tr>
                @php
                  $x = 1;
                @endphp
                @foreach($kegiatan as $data)
                <tr>
                  <td>{{$x++}}</td>
                  <td>{{$data->nama_kegiatan}}</td>
                  <td>{{$data->tanggal}}</td>
                  <td>{{$data->jam_mulai}} - {{$data->jam_selesai}}</td>
                </tr>
                @endforeach
              </table>
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
