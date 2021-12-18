@extends('front.layouts.index')
<link href="{{ URL::asset('/assets/Front/pages/Hotel/hotel_list.css') }}" rel="stylesheet" type="text/css" />
@section('css')
@endsection
@section('title')
    booking
@endsection
@section('content')
<main>
    <section class="hero_in hotels">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Paris hotels list sidebar</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    
    <div class="filters_listing sticky_horizontal">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <div class="switch-field">
                        <input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*" class="selected">
                        <label for="all">All</label>
                        <input type="radio" id="popular" name="listing_filter" value="popular" data-filter=".popular">
                        <label for="popular">Popular</label>
                        <input type="radio" id="latest" name="listing_filter" value="latest" data-filter=".latest">
                        <label for="latest">Latest</label>
                    </div>
                </li>
                <li>
                    <div class="layout_view">
                        <a href="hotels-grid-isotope.html"><i class="icon-th"></i></a>
                        <a href="#0" class="active"><i class="icon-th-list"></i></a>
                    </div>
                </li>
                <li>
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /filters -->
    
    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60_35">
        <div class="col-lg-12">
            <div class="row no-gutters custom-search-input-2 inner">
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="What are you looking for...">
                        <i class="icon_search"></i>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Where">
                        <i class="icon_pin_alt"></i>
                    </div>
                </div>
                <div class="col-lg-3">
                    <select class="wide">
                        <option>All Categories</option>
                        <option>Paris Center</option>
                        <option>La Defanse</option>
                        <option>Latin Quarter</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <input type="submit" class="btn_search" value="Search">
                </div>
            </div>
            <!-- /row -->
        </div>
        <div class="row">
            <aside class="col-lg-3" id="sidebar">
                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
                    <div class="collapse show" id="collapseFilters">
                        <div class="filter_type">
                            <h6>District</h6>
                            <ul>
                                <li>
                                    <label class="container_check">All <small>(945)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">La Defanse <small>(45)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Paris Center <small>(30)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Latin Quartes<small>(25)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Distance</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>Star Category</h6>
                            <ul>
                                <li>
                                    <label class="container_check"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small>(25)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small>(26)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small>(25)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>Rating</h6>
                            <ul>
                                <li>
                                    <label class="container_check">Superb 9+ <small>(25)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Very Good 8+ <small>(26)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Good 7+ <small>(25)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Pleasant 6+ <small>(12)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/collapse -->
                </div>
                <!--/filters col-->
            </aside>
            <!-- /aside -->

            <div class="col col-lg-9 col-12" id="list_sidebar">
                <div class="hotel-list-info">
                    <div class="box_list">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="hotel-image">
                                    <img src="https://i.travelapi.com/hotels/6000000/5420000/5417300/5417281/3c4155d5.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 hotel-detail">
                                <div class="detail-wrapper">
                                    <h6><a href="#">THE FLYING PIG DOWNTOWN</a></h6>
                                    <div class="cat_star">
                                        <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                        <a href="#" class="location">
                                            <i class="icon-location"></i>Nieuwendijk 100, 1012 MR Amsterdam, Netherlands
                                        </a>
                                    </div>
                                    <div class="hotel_fasilite">
                                        <ol>
                                            <li class="amenities-text">24-hour reception</li>
                                            <li class="amenities-text">24-hour reception</li>
                                            <li class="amenities-text">Lift</li>
                                            <li class="amenities-text">Games room</li>
                                            <li class="amenities-text more-facilities">+10
                                                <span class="tooltiptext">Tooltip text</span>
                                            </li>

                                        </ol>
                                    </div>
                                    <div class="refund-able">
                                        <button>Non-Refundable</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="review">
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                                    <h2 class="price"><strong>$ 54</strong></h2>
                                    <a href="#" class="btn-book">Reserve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center add_top_30"><a href="#0" class="btn_1 rounded">Load more</a></p>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-help2"></i>
                        <h4>Need Help? Contact us</h4>
                        <p>Cum appareat maiestatis interpretaris et, et sit.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-wallet"></i>
                        <h4>Payments and Refunds</h4>
                        <p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-note2"></i>
                        <h4>Quality Standards</h4>
                        <p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
                    </a>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>

@endsection
@section('script')
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ URL::asset('assets/Front/js/markerclusterer.js')}}"></script>
    <script src="{{ URL::asset('assets/Front/js/map_tours.js')}}"></script>
    <script src="{{ URL::asset('assets/Front/js/infobox.js')}}"></script>

    <!-- Masonry Filtering -->
    <script src="{{ URL::asset('assets/Front/js/isotope.min.js')}}"></script>
    <script>
        $(window).on('load', function(){
            var $container = $('.isotope-wrapper');
            $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
        });

        $('.filters_listing').on( 'click', 'input', 'change', function(){
            var selector = $(this).attr('data-filter');
            $('.isotope-wrapper').isotope({ filter: selector });
        });
    </script>
    <!-- Range Slider -->
	<script>
		 $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 30,
            max: 180,
            from: 60,
            to: 130,
            type: 'double',
            step: 1,
            prefix: "Min. ",
            grid: false
        });
	</script>
@endsection