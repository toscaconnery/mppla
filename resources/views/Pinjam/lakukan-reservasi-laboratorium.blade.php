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
  
  <body class="skin-blue sidebar-mini">
  <div class="wrapper">

    
  </div>
  <!-- Left side column. contains the logo and sidebar -->
  <header class="main-header">
      <!-- Logo -->
      
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- Notifications: style can be found in dropdown.less -->
            <!-- Tasks: style can be found in dropdown.less -->
            <!-- User Account: style can be found in dropdown.less -->
            
              </ul>
            </li>
            </ul>
            <!-- Control Sidebar Toggle Button -->
        </div>
      </nav>
    </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="row">
      <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Fasilitas Laboratorium</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="POST">

                <!-- text input -->
                <div class="form-group">
                  <label>Nama Laboratorium:</label>
                  <select name="id_lab">
                    @foreach ($laboratorium as $data)
                    <option value="{{$data->id}}">{{$data->nama_lab}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Lengkap:</label>
                  <input type="text" name="peminjam" class="form-control" >
                </div>
                <div class="form-group">
                  <label>No. Telepon:</label>
                  <input type="text" name="no_hp" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <input type="text" name="email" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Keperluan:</label>
                  <input type="text" name="keperluan" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Tanggal:</label>
                  <input type="date" name="tanggal" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Jam Mulai:</label>
                  <input type="time" name="jam_mulai"  class="form-control" >
                </div>

                <div class="form-group">
                  <label>Jam Selesai:</label>
                  <input type="time" name="jam_selesai"  class="form-control" >
                </div>


                

                <input type="hidden" name="_token" value="{{csrf_token()}}">


                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Pinjam</button>
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
