<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kluwarga</title>
    <!-- ficon
============================================ -->
    <link rel="shortcut icon" href="{{ asset('assets/assets-landingpage/img/ficon.png') }}">
    <link href="{{ asset('assets/assets-landingpage/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Style CSS
============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/assets-landingpage/css/style.css') }}" type="text/css">
    <style>
        @media only screen and (min-width: 950px) {
            .nav-center {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <!--  Preloader  -->
    <div id="preloader">
        <div id="loading"> </div>
    </div>
    <header id="home">
        <!-- nav -->
        <div id="mainNav" class="navbar navbar-fixed-top affix-top">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-inverse navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle
                                    navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                                <span class="icon-bar"></span> </button>
                            <a class="navbar-brand" href="#"><img
                                    style="display:inline-block; margin: 0 6px 7px 0;" widht="30" height="30"
                                    class="mx-3"
                                    src="{{ asset('assets/assets-landingpage/img/logo-KLUWARGA.png') }}">KLUWARGA</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1"
                            data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
                            <ul class="nav navbar-nav nav-center">
                                <li> <a class="page-scroll" href="{{ route('login') }}">Log In</a></li>
                                <li> <a class="page-scroll" href="#features">Sign Up</a> </li>
                            </ul>
                            <!-- /.navbar-collapse -->
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                {{-- <a class="btn btn-success getbtn" style="display:blok;" href="{{ route('login') }}">Log In</a> --}}
                                <button type="button" class="btn btn-success getbtn"
                                    onclick="window.location.href='/login'">Log In</button>
                                <button style="background-color:transparent; color:green;" type="button"
                                    class="btn btn-success getbtn">Sign Up</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /nav -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="main-header-text animated fadeIn">
                        <div class="col-md-6">
                            <h1 class="wow  bounceInLeft animated">
                                KLUWARGA
                            </h1>
                            <p class="wow  bounceInLeft animated">Kesatuan tetangga, kebersamaan terjaga<br> Dengan
                                Kluwarga, Komunitas menjadi lebih mudah</p>
                            {{-- <a href="#" class="wow  bounceInLeft animated">read more</a> --}}
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/assets-landingpage/img/location.png') }}" alt="header-img"
                                class="wow slideInUp animated" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- about -->
    <section id="about">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="about-text wow  bounceInLeft animated">
                            <h2>Apa itu Kluwarga?</h2>
                            <p>Aplikasi Kluwarga memudahkan pengelolaan lingkungan <br> bertetangga, khususnya terkait
                                dengan
                                data warga, iuran, <br> administrasi, dan berbagai informasi</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        {{-- <div class="about-img wow  bounceInRight animated"> <img src="assets/images/about-img2.png"
                                alt="about-imag" /> </div> --}}
                        <div class="about-img wow  bounceInRight animated"> <img
                                src="{{ asset('assets/assets-landingpage/images/Apa-itu-keluarga.jpg') }}"
                                alt="Apa-itu-kluwarga" /> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <!-- features -->
    <section id="features">
        <div class="features">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="features-img wow  bounceInLeft animated">
                            <img src="{{ asset('assets/assets-landingpage/images/Apa-itu-keluarga.jpg') }}"
                                alt="feature">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        {{-- <div class="features-text">
                            <ul>
                                <li>
                                    <h3>Full Code</h3>
                                    <p>Cronos comes with fully documented HTML, SASS, JS, PHP code, all in a well
                                        organized and structured way.Pellentesque habitant morbi tristique senectus et
                                        netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat
                                        vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                        egestas semper.</p>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="about-text wow  bounceInLeft animated">
                            <h2>Apa itu Kluwarga?</h2>
                            <p>Aplikasi Kluwarga memudahkan pengelolaan lingkungan <br> bertetangga, khususnya
                                terkait
                                dengan
                                data warga, iuran, <br> administrasi, dan berbagai informasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / features -->

    <!-- news -->
    <section id="blog">
        <div class="news">
            <div class="container">
                <div class="title text-center">
                    <h3>Keunggulan dari aplikasi Kluwarga</h3>
                </div>
                <div class="row">
                    {{-- <div class="col-sm-6 col-lg-4">
                        <div class="spicel-features-text wow  bounceInLeft animated">
                            <i class="pe-7s-loop"></i>
                            <div class="services-text-left">
                                <h3>Getting Started</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero asperiores iure acc voluptatum.</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class=" wow fadeIn" data-wow-duration=".3s" data-wow-delay=".2s">
                        <div class="news-img">
                            <img src="{{ asset('assets/assets-landingpage/images/icon-bumi2.png') }}" alt="feature">
                            {{-- <div class="date"><strong>02</strong> Mar</div> --}}
                        </div>
                        <div class="news-text">
                            <h4 class="text-center"><a href="blog-details.html" class="">Geospatial
                                    Technology</a>
                            </h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class=" wow fadeIn" data-wow-duration=".4s" data-wow-delay=".3s">
                        <div class="news-img">
                            <img src="{{ asset('assets/assets-landingpage/images/icon-bumi2.png') }}" alt="feature">
                            {{-- <div class="date"><strong>08</strong> Mar</div> --}}
                        </div>
                        <div class="news-text">
                            <h4 class="text-center"><a href="blog-details.html">Geospatial Technology</a></h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class=" wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                        <div class="news-img">
                            <img src="{{ asset('assets/assets-landingpage/images/icon-bumi2.png') }}" alt="feature">
                            {{-- <div class="date"><strong>10</strong> Mar</div> --}}
                        </div>
                        <div class="news-text">
                            <h4 class="text-center"><a href="blog-details.html">Geospatial Technology</a></h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class=" wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                        <div class="news-img">
                            <img src="{{ asset('assets/assets-landingpage/images/icon-bumi2.png') }}" alt="feature">
                            {{-- <div class="date"><strong>10</strong> Mar</div> --}}
                        </div>
                        <div class="news-text">
                            <h4 class="text-center"><a href="blog-details.html">BGeospatial Technology</a></h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class=" wow fadeIn" data-wow-duration=".5s" data-wow-delay=".4s">
                        <div class="news-img">
                            <img src="{{ asset('assets/assets-landingpage/images/icon-bumi2.png') }}" alt="feature">
                            {{-- <div class="date"><strong>10</strong> Mar</div> --}}
                        </div>
                        <div class="news-text">
                            <h4 class="text-center"><a href="blog-details.html">Geospatial Technology</a></h4>
                            <hr>

                            {{-- <div class="horizontal-rule"></div> --}}
                            {{-- horizontal-rule --}}
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /news -->

    <!-- spicel features -->
    <section id="spicel-features">
        <div class="spicel-features">
            <div class="container">
                <div class="title text-center">
                    <h2>Sempurna untuk administrasi antar tetangga</h2>

                </div>
                <div class="row">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('assets/assets-landingpage/images/Laptop-Clipart-Icon.png') }}"
                                    alt="Laptop-Clipart-Icon" widht="150" height="150">
                                <img src="{{ asset('assets/assets-landingpage/images/laptop-clipart-laptop-icon.png') }}"
                                    alt="laptop-clipart-laptop-icon" widht="200" height="200">
                                <img src="{{ asset('assets/assets-landingpage/images/hp.png') }}" alt="hp"
                                    widht="150" height="150">
                            </div>
                            <div class="col"
                                style="display:flex; justify-content:space-between; margin:auto; width: 250px;">
                                <div>
                                    <i class="mdi
                                mdi-android"
                                        style="font-size:40px;"></i>
                                    <p>Android</p>
                                </div>
                                <div>
                                    <i class="mdi mdi-apple" style="font-size:40px;"></i>
                                    <p>Ios</p>
                                </div>
                                <div>
                                    <i class="mdi mdi-web" style="font-size:40px;"></i>
                                    <p>Web</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <h4>Kompatibel dengan berbagai device</h4>
                    </div>
                    {{-- <div class="col-sm-6 col-lg-4">
                        <div class="spicel-features-text wow  bounceInLeft animated">
                            <i class="pe-7s-loop"></i>
                            <img src="{{ asset('assets/images/Laptop-Clipart-Icon.png') }}" alt="feature">
                            <div class="services-text-left">
                                <h3>Getting Started</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero asperiores iure acc voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="spicel-features-text wow  zoomIn animated">
                            <i class="pe-7s-diamond"></i>
                            <div class="services-text-left">
                                <h3>Web Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero asperiores iure acc voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="spicel-features-text wow  bounceInRight animated">
                            <i class="pe-7s-cash"></i>
                            <div class="services-text-left">
                                <h3>Money Saving</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero asperiores iure acc voluptatum.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- spicel features -->
    <!-- px-bg -->
    {{-- <div class="px-bg-counter">
        <div class="container">
            <div class="row">
                <div data-wow-delay=".3s" class="col-xs-12 col-sm-3 col-md-3 wow fadeInUp  animated">
                    <h2 class="timer" data-to="50" data-speed="10000">$nbsp;</h2> <span>Awards Won</span>
                </div>
                <div data-wow-delay=".4s" class="col-xs-12 col-sm-3 col-md-3 wow fadeInUp  animated">
                    <h2 class="timer" data-to="3968" data-speed="10000">$nbsp;</h2> <span>Line of Code</span>
                </div>
                <div data-wow-delay=".5s" class="col-xs-12 col-sm-3 col-md-3 wow fadeInUp  animated">
                    <h2 class="timer" data-to="50" data-speed="10000">$nbsp;</h2> <span>Clients Worldwide</span>
                </div>
                <div data-wow-delay=".6s" class="col-xs-12 col-sm-3 col-md-3 wow fadeInUp  animated">
                    <h2 class="timer" data-to="86" data-speed="10000">$nbsp;</h2> <span>Projects Delivered</span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /px-bg -->
    <!-- services -->
    {{-- <section id="services">
        <div class="services">
            <div class="container">
                <div class="title text-center">
                    <h2>Our Best Services</h2>
                    <img src="assets/images/h-strip.png" alt="h-strip">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis necessitatibus velit
                        asperiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis necessitatibus
                        velit asperiores.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-text wow slideInUp animated">
                            <i class="pe-7s-timer"></i>
                            <div class="services-text-left">
                                <h3>Getting Started</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero impedit praesentium asperiores iure acc distinctio voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-text wow slideInUp animated">
                            <i class="pe-7s-rocket"></i>
                            <div class="services-text-left">
                                <h3>Super Fast</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero impedit praesentium asperiores iure acc distinctio voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-text wow slideInUp animated">
                            <i class="pe-7s-wallet"></i>
                            <div class="services-text-left">
                                <h3>Save Money</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero impedit praesentium asperiores iure acc distinctio voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-text">
                            <div class="services-text wow slideInUp animated">
                                <i class="pe-7s-cloud"></i>
                                <h3>Cloud Upload</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero impedit praesentium asperiores iure acc distinctio voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-text wow slideInUp animated">
                            <i class="pe-7s-science"></i>
                            <div class="services-text-left">
                                <h3>Proven Technology</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero impedit praesentium asperiores iure acc distinctio voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-text wow slideInUp animated">
                            <i class="pe-7s-like2"></i>
                            <div class="services-text-left">
                                <h3>100% Satisfaction</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quo in animi
                                    laudantium libero impedit praesentium asperiores iure acc distinctio voluptatum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- / services -->
    {{-- <!-- prices -->
    <section id="prices">
        <div class="prices">
            <div class="container">
                <div class="title text-center">
                    <h2>Our Price</h2>
                    <img src="assets/images/h-strip.png" alt="h-strip">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis necessitatibus velit
                        asperiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis necessitatibus
                        velit asperiores.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-4 wow fadeIn" data-wow-duration=".3s" data-wow-delay=".2s">
                        <div class="price-box">
                            <div class="price">
                                <sup>$</sup>
                                <strong>100</strong> / Month
                            </div>
                            <div class="title-box">
                                <h3>STANDARD</h3>
                            </div>
                            <ul>
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>Webmail Suppor</li>
                            </ul>
                            <div class="btn-box">
                                <a href="#">SELECT PLAN</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 wow fadeIn" data-wow-duration=".3s" data-wow-delay=".2s">
                        <div class="price-box active">
                            <div class="price">
                                <sup>$</sup>
                                <strong>149</strong> / Month
                            </div>
                            <div class="title-box">
                                <h3>STANDARD</h3>
                            </div>
                            <ul>
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>Webmail Suppor</li>
                            </ul>
                            <div class="btn-box">
                                <a href="#">SELECT PLAN</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 wow fadeIn" data-wow-duration=".3s" data-wow-delay=".2s">
                        <div class="price-box">
                            <div class="price">
                                <sup>$</sup>
                                <strong>199</strong> / Month
                            </div>
                            <div class="title-box">
                                <h3>STANDARD</h3>
                            </div>
                            <ul>
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>Webmail Suppor</li>
                            </ul>
                            <div class="btn-box">
                                <a href="#">SELECT PLAN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /prices -->
    <!-- /faq -->
    {{-- <section id="contact">
        <div class="faq">

            <div class="container">
                <div class="title text-center">
                    <h2>Start your free trial</h2>
                    <img src="assets/images/h-strip.png" alt="h-strip">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis necessitatibus velit
                        asperiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis necessitatibus
                        velit asperiores.</p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-3">
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="faq-from">
                            <!-- form -->
                            <form name="ajax-form" id="contact-form2"
                                action="https://formsubmit.io/send/90aa5128-c301-47bf-ae81-794fa4c07dda"
                                method="post">
                                <input name="_redirect" id="name1" value="http://zcube.in/beadvices/"
                                    type="hidden">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name"
                                        placeholder="Your name" value="" required="" type="text">
                                </div>
                                <!-- /Form-name -->
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email"
                                        placeholder="Your email" value="" required="" type="email">
                                </div>
                                <!-- /Form-email -->
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="subject"
                                        placeholder="Your subject" value="" required="" type="text">
                                </div>
                                <!-- /Form-subject -->
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required=""></textarea>
                                </div>
                                <!-- /Form Msg -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-custom"
                                                id="send">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /col -->
                                </div>
                                <!-- /row -->
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /faq -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="weight">
                            <h3><a class="page-scroll" href="#home">ABOUT US</a></h3>
                            <ul>
                                <p>Why Integrasia?</p>
                                <p>Training Center</p>
                                <p>Blog</p>
                                <p>Contact</p>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="weight">
                            <h3><a class="page-scroll" href="#home">SERVICES</a></h3>
                            <ul>
                                <p>Mapping and GIS Services</p>
                                <p>OSMAP<br> (One Spirit WebGIS Open Platform)</p>
                                <p>SIOPAS & SIOPAS Plus</p>
                                <p>GeoHR</p>
                                <p>OSLOG <br>(Fleet Management System)</p>
                                <p>OSCARP (Carpooling)</p>
                                <p>OSME & OSME Plus</p>
                                <p>Argisource Data</p>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="weight">
                            <h3><a class="page-scroll" href="#home">PRODUCTS</a></h3>
                            <ul>
                                <p>Satellite</p>
                                <p>UAV</p>
                                <p>RPMA <br>(Random Phasa Multiple Access)</p>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="weight">
                            <h3><a class="page-scroll" href="#home">FOLLOW US</a></h3>
                        </div>
                        <div class="col-md-6">
                            <div class="social-f">
                                <ul>
                                    <li> <a href="#" class="fac"><i class="fa fa-facebook"></i></a> </li>
                                    <li><a href="#" class="twi"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="goo"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="behance"><i class="fa fa-github"
                                                aria-hidden="true"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-lg-3">
                        <div class="weight">
                            <h3>Address</h3>
                            <ul>
                                <li>9443 Indian Pines, Cheesequake, Kansas, 66947-4184, US</li>
                                <li>contact@yourdomaintattoo.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="weight">
                            <h3>Phone</h3>
                            <ul>
                                <li>Phone: +88 (0) 888 0000 000 </li>
                                <li>Fax: +88 (0) 202 0000 888</li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-6 col-lg-3">
                        <div class="weight">
                            <h3>Newslater</h3>
                            <!-- form -->
                            <form name="ajax-form" id="contact-form4"
                                action="https://formsubmit.io/send/90aa5128-c301-47bf-ae81-794fa4c07dda"
                                method="post" class="contact-form  newslater">
                                <div class="form-group">
                                    <input class="form-control" id="email2" name="email" type="email"
                                        placeholder="Your email" value="" required>
                                </div>
                                <!-- /Form-email -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-custom"
                                                id="send2">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /col -->
                                </div>
                                <!-- /row -->
                            </form>
                            <!-- /form -->
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>2022 &copy; Kluwarga </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery
============================================ -->
    <script src="{{ asset('assets/assets-landingpage/js/jquery-3.1.1.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript
============================================ -->
    <script src="{{ asset('assets/assets-landingpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets-landingpage/js/jquery.easing.min.js') }}"></script>
    <!-- baguetteBox -->
    <script src="{{ asset('assets/assets-landingpage/js/baguetteBox.js') }}" async></script>
    <script src="{{ asset('assets/assets-landingpage/js/plugins.js') }}" async></script>
    <!--  countTo JavaScript  -->
    <script src="{{ asset('assets/assets-landingpage/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/assets-landingpage/owl-carousel/owl.carousel.js') }}"></script>
    <!--  wow JavaScript
============================================ -->
    <script src="{{ asset('assets/assets-landingpage/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/assets-landingpage/js/mixitup.min.js') }}"></script>
    <!--  Custom Theme JavaScript
============================================ -->
    <script src="{{ asset('assets/assets-landingpage/js/custom.js') }}"></script>
</body>

</html>
