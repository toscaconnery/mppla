<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Laboratorium | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{url('')}}/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{url('')}}/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{url('')}}/admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('')}}/admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{url('')}}/admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{url('')}}/admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('')}}/admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('')}}/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('')}}/admin/dist/css/skins/_all-skins.min.css">
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('')}}/index-admin" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LP2</span> <!--nanti pake nama lab dari database-->
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- Notifications: style can be found in dropdown.less -->
              <!-- Tasks: style can be found in dropdown.less -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{url('')}}/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Nafia Rizky Yogayana</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{url('')}}/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                    <p>
                      Nafia Rizky Yogayana
                      <small>Teknik Informatika 2014</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- Control Sidebar Toggle Button -->
          </div>
        </nav>
      </header>
    </div>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{url('')}}/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Nafia Rizky Yogayana</p>
            <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
          </div>
        </div>
        <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Laboratorium</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('')}}/inputdeskripsi"><i class="fa fa-circle-o"></i> Deskripsi</a></li>
            <li><a href="inputkegiatan.html"><i class="fa fa-circle-o"></i> Input Kegiatan</a></li>
            <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-television"></i> <span>LBE</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Input Penugasan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Daftar Tugas</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Progress</a></li> <!-- donlot tugas yg diupload-->
            <li><a href="#"><i class="fa fa-circle-o"></i> Modul LBE</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i> <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listadmin.html"><i class="fa fa-circle-o"></i> List Admin</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Input Admin</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Fasilitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listfasil.html"><i class="fa fa-circle-o"></i> List Fasilitas</a></li>
            <li><a href="{{url('')}}/inputfasil"><i class="fa fa-circle-o"></i> Input Fasilitas</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <!-- /.box-header -->

            <div class="box-body">
              <h3>Jadwal Reservasi Laboratorium</h3>
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>Laboratorium</th>
                  <th>Keperluan</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Peminjam</th>
                  <th>No Telepon</th>
                </tr>
                @php
                  $x = 1;
                @endphp
                @foreach($jadwal as $data)
                <tr>
                  <td>{{$x++}}</td>
                  <td>{{$data->nama_lab}}</td>
                  <td>{{$data->keperluan}}</td>
                  <td>{{$data->tanggal}}</td>
                  <td>{{$data->jam_mulai}} - {{$data->jam_selesai}}</td>
                  <td>{{$data->peminjam}}</td>
                  <td>{{$data->no_hp}}</td>
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
</section>
<!-- /.content -->
</div>      

<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.3.8
  </div>
  <strong>Copyright &copy; 5114100017-5114100061-5114100702 .</strong> SI Laboratorium Teknik Informatika
</footer>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{url('')}}/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 --> 
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('')}}/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{url('')}}/admin/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{url('')}}/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{url('')}}/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{url('')}}/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('')}}/admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{url('')}}/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{url('')}}/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('')}}/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{url('')}}/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{url('')}}/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url('')}}/admin/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('')}}/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('')}}/admin/dist/js/demo.js"></script>

<!-- <script>
  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
  </script> -->
</body>
</html>
