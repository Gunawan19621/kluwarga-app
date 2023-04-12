<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/amezia/vertical/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Sep 2018 09:28:59 GMT -->

<head>
    @include('dashboard.layouts.link')
</head>

<body>
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span><img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm" /> </span><span><img
                        src="assets/images/logo.png" alt="logo-large" class="logo-lg" /></span>
            </a>
        </div>
        <!-- END LOGO -->

        <!-- Navbar -->
        @include('dashboard.layouts.navbar')
        <!-- end navbar-->

    </div>
    <!-- Top Bar End -->
    <div class="page-wrapper">

        <!-- Left Sidenav -->
        @include('dashboard.layouts.left-sidebar')
        <!-- end left-sidenav-->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container -->
            <footer class="footer text-center text-sm-left">
                &copy; 2018 Amezia <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
            </footer>
        </div>


        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    <!-- jQuery  -->
    @include('dashboard.layouts.script')
</body>
<!-- Mirrored from themesbrand.com/amezia/vertical/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Sep 2018 09:33:55 GMT -->

</html>
