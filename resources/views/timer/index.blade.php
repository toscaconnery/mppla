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
        <link rel="stylesheet" href="{{url('')}}/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{url('')}}/css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="{{url('')}}/css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{url('')}}/css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{url('')}}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{url('')}}/css/owl.theme.css">
        <link rel="stylesheet" href="{{url('')}}/css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{url('')}}/css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{url('')}}/css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="{{url('')}}/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="{{url('')}}/js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="{{url('')}}/js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="{{url('')}}/js/wow.min.js"></script>
        <!-- slider js -->
        <script src="{{url('')}}/js/slider.js"></script>
        <script src="{{url('')}}/js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="{{url('')}}/js/main.js"></script>
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
        
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span style="font-size: 80px;">SELAMAT DATANG</span><br>
                                <span>DI</span><br>
                                <span style="font-size: 60px;">SISTEM INFORMASI LABORATORIUM</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">TEKNIK INFORMATIKA</b>
                                    <b>INSTITUT TEKNOLOGI SEPULUH NOPEMBER</b>
                                    <b>SURABAYA</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <!-- <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                ABOUT ME
                                </h2>
                                <p>
                                    Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University.And scrambled it to make a type specimen book. It has survived not only five centuries
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="{{url('')}}/timer/images/about/about.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="works" class="works">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">LABORATORIUM TEKNIK INFORMATIKA</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Teknik Informatika ITS memiliki {{$jumlah_laboratorium}} laboratorium. Laboratorium ini berfungsi sebagai penunjang bagi <br> mahasiswa dan dosen dalam melaksanakan kegiatan belajar mengajar. Yuk, kita simak apa saja <br> laboratorium yang ada di Teknik Informatika!
                        </p>
                    </div>
                    @foreach($laboratorium as $data)
                    <div class="row">
                        <div class="col-sm-4 col-lg-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" style="width: 360px;" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper" style="width: 360px; height: 360px;">
                                    @if($data->id == 1)
                                    <img src="{{url('')}}/logo-laboratorium/lp.png" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    <!-- <img src="{{url('')}}/{{$data->gambar}}" class="img-responsive" alt="this is a title" > -->
                                    @elseif($data->id == 2)
                                    <img src="{{url('')}}/logo-laboratorium/lpp.png" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @elseif($data->id == 3)
                                    <img src="{{url('')}}/logo-laboratorium/kcvkcv.png" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @elseif($data->id == 4)
                                    <img src="{{url('')}}/logo-laboratorium/ncc.png" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @elseif($data->id == 5)
                                    <img src="{{url('')}}/logo-laboratorium/rpl.png" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @elseif($data->id == 6)
                                    <img src="{{url('')}}/logo-laboratorium/ajk.png" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @elseif($data->id == 7)
                                    <img src="{{url('')}}/logo-laboratorium/igs.jpg" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @elseif($data->id == 8)
                                    <img src="{{url('')}}/logo-laboratorium/alpro1.jpg" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @elseif($data->id == 9)
                                    <img src="{{url('')}}/logo-laboratorium/mi.jpg" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @elseif($data->id == 10)
                                    <img src="{{url('')}}/logo-laboratorium/lab.jpg" style="width: 360px; height: 360px;" class="img-responsive" alt="this is a title" >
                                    @endif
                                    <div class="overlay" style="width: 360px; height: 360px;">
                                        <div class="buttons">
                                            <a target="_blank" href="{{url('')}}/lihat-kegiatan/{{$data->id}}">Kegiatan</a>
                                            <a target="_blank" href="{{url('')}}/deskripsi-laboratorium/{{$data->id}}">Deskripsi</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    {{$data->nama_lab}}
                                </a>
                                </h4>
                                <p>
                                    
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </section> <!-- #works -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== 
            <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offer From Me</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-flask-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
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
                                    <h4 class="media-heading">Well documented.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
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
                                    <h4 class="media-heading">Well documented.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-americanfootball-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Free updates</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-keypad-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Solid Support</h4>
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
                                    <h4 class="media-heading">Simple Installation</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>  /#feature -->
                            
            <!--
            ==================================================
            Call To Action Section Start
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