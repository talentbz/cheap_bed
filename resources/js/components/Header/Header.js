import React from 'react';
import { Link, useHistory } from 'react-router-dom';
import imgLogo from '../../../assets/img/cblogo.png';
function Header() {
    return (
        <div className="header menu_fixed">
            <div id="preloader">
                <div data-loader="circle-side"></div>
            </div>
            <div id="logo">
                <Link to="/">
                    <img src={imgLogo} width="100" height="auto" alt="" className="logo_normal"/>
                    {/* <img src={imgLogo} width="50" height="auto" alt="" style="margin-top:-50px;" className="logo_sticky" /> */}
                </Link>
            </div>
            <ul id="top_menu">
                    <li><a href="#sign-in-dialog" id="sign-in" className="login" title="Sign In">Sign In</a></li>
                    <li><a href="{{route('front.wishlist')}}" className="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
            </ul>
            <a href="#menu" className="btn_mobile">
                <div className="hamburger hamburger--spin" id="hamburger">
                    <div className="hamburger-box">
                        <div className="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" className="main-menu">
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
        </div>
    );
}
export default Header;