@extends('master2.master')

@section('content')

    <div class="row">
      <div class="col-md-8">
          <!-- general form elements disabled -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>List Tugas LBE</b></h3>  
              <!-- ntar nama labnya diambil dari database -->
            </div>
          <!-- <div class="box box-warning">
            <div class="box-title">
              List Tugas LBE
            </div> -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                @php 
                  $x = 1;
                @endphp
                <tr>
                  <th>No.</th>
                  <th>Judul Tugas</th>
                  <th>Detail Tugas</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @foreach($tugas as $data)
                  <tr>
                    <td>{{$x++}}</td>
                    <td>{{$data->judul}}</td>
                    <td>{{$data->tugas}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->deleted_at == NULL ? "-" : $data->deleted_at }}</td>
                    <td>{{$data->deleted_at == NULL ? "Not yet completed" : "Completed"}}</td>
                    <td>
                      @if($data->deleted_at == NULL)
                        <a href="{{url('')}}/kumpulkan-tugas-lbe/{{$data->id}}">Kumpulkan</a>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </table>

            </div>
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

