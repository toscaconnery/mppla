<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="{{url('')}}/timer/favicon.ico">
        <title>SI Laboratorium</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{url('')}}/timer/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{url('')}}/timer/css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="{{url('')}}/timer/css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{url('')}}/timer/css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{url('')}}/timer/css/owl.carousel.css">
        <link rel="stylesheet" href="{{url('')}}/timer/css/owl.theme.css">
        <link rel="stylesheet" href="{{url('')}}/timer/css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{url('')}}/timer/css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{url('')}}/timer/css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="{{url('')}}/timer/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="{{url('')}}/timer/js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="{{url('')}}/timer/js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="{{url('')}}/timer/js/wow.min.js"></script>
        <!-- slider js -->
        <script src="{{url('')}}/timer/js/slider.js"></script>
        <script src="{{url('')}}/timer/js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="{{url('')}}/timer/js/main.js"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <!-- <div class="navbar-brand">
                        <a href="index.html" >
                            <img src="{{url('')}}/timer/images/logo.png" alt="">
                        </a>
                    </div> -->
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                    @if(Auth::check())
                                        {{ Auth::user()->name }}
                                    @endif
                                </a>
                            </li>
                            <li><a href="{{url('')}}/">Home</a></li>
                            <li><a href="#works">Laboratorium</a></li>
                            @if(Auth::check())
                                @if(Auth::user()->is_admin == 1)
                                    <li><a href="{{url('')}}/index-admin">Dashboard</a></li>
                                @else
                                    <li><a href="{{url('')}}/lihat-tugas-lbe">Dashboard</a></li>
                                @endif
                            @endif
                            <li><a href="{{url('')}}/lakukan-reservasi-laboratorium">Reservasi</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('')}}/logout">Logout</a></li>
                            @else
                                <li><a href="{{url('')}}/login">Login</a></li>
                                <li><a href="{{url('')}}/register">Register</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
         <!--==================================================
            Slider Section Start
            ================================================== -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                {{$laboratorium->nama_lab}}
                                </h2>

                                <p>
                                    {{$laboratorium->deskripsi_lab}}
                                </p>
                                @if(Auth::check())
                                    @if(Auth::user()->is_admin and Auth::user()->id_lab == $laboratorium->id)
                                    <a href="{{url('')}}/edit-deskripsi-laboratorium/{{$laboratorium->id}}"><span>Edit deskripsi</span></a>
                                    @endif
                                @endif
                                
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                @if($laboratorium->gambar)
                                <img src="{{url('')}}/{{$laboratorium->gambar}}">
                                @else
                                <img src="{{url('')}}/timer/images/about/about.jpg" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            
             <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer" style="background-color: #02bdd5;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="copyright">Copyright: <span>5114100017-5114100061-5114100702</span> . SI Laboratorium Teknik Informatika</p>
                        </div>               
                    </div>
                </div>
            </footer>
        </body>
    </html>