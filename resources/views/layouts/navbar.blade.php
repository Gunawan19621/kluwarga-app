<header id="home">
    <!-- nav -->
    <div id="mainNav" class="navbar navbar-fixed-top affix-top" style="background-color: #fff; padding-bottom: 15px">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-inverse navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle
                                navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                            <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="#"><img style="display:inline-block; margin: 0 6px 7px 0;"
                                widht="30" height="30" class="mx-3"
                                src="{{ asset('assets/assets-landingpage/img/logo-KLUWARGA.png') }}">KLUWARGA</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1"
                        data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
                        <ul class="nav navbar-nav nav-center">
                            <li> <a class="page-scroll" href="{{ route('login') }}">Log In</a></li>
                            <li> <a class="page-scroll" href="{{ route('register') }}">Sign Up</a> </li>
                        </ul>
                        <!-- /.navbar-collapse -->
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            {{-- <a class="btn btn-success getbtn" style="display:blok;" href="{{ route('login') }}">Log In</a> --}}
                            <button type="button" class="btn btn-success getbtn"
                                onclick="window.location.href='/login'">Log In</button>
                            <button style="background-color:transparent; color:green;" type="button"
                                class="btn btn-success getbtn" onclick="window.location.href='/register'">Sign
                                Up</button>
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
