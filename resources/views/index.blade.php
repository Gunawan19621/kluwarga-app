@extends('layouts.main')
@section('content')
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
                            <img src="{{ asset('assets/assets-landingpage/images/Apa-itu-keluarga.jpg') }}" alt="feature">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
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
                                mdi-android" style="font-size:40px;"></i>
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
                </div>
            </div>
        </div>
    </section>
@endsection
