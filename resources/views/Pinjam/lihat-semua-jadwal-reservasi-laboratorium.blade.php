@extends('master.master')

@section('content')

    <div class="row" >
            <div class="col-md-8" >
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="font-weight: bold;">List Peminjaman</h3>  
                  <!-- ntar nama labnya diambil dari database -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No</th>
                      <th>Laboratorium</th>
                      <th>Nama Peminjam</th>
                      <th>Kegiatan</th>
                      <th>Tanggal</th>
                      <th>Waktu</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    @php
                      $x = 1;
                    @endphp
                    @foreach($jadwal as $data)
                      <td>{{$x++}}</td>
                      <td>{{$data->nama_lab}}</td>
                      <td>{{$data->peminjam}}</td>
                      <td>{{$data->keperluan}}</td>
                      <td>{{$data->tanggal}}</td>
                      <td>{{$data->jam_mulai}} - {{$data->jam_selesai}}</td>
                      <td>
                        @if($data->status_verif == 0)
                          Waiting for response
                        @elseif($data->status_verif == 1)
                          Accepted
                        @elseif($data->status_verif == 2)
                          Declined
                        @endif
                      </td>
                      <td>
                        @if($data->status_verif == 0)
                          <a href="{{url('')}}\accept-peminjaman-laboratorium\{{$data->id}}"><button>Accept</button></a>
                          <a href="{{url('')}}\decline-peminjaman-laboratorium\{{$data->id}}"><button>Decline</button></a>
                        @elseif($data->status_verif == 1)
                          <a href="{{url('')}}\decline-peminjaman-laboratorium\{{$data->id}}"><button>Decline</button></a>
                        @elseif($data->status_verif == 2)
                          <a href="{{url('')}}\accept-peminjaman-laboratorium\{{$data->id}}"><button>Accept</button></a>
                        @endif
                      </td>
                    @endforeach

                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

        @stop