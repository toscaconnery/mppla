<header class="main-header">
  <!-- Logo -->
  <a href="{{url('')}}/index-admin" class="logo" style="background-color: #01aec4;">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>SI</b>Lab</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>Lab</span> <!--nanti pake nama lab dari database-->
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" style="background-color: #02bdd5;">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{url('')}}/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">
              @if(Auth::check())
                  {{ Auth::user()->name }}
              @endif
            </span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header" style="background-color: #02bdd5;">
              <img src="{{url('')}}/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

              <p>
                @if(Auth::check())
                  {{ Auth::user()->name }}
                @endif
                <small>Teknik Informatika</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                @if(Auth::check())
                <a href="{{url('')}}/profil/{{Auth::user()->id}}" class="btn btn-default btn-flat">Profile</a>
                @endif
              </div>
              <div class="pull-right">
                @if(Auth::check())
                <a href="{{url('')}}/logout" class="btn btn-default btn-flat">Sign out</a>
                @else
                <a href="{{url('')}}/login" class="btn btn-default btn-flat">Sign in</a>
                @endif
              </div>
            </li>
          </ul>
        </li>
        </ul>
        <!-- Control Sidebar Toggle Button -->
    </div>
  </nav>
</header>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="background-color: #017382;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('')}}/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>@if(Auth::check())
              {{ Auth::user()->name }}
           @endif
        </p>
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
      <li class="header" style="background-color: #017382; color: white;">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i> <span>Laboratorium</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('')}}/list-laboratorium"><i class="fa fa-circle-o"></i> Daftar Laboratorium</a></li>
          @if(Auth::check())
          <li><a href="{{url('')}}/edit-deskripsi-laboratorium/{{Auth::user()->id_lab}}"><i class="fa fa-circle-o"></i> 
          @endif
            Deskripsi
          </a></li>
          <li><a href="{{url('')}}/input-kegiatan"><i class="fa fa-circle-o"></i> Input Kegiatan</a></li>
          <li><a href="{{url('')}}/lihat-kegiatan"><i class="fa fa-circle-o"></i> Daftar Kegiatan</a></li>
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
          <li><a href="{{url('')}}/tambahkan-proyek-lbe"><i class="fa fa-circle-o"></i> Input Proyek</a></li>
          <li><a href="{{url('')}}/input-tugas-lbe"><i class="fa fa-circle-o"></i> Beri Penugasan</a></li>
          <li><a href="{{url('')}}/listtugas"><i class="fa fa-circle-o"></i> Daftar Tugas</a></li>
          <li><a href="{{url('')}}/lihat-progress-lbe"><i class="fa fa-circle-o"></i> Progress</a></li> <!-- donlot tugas yg diupload-->
          <li><a href="#"><i class="fa fa-circle-o"></i> Modul LBE</a></li>
          <li><a href="{{url('')}}/tambahkan-mahasiswa-lbe"><i class="fa fa-circle-o"></i> Input Peserta</a></li>
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
          <li><a href="{{url('')}}/list-administrator"><i class="fa fa-circle-o"></i> List Admin</a></li>
          <li><a href="{{url('')}}/inputadmin"><i class="fa fa-circle-o"></i> Tambah Admin</a></li>
          <li><a href="{{url('')}}/list-user"><i class="fa fa-circle-o"></i> Status Admin</a></li>
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
          <li><a href="{{url('')}}/list-fasilitas-laboratorium"><i class="fa fa-circle-o"></i> List Fasilitas</a></li>
          <li><a href="{{url('')}}/tambahkan-fasilitas-laboratorium"><i class="fa fa-circle-o"></i> Tambah Data Fasilitas</a></li>
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
          <li><a href="{{url('')}}/lihat-semua-jadwal-reservasi-laboratorium"><i class="fa fa-circle-o"></i> 
            List Peminjaman
          </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-child"></i> <span>Dosen</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('')}}/list-dosen"><i class="fa fa-circle-o"></i> List Dosen</a></li>
          <li><a href="{{url('')}}/tambahkan-dosen"><i class="fa fa-circle-o"></i> Tambah Dosen</a></li>
          <li><a href="{{url('')}}/tambahkan-dosen-laboratorium"><i class="fa fa-circle-o"></i> Tambah Dosen Lab</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-child"></i> <span>User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('')}}/lihat-user"><i class="fa fa-circle-o"></i> List User</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

