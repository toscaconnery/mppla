<header class="main-header">
  <!-- Logo -->
  <a href="{{url('')}}/index-admin" class="logo" style="background-color: #01aec4;">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>SI</b>Lab</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Mahasiswa</b>LBE</span> <!--nanti pake nama lab dari database-->
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
          <i class="fa fa-television"></i> <span>Proyek LBE</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('')}}/lihat-tugas-lbe"><i class="fa fa-circle-o"></i> Lihat Penugasan</a></li>
          <li><a href="{{url('')}}/histori"><i class="fa fa-circle-o"></i> Histori Progress</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-child"></i> <span>Modul LBE</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('')}}/list-modul"><i class="fa fa-circle-o"></i> Unduh Modul</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

