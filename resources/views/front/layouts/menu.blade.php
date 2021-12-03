<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <div id="logo">
        <a href="{{route('front.index')}}">
            <img src="{{asset('/assets/Front/img/cblogo.png')}}" width="100" height="auto" alt="" class="logo_normal">
            <img src="{{asset('/assets/Front/img/cblogo.png')}}" width="50" height="auto" alt="" style="margin-top:-50px;" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">

        <li><a href="#" id="sign-in" class="login" title="Sign In">Sign In</a></li>
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