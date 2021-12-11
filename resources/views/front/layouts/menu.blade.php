<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <div id="logo">
        <a href="{{route('front.index')}}">
            <img src="{{asset('/assets/Front/img/cblogo.png')}}" width="100" height="auto" alt="" class="logo_normal">
            <img src="{{asset('/assets/Front/img/cblogo.png')}}" width="50" height="auto" alt="" style="margin-top:-50px;" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        @guest('web')
            <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
        @endguest
        @auth('web')
            <li class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ucfirst(Auth::user()->name)}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>Dashboard</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-edit font-size-16 align-middle me-1"></i> <span>Edit Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-building font-size-16 align-middle me-1"></i> <span>Room Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span>Change password</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <!-- <li><a href="{{route('front.user.dashboard')}}" title="Dashboard"><i class="icon-user"></i>Dashboard</a></li> -->
        @endauth
            <li><a href="{{route('front.wishlist')}}" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="{{route('front.index')}}">Home</a></span>

            </li>
            <li><span><a href="{{route('front.hotel_list')}}">Hotels</a></span>

            </li>
            <li><span><a href="{{route('front.hotel_list')}}">Eat &amp; Drink</a></span>

            </li>
            <li><span><a href="{{route('front.about_us')}}">About US</a></span></li>
            <li><span><a href="{{route('front.help')}}">Help</a></span></li>
            <li><span><a href="{{route('front.faq')}}">FAQ</a></span></li>
            <li><span><a href="{{route('front.contact_us')}}">Contact US</a></span></li>
        </ul>
    </nav>
</header>
<!-- /header -->