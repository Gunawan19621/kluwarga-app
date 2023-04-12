        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                {{-- <li class="hidden-sm">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                        href="javascript: void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                        English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16"
                            alt="" /> <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript: void(0);"><span>German </span><img
                                src="assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span>Italian </span><img
                                src="assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span>French </span><img
                                src="assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span>Spanish </span><img
                                src="assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span>Russian </span><img
                                src="assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right"
                                height="14" /></a>
                    </div>
                </li> --}}
                {{-- <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline nav-icon"></i> <span
                            class="badge badge-danger badge-pill noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">Notifications (258)</h6>
                        <div class="slimscroll notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                <p class="notify-details">Your item is shipped<small class="text-muted">It is a long
                                        established fact that a reader will</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a>
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i
                                class="fi-arrow-right"></i></a>
                    </div>
                </li> --}}
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" /> <span
                            class="ml-1 nav-user-name hidden-sm">Gunawan <i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i>
                            Profil Pengguna</a> <a class="dropdown-item" href="#"><i
                                class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i>
                            Settings</a> <a class="dropdown-item" href="#"><i
                                class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        {{-- <a class="dropdown-item"
                            href="route('logout')"onclick="event.preventDefault(); this.closest('form').submit();">>
                            <i class="dripicons-exit text-muted mr-2"></i>
                            Logout</a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="dripicons-exit text-muted mr-2"></i>
                                Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="button-menu-mobile nav-link waves-effect waves-light"><i
                            class="mdi mdi-menu nav-icon"></i></button>
                </li>
                <li class="hidden-sm">
                    <div class="dropdown-menu">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Photoshop </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Visual Studio </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sublime Text 3 </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Phpstorm</a>
                    </div>
                </li>
                <li class="hidden-sm">
                </li>
            </ul>
        </nav>