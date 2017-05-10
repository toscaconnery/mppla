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
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('')}}/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('')}}/admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('')}}/admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('')}}/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('')}}/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('')}}/admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('')}}/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('')}}/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
            <li><a href="{{url('')}}/inputkegiatan"><i class="fa fa-circle-o"></i> Input Kegiatan</a></li>
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
            <li><a href="{{url('')}}/listadmin"><i class="fa fa-circle-o"></i> List Admin</a></li>
            <li><a href="{{url('')}}/inputadmin"><i class="fa fa-circle-o"></i> Input Admin</a></li>
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
            <li><a href="{{url('')}}/listfasil"><i class="fa fa-circle-o"></i> List Fasilitas</a></li>
            <li><a href="{{url('')}}/inputfasil"><i class="fa fa-circle-o"></i> Input Fasilitas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-calendar-minus-o"></i> <span>Peminjaman Lab</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('')}}/listpeminjaman"><i class="fa fa-circle-o"></i> List Peminjaman</a></li>
            <li><a href="{{url('')}}/verifpeminjaman"><i class="fa fa-circle-o"></i> Verifikasi Peminjaman</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title></title>
<link rel="icon" href="../img/LP2.png">
<script type="text/javascript">
(function titleScroller(text) {
    document.title = text;
    setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
    }, 750);
}(" Laboratorium Pemrograman 2 Info Center "));
</script>
<!-- Bootstrap Core CSS -->
<!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Custom CSS -->
<!-- <link href="../css/heroic-features.css" rel="stylesheet">   <script type="text/javascript">
   function cekRuang(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            if(xhttp.readyState==4 && xhttp.status==200){
                $all = JSON.parse(xhttp.responseText);
                var cont = Object.keys($all["kegiatan"]).length;
                if(cont>0){
                    $isiHtml="";
                    for(i=0; i<cont; i++){
                        $mulai=$all["kegiatan"][i]["waktu_mulai"];
                        $selesai=$all["kegiatan"][i]["waktu_selesai"];
                        $kegiatan=$all["kegiatan"][i]["nama_kegiatan"];
                        $isiHtml=$isiHtml+"<tr><td>"+$mulai+" - "+$selesai+"</td><td>"+$kegiatan+"</tr>";
                    }
                    document.getElementById("daftar").innerHTML=$isiHtml;
                }else{
                    document.getElementById("daftar").innerHTML="<tr><td>-</td><td>-</td></tr>";
                }
            }
        };
        xhttp.open("get", "/reservasi/Laboratorium%20Pemrograman%202/"+document.getElementById("tanggal").value, true);
        xhttp.send();
    }
   </script>
</head> -->

<body>
    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:rgb(0,40,80);">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="background-color:">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index"><img src="../img/lp2-white.png" style="width:20px;"></a>
            <a class="navbar-brand" href="/index">Home</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/reservasi">Reservation Schedule</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/login/admin">ADMIN</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>    <!-- Page Content -->
    <div class="container">
        <a href="/pinjam" class="btn btn-primary btn-large">Reservation Form</a>
        <hr>
         <div class="row">
            <div class="col-lg-5">
            <!-- Blog Search Well -->
                <div class="well">
                    <h4>Pick for daily event</h4>
                    <div class="input-group" style="width:80%;" onchange="cekRuang()">
                        <input name="tanggal" id="tanggal" type="date" class="form-control" style="min-width:250px; width:100%;" autocomplete="false">
                    </div>
                    <!-- /.input-group -->
                </div>
            </div>
            <div class="col-lg-7">
            <!-- Blog Search Well -->
                <div class="well">
                <h3>Daily Schedule</h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Event</th>
                            </tr>
                        </thead>
                        <tbody id="daftar">
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8">
                <h3>Routine Schedule This Week</h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Event</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody id="daftar">
                                                                                            <tr>
                                    <td>Monday</td>
                                    <td>12:30:00 - 14:59:00</td>
                                    <td>MPPL-D</td>
                                    <td>Every 7 days<td>
                                </tr>
                                                                <tr>
                                    <td>Monday</td>
                                    <td>19:00:00 - 21:00:00</td>
                                    <td>Sesilab Strukdat F</td>
                                    <td>Every 7 days<td>
                                </tr>
                                                                <tr>
                                    <td>Tuesday</td>
                                    <td>09:30:00 - 11:59:00</td>
                                    <td>PBO-A</td>
                                    <td>Every 7 days<td>
                                </tr>
                                                                <tr>
                                    <td>Tuesday</td>
                                    <td>12:30:00 - 14:59:00</td>
                                    <td>Struktur Data - E</td>
                                    <td>Every 7 days<td>
                                </tr>
                                                                <tr>
                                    <td>Wednesday</td>
                                    <td>07:00:00 - 12:00:00</td>
                                    <td>MBD A - E</td>
                                    <td>Every 7 days<td>
                                </tr>
                                                                <tr>
                                    <td>Wednesday</td>
                                    <td>15:30:00 - 17:59:00</td>
                                    <td>Teknik Pengembangan Game </td>
                                    <td>Every 7 days<td>
                                </tr>
                                                                <tr>
                                    <td>Thursday</td>
                                    <td>15:00:00 - 18:00:00</td>
                                    <td>Pelatihan Laravel</td>
                                    <td>Every 1 days<td>
                                </tr>
                                                                <tr>
                                    <td>Friday</td>
                                    <td>08:00:00 - 10:30:00</td>
                                    <td>Pemrograman Web</td>
                                    <td>Every 7 days<td>
                                </tr>
                                                                                    </tbody>
                    </table>
                </div>
            </div>
        </div>
            
        <hr>
        <!-- Footer -->
        <footer>
    <div class="row">
        <div>
            <h4 class="text-center">Copyright &copy; Laboratorium Pemrograman 2016 Informatika ITS 2016<br><img src="../img/its-perisai-biru.png" style="height:28px;"> <img src="../img/if.png" style="height:28px;"> <img src="../img/lp2.png" style="height:28px;"></h4>
        </div>
    </div>
</footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
