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
                                    <li><a href="{{url('')}}/lihattugas">Dashboard</a></li>
                                @endif
                            @endif
                            <li><a href="service.html">Reservasi</a></li>
                            @if(Auth::check())
                                <li><a href="#">Logout</a></li>
                            @else
                                <li><a href="{{url('')}}/login">Login</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
         <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <br>
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">LABORATORIUM PEMROGRAMAN</h1>
                        <!-- <p class="wow fadeInDown" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
                        </p> -->
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Pelatihan Web</h4>
                                    <p>Pelatihan ini dilaksanakan pada tanggal 20 Mei 2015 dan ditujukan untuk mahasiswa TC angkatan 2014.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Maintenance</h4>
                                    <p>Agar fasilitas lab selalu terjaga, maka diadakan maintenance rutin dengan mengecek PC dan bersih-bersih.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Sesi Lab</h4>
                                    <p>LP biasa digunakan untuk tempat sesi lab dasar pemrograman dan struktur data.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Jalan-Jalan</h4>
                                    <p>Beberapa waktu lalu, admin-admin LP rekreasi ke Bromo.</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-keypad-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Kegiatan 5</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-barcode-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Kegiatan 6</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section> <!-- /#feature -->
            
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