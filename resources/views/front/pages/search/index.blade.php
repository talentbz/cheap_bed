@extends('front.layouts.index')
<link href="{{ URL::asset('/assets/Front/pages/Hotel/hotel_search.css') }}" rel="stylesheet" type="text/css" />
@section('css')
@endsection
@section('title')
    search
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
                                    <label class="container_check"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small class='five_star'>(25)</small>
                                        <input class="check_type" type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small class="four_star">(26)</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check"><span class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span> <small class="three_star">(25)</small>
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

            <div class="col-lg-9" id="list_sidebar">
                <div class="hotel-list-info">
                </div>
                <!-- /isotope-wrapper -->
                <p class="text-center add_top_30"><button  id="load_more" class="btn_1 rounded">Load more</button></p>
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
        var data = @json($getDatas);
        var sessionId = "{{ $sessionId}}";
        function hotel_list(count, data){
            no_image = "{{asset('/assets/Front/img/hotel_not_found.png')}}";
            for(i=0+count; i<10+count; i++){
                var productId=data[i].productId;
                var tokenId=data[i].tokenId;
                var hotelId=data[i].hotelId;
                hotel_url = `{{url('/hotel_details')}}/${sessionId}/${productId}/${tokenId}/${hotelId}`;
                html = '<div class="box_list">';
                    html += '<div class="row">';
                        html += '<div class="col-md-4">';
                            html += '<div class="hotel-image">';
                                if(data[i].thumbNailUrl){
                                    html += '<img src="'+data[i].thumbNailUrl+'"  alt="" >';
                                } else {
                                    html += '<img src="'+no_image+'"  alt="" >';
                                }
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-5 hotel-detail">';
                            html += '<div class="detail-wrapper">';
                                html += '<h6><a href="#">'+data[i].hotelName+'</a></h6>';
                                html += '<div class="cat_star">';
                                    //hotel star rating
                                    if(data[i].hotelRating){
                                        for(j=0; j<data[i].hotelRating; j++){
                                            html +='<i class="icon_star"></i>';
                                        }
                                    }
                                    html +='<a href="#" class="location">';
                                        html +='<i class="icon-location"></i>'+data[i].address;
                                    html +='</a>';
                                html +='</div>'
                                html += '<div class="hotel_fasilite">';
                                    html +='<ol>';
                                        for(k=0; k<data[i].facilities.length; k++){
                                            html +='<li class="amenities-text">'+data[i].facilities[k]+'</li>';
                                            if(k==3){break;}
                                        }
                                        
                                        if(data[i].facilities.length>4){
                                            html += '<li class="amenities-text more-facilities">+ '+(data[i].facilities.length-4);
                                            html +='<span class="tooltiptext">'
                                            for(m=4; m<data[i].facilities.length; m++){
                                                html += data[i].facilities[m];
                                            }
                                            html +='</span>';
                                            html +='</li>';
                                        }
                                        
                                    html +='</ol>';
                                html +='</div>'
                                html += '<div class="refund-able">';
                                    html += '<button>'+data[i].fareType+'</button>';
                                html += '</div>';
                            html += '</div>';
                        html += '</div>';
                        html += '<div class="col-md-3">';
                            html += '<div class="review">';
                                html += '<div class="score"><span>Superb<em>'+data[i].tripAdvisorReview+' Reviews</em></span><strong>'+data[i].tripAdvisorRating+'</strong></div>';
                                html += '<h2 class="price"><strong>€ '+data[i].total+'</strong></h2>'
                                var test_url = "{{route('front.test')}}";
                                // html += '<form action="'+test_url+'" method="post">';
                                //     html += '@csrf';
                                //     html += '<input type="hidden" name="sessionId" value="'+sessionId+'"/>'
                                //     html += '<input type="hidden" name="productId" value="'+productId+'"/>'
                                //     html += '<input type="hidden" name="tokenId" value="'+tokenId+'"/>'
                                //     html += '<input type="hidden" name="hotelId" value="'+hotelId+'"/>'
                                //     html += '<input type="submit" class="btn-book" value="Reserve">'
                                // html += "</form>";
                                html += '<a href="#" class="btn-book">Reserve</a>';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>' ;          
                html += '</div>';
                $('.hotel-list-info').append(html);
            }   
        }
        
    </script>
    <script src="{{ URL::asset('assets/Front/pages/Hotel/hotel_search.js')}}"></script>
    <!-- Range Slider -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" 
        integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" 
            crossorigin="anonymous">
    </script>
@endsection