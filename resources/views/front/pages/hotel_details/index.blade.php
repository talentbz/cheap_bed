@extends('front.layouts.index')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/css/lg-fb-comment-box.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/css/lg-transitions.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/img/loading.gif">
    <link href="{{ URL::asset('/assets/Front/pages/Hotel/hotel_detail.css') }}" rel="stylesheet" type="text/css" />
@section('css')
@endsection
@section('title')
    homepage
@endsection
@section('content')
<main>
    <section class="hero_in tours_detail">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Tour detail page</h1>
            </div>
            <span class="magnific-gallery">
                <a href="img/gallery/tour_list_1.jpg" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
                <a href="img/gallery/tour_list_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
                <a href="img/gallery/tour_list_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
            </span>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-9">
                    <div class="hotel-grid-image">
                        <div class="row">
                            <div class="col-sm-4 md-pt">
                                <div class="md-image">
                                    @if(array_key_exists(0, $hotelContents->hotelImages))
                                        <img src="{{$hotelContents->hotelImages[0]->url}}" alt="">
                                    @else
                                        <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                    @endif
                                    @if(array_key_exists(1, $hotelContents->hotelImages))
                                        <img src="{{$hotelContents->hotelImages[1]->url}}" alt="">
                                    @else
                                        <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-8 lg-pt">
                                <div class="lg-image">
                                    @if(array_key_exists(2, $hotelContents->hotelImages))
                                        <img src="{{$hotelContents->hotelImages[2]->url}}" alt="">
                                    @else
                                        <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="sm-image">
                                    @if(array_key_exists(3, $hotelContents->hotelImages))
                                        <img src="{{$hotelContents->hotelImages[3]->url}}" alt="">
                                    @else
                                        <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                    @endif
                                    @if(array_key_exists(4, $hotelContents->hotelImages))
                                        <img src="{{$hotelContents->hotelImages[4]->url}}" alt="">
                                    @else
                                        <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                    @endif
                                    @if(array_key_exists(5, $hotelContents->hotelImages))
                                        <img src="{{$hotelContents->hotelImages[5]->url}}" alt="">
                                    @else
                                        <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                    @endif
                                    @if(array_key_exists(6, $hotelContents->hotelImages))
                                        <img src="{{$hotelContents->hotelImages[6]->url}}" alt="">
                                    @else
                                        <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                    @endif
                                    @if(array_key_exists(7, $hotelContents->hotelImages))
                                        <img src="{{$hotelContents->hotelImages[7]->url}}" alt="">
                                    @else
                                        <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                    @endif
                                    <a href="javascript:onvoid(0)" data-toggle="modal" data-target="#hotelImageModal" class="hotel-modal">
                                        @if(array_key_exists(8, $hotelContents->hotelImages))
                                            <img src="{{$hotelContents->hotelImages[8]->url}}" alt="">
                                        @else
                                            <img src="{{asset('/assets/Front/img/hotel_not_found.png')}}" alt="">
                                        @endif
                                        <p>+{{count($hotelContents->hotelImages)-8}} photos</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /hotel photos -->
                    <div class="hotel-name-sec">
                        <div class="row">
                            <div class="col-md-9">
                                <ul>
                                    <li class="selected-type">{{$hotelContents->hotelRating}}-star Serviced Apartment</li>
                                </ul>
                                <h3>
                                    {{$hotelContents->name}}
                                    <span class="star-rating">
                                        @php
                                            for($i=0; $i<$hotelContents->hotelRating; $i++){
                                                echo '<i class="icon_star"></i>';
                                            }
                                        @endphp
                                    </span>
                                </h3>
                                <p>{{$hotelContents->address}}, {{$hotelContents->city}}, {{$hotelContents->country}}</p>
                            </div>
                            <div class="col-md-3">
                                <div class="hotel-price text-center text-md-right">
                                    <p class="no-price">€ {{round($hotel_price*1.1, 2)}}</p>
                                    <p class="offer-price">€ {{$hotel_price}}</p>
                                    <a href="#room-selection-div" class="btn btn-primary">Choose Room</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /hotel name -->
                    <div class="highlight-sec">
                        <h6>Property Highlights</h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="highlight-div">
                                    <div class="left-sec">
                                    <img src="https://instaetravel.com/trvx-static-asset-files/images/icons/highlight1.png" alt="Hotel Icon">
                                    </div>
                                    <div class="right-sec">
                                    <p><b>Exceptional reputation</b></p>
                                    <!-- <p>Recommended by 80% of guests</p> -->
                                    <p>378 of 418 hotels in Amsterdam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 highlight-brdr-left">
                                <div class="highlight-div">
                                    <div class="left-sec">
                                    <img src="https://instaetravel.com/trvx-static-asset-files/images/icons/highlight2.png" alt="Hotel Icon">
                                    </div>
                                    <div class="right-sec">
                                    <p><b>Very good cleanliness</b></p>
                                    <p>2.5 rating for cleanliness</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="highlight-div highlight-brdr-top">
                                    <div class="left-sec">
                                    <img src="https://instaetravel.com/trvx-static-asset-files/images/icons/highlight3.png" alt="Hotel Icon">
                                    </div>
                                    <div class="right-sec">
                                    <p><b>Very good service</b></p>
                                    <p>3.0 rating for service</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 highlight-brdr-left">
                                <div class="highlight-div highlight-brdr-top">
                                    <div class="left-sec">
                                    <img src="https://instaetravel.com/trvx-static-asset-files/images/icons/highlight4.png" alt="Hotel Icon">
                                    </div>
                                    <div class="right-sec">
                                    <p><b>Very good facilities on premise</b></p>
                                    <p>2.5 facilities on premise</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /hotel highlight -->
                    <div class="amenities-img-sec">
                        <ul>
                            <li>
                                <a>
                                    <div class="icon-div">
                                    <object data="https://travelnext.works/api/public/images/fac_icons_svg_new/WLAN access.svg" type="image/svg+xml" style="width: 20px;height:20px"></object>
                                    </div>
                                </a>
                                <p>WLAN access</p>
                            </li>
                            <li>
                                <a>
                                    <div class="icon-div">
                                    <object data="https://travelnext.works/api/public/images/fac_icons_svg_new/Bicycle.svg" type="image/svg+xml" style="width: 20px;height:20px"></object>
                                    </div>
                                </a>
                                <p>Bicycle</p>
                            </li>
                        </ul>
                    </div>
                    <!-- /amenities section -->

                </div>
                <!-- /hotel details-->
                
                <div class="col-lg-3">
                    <div class="rating-sec">
                        <div class="rating-div">
                            <div class="rating-left">
                                2.5                         
                            </div>
                            <div class="rating-right">
                                <p>
                                    Good                             
                                </p>
                                <small>/5</small>
                            </div>
                        </div>
                    </div>
                    <!-- /rating section -->
                    <div class="map-div">
                        <div class="top-div" data-target="#map-popup" data-toggle="modal">
                            <img src="https://instaetravel.com/trvx-static-asset-files/images/icons/map-view.svg" class="top-img">
                            <img src="https://instaetravel.com/trvx-static-asset-files/images/icons/img-map-pin.svg" class="center-img">
                            <div class="map-text">
                                <h5>SEE A MAP VIEW</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /map section -->
                    <div class="landmark-sec">
                        <h6 class="head"><b>Nearby Landmarks</b></h6>
                        <div class="landmark-div">
                            <p class="main-head"><b>Restaurant</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Pacific Parc                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.99km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Cafe Restaurant Amsterdam                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.72km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Winkel                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.97km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Loving Hut Amsterdam - Vegan House                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.3km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        't Smalle                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.91km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Fuoco Vivo                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.61km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        De Marktkantine                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.97km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Domino's Pizza                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.6km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Foodhallen                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.81km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Brouwerij Troost Westergas                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.06km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Yang Ming Asian Cuisine                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.69km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Floor17                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.9km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Moeders                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.69km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        La Perla                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.76km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Japanese Pancake World                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.8km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Rooster Amsterdam                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.08km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Boca's                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.91km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Vegabond                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.54km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Koffie Ende Koeck                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.98km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Piqniq                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.97km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Yam Yam                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.28km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Chong Hing                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.27km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Pizzeria Michelangelo                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.34km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Moak Pancakes - West (Formerly Mook)                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.56km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Cafe Cook                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.33km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Hap Li Express                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.66km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Studio Westerpark                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.65km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Tonton Club West                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.67km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Rotisserie West                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.55km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Hostaria                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.78km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        De Blaffende Vis                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.79km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Pesca                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.8km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Kinnaree Thai Cuisine                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.81km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Remise47                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.82km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        G's Jordaan                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.83km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        De Reiger                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.84km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Bagels &amp; Beans Bos en Lommer                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.83km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Pizzalina                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.83km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Natuurlijk Smullen                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.88km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        KFC                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.88km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Daalder                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.9km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Bagels &amp; Beans                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.92km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Asian Plaza                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.91km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Spanjer en van Twist                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.98km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Carla's Bistro bij Ons                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.99km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Wen Chow                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.01km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Wilde Westen                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.18km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Suri Kitchen                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.34km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Mehtap                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.37km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Zaal 100                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.4km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        W Xie                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.42km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Mitsos                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.43km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        De Liefde                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.44km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Bar Spek                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.47km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Dophert                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.63km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Chef Sjef                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.34km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Pinsa's                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.66km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Landmark/Attraction</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Westergasfabriek                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.04km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Haarlemmerpoort                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.7km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        The Tourist Salon Boat                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.93km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Bar/Pub</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Café Sound Garden                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.64km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Waterkant Amsterdam                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.89km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        De Nieuwe Anita                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.39km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        De Kat in de Wijngaert                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.79km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        The Breakfast Club                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.81km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Cafe Lowietje                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.68km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Cafe Nol                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.8km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Wester Wijnfabriek                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.07km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        The Frits                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.47km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Café Same Place                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.51km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Public Transport</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Metro-Station Sloterdijk                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.54km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        GVB-Sloterdijk                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.38km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Metro-de Vlugtlaan                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.43km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Amsterdam, de Clercqstraat                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.59km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Museum</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Museum het Schip                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.38km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Anne Frank Huis                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.97km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Amsterdam Tulip Museum                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.92km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Amsterdam Cheese Museum                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.93km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Stedelijk Museum Bureau Amsterdam                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.94km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Electric Ladyland                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.76km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Pianola Museum                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.81km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Food &amp; Drink</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        De Bakkerswinkel                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.19km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Snoepwinkeltje                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.76km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Religious Place</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Westerkerk                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.97km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Noorderkerk                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.98km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Jeruzalemkerk                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.33km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Dance or Nightclub</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Westerunie                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.95km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Warehouse Elementenstraat                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.34km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Coffee/Tea</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Coffeeshop Paradox                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.83km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Lot Sixty One Coffee Roasters                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.96km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Espressofabriek                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.03km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Kattencafe Kopjes                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.37km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Kookkollektief                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        0.34km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Shop</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Boer Geert                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.9km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Theatre, Music &amp; Culture</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Boom Chicago                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.81km                            
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Maloe Melo                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.96km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="landmark-div">
                            <p class="main-head"><b>Sights &amp; Museums</b></p>
                            <ul>
                                <li>
                                    <div class="row">
                                    <div class="col-8">
                                        Kochxbos Gallery Amsterdam                            
                                    </div>
                                    <div class="col-4 text-right pl-0">
                                        1.82km                            
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /landmark section -->
                </div>
            </div>
            <!-- /row -->
            <div class="room-select-section" id="room-selection-div">
                <h3>Select your room</h3>
                @forelse($roomData as $row)
                    <div class="room-div room-info-box">
                        <h6>{{$row->roomType}}</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="room-head hidden-xs">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p>Benefits</p>
                                        </div>
                                        <div class="col-md-2">
                                            <p>Sleeps</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>Price</p>
                                        </div>
                                        <div class="col-md-2">
                                            <p>Most Booked</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p><b>Your price includes:</b></p>
                                            <ul>
                                                @foreach($row->facilities as $facility)
                                                    <li>
                                                        <i class="fa fa-check"></i>
                                                        {{$facility}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="icons-include">
                                                <i class="fa fa-male"></i>
                                                <i class="fa fa-male"></i>
                                                <!--<span class="more-people">+</span>-->
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="room-price-sec">
                                                <p class="no-price">€ {{round($row->netPrice*1.1, 2)}}</p>
                                                <p class="offer-price">€ {{$row->netPrice}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="{{route('front.hotel_check_out')}}" method="post" accept-charset="utf-8">       
                                                @csrf          
                                                <input type="hidden" name="productId" value="{{$row->productId}}">
                                                <input type="hidden" name="tokenId" value="{{$tokenId}}">
                                                <input type="hidden" name="rateBasisId" value="{{$row->rateBasisId}}">
                                                <input type="hidden" name="sessionId" value="{{$sessionId}}">
                                                <button type="submit" class="btn-book">Book Now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <!-- filter option -->
            <div class="more-hotel-info">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="rating-sec">
                            <p><b>Overall rating:</b></p>
                            <div class="rating-div">
                                <div class="rating-left">
                                    2.5                         
                                </div>
                                <div class="rating-right">
                                    <p>Excellent</p>
                                    <small>199 reviews</small>
                                </div>
                            </div>
                            <div class="overall-div">
                                <div class="row">
                                    <div class="col-4">
                                        <p>Cleanliness</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="progress">
                                        <div class="progress-bar" style="width:40%;"></div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-right pl-0">
                                        <p class="rate-text">2.5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overall-div">
                                <div class="row">
                                    <div class="col-4">
                                        <p>Facilities</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="progress">
                                        <div class="progress-bar" style="width:20%;"></div>
                                        </div>
                                    </div>
                                    <div class="col-2 pl-0 text-right">
                                        <p class="rate-text">2.0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overall-div">
                                <div class="row">
                                    <div class="col-4">
                                        <p>Location</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="progress">
                                        <div class="progress-bar" style="width:40%;"></div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-right">
                                        <p class="rate-text">3.0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- hotel rating -->
                    <div class="col-lg-8">
                        <div class="hotel-desc-sec">
                            <div class="hotel-img-div">
                                @if(array_key_exists(2, $hotelContents->hotelImages))
                                    <img src="{{$hotelContents->hotelImages[2]->url}}" alt="Hotel Image" class="">
                                @else
                                   <img src="{{$hotelContents->hotelImages[0]->url}}" alt="Hotel Image">
                                @endif
                                <div class="hotel-name-info">
                                  <h5>More about</h5>
                                  <h3>{{$hotelContents->name}}</h3>
                                </div>    
                            </div>
                            <div class="hotel-desc-div">
                                <p>{{$hotelContents->description->content}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /hotel info -->
                </div>
            </div>
            <!--/more hotel info  -->
            <div class="facilities-sec">
                <div class="row">
                    <div class="col-lg-4">
                        <h6>Most talked about facilities</h6>
                    </div>
                    <div class="col-lg-8">
                        <div class="facilities-div">
                            <ul>
                            <li>
                                <a>
                                    <div class="icon-div">
                                        <object data="https://travelnext.works/api/public/images/fac_icons_svg_new/WLAN access.svg" type="image/svg+xml" style="width: 20px;height:20px"></object>
                                    </div>
                                </a>
                                <p>WLAN access</p>
                            </li>
                            <li>
                                <a>
                                    <div class="icon-div">
                                        <object data="https://travelnext.works/api/public/images/fac_icons_svg_new/Bicycle.svg" type="image/svg+xml" style="width: 20px;height:20px"></object>
                                    </div>
                                </a>
                                <p>Bicycle</p>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /facilities infos -->
            <div class="hotel-review-section">
                <h3>Reviews</h3>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#tripadvisor-review" class="nav-link active" role="tab" data-toggle="tab">Tripadvisor Review</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" role="tabpanel" id="tripadvisor-review">
                        <div class="review-content">
                            <div class="row">
                                <div class="col-md-3 col-lg-1 pr-0">
                                <div class="review-left-sec">
                                    2.5<span> /5</span>
                                </div>
                                <h6></h6>
                                </div>
                                <div class="col-md-9 col-lg-6">
                                <div class="progress-sec">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="progress-div">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:20%;"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="rate-text">Cleanliness</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="rate-num">2.5</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress-div">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:50%;"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="rate-text">Sleep</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="rate-num">3.0</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress-div">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:40%;"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="rate-text">Location/Hotel Name</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="rate-num">3.0</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress-div">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:20%;"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="rate-text">Room Comfort & Quality</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="rate-num">2.0</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress-div">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:50%;"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="rate-text">Service</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="rate-num">3.0</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="progress-div">
                                            <div class="progress">
                                                <div class="progress-bar" style="width:40%;"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <p class="rate-text">Value for money</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="rate-num">2.5</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="rating-brdr-left col-md-12 col-lg-5">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p><b>Rating</b></p>
                                        <ul>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp;9+  (69)
                                            </label>
                                            </li>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp;8-9  (30)
                                            </label>
                                            </li>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp;7-8  (41)
                                            </label>
                                            </li>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp;6-7  (39)
                                            </label>
                                            </li>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp;&lt;6  (20)
                                            </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <p><b>Time of the year</b></p>
                                        <ul>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp; 
                                            </label>
                                            </li>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp; 
                                            </label>
                                            </li>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp;                                                 </label>
                                            </li>
                                            <li>
                                            <label>
                                            <i class="icon-right-hand"></i>&nbsp;&nbsp; 
                                            </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- review section -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->
<!-- Modal -->
<div class="modal fade" id="hotelImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$hotelContents->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="col-md-12">
             <div class="row">
                 <div class="gal">
                     <div id="aniimated-thumbnials">
                        @foreach($hotelContents->hotelImages as $row)
                        <a href="{{$row->url}}">
                            <img src="{{$row->url}}" alt="">
                        </a>
                        @endforeach
                     </div>
                 </div>
             </div>
         </div>                                   
      </div>
    </div>
  </div>
</div>
<!-- /hotel image -->
<div class="modal fade" id="map-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
<!-- /map modal -->

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/js/lightgallery-all.min.js"></script>
<script>
     $(function() {
        $('#aniimated-thumbnials').lightGallery({
            thumbnail: true,
        });
    });
</script>
@endsection
