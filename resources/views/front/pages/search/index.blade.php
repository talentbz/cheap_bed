@extends('front.layouts.index')

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

            <div class="col-lg-9" id="list_sidebar">
                <div class="isotope-wrapper">
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
        $(window).on('load', function(){
            var $container = $('.isotope-wrapper');
            $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
        });

        $('.filters_listing').on( 'click', 'input', 'change', function(){
            var selector = $(this).attr('data-filter');
            $('.isotope-wrapper').isotope({ filter: selector });
        });
        var data = @json($getDatas);
        
        // get min && max price value
        max_price = Math.max.apply(Math, data.map(function(o) { return o.total; }))
        min_price = Math.min.apply(Math, data.map(function(o) { return o.total; }))
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: min_price,
            max: max_price,
            from: min_price,
            to: max_price,
            type: 'double',
            step: 1,
            prefix: "Min. ",
            grid: false,
        });
        $("#range").on("change", function () {
            var $inp = $(this);
            var v = $inp.prop("value");     // input value in format FROM;T
            
        });


    </script>
    <!-- Range Slider -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" 
        integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" 
            crossorigin="anonymous">
    </script>
	<script>
        $(document).ready(function() {
            data_length = data.length;
            click_count = 0;
            hotel_list(click_count);
            $('#load_more').click(function(){
                click_count++;
                if(click_count * 10< data_length)
                    hotel_list(click_count * 10);
            })
            function hotel_list(count){
                no_image = "{{asset('/assets/Front/img/hotel_not_found.png')}}";
                for(i=0+count; i<10+count; i++){
                    hotel_url = "{{route('front.hotel_details', '')}}"+"/"+data[i].hotelId;
                    html = '<div class="box_list isotope-item latest">';
                        html += '<div class="row no-gutters">';
                            html += '<div class="col-lg-5">';
                                html += '<figure>';
                                    html += '<small>'+data[i].propertyType+'</small>';
                                    html += '<a href="'+hotel_url+'">';
                                    if(data[i].thumbNailUrl){
                                        html += '<img src="'+data[i].thumbNailUrl+'" class="img-fluid" alt="" width="800" height="533"><div class="read_more">';
                                    } else {
                                        html += '<img src="'+no_image+'" class="img-fluid" alt="" width="800" height="533"><div class="read_more">';
                                    }
                                    html += '</a>';
                                html += '</figure>';
                            html += '</div>';
                            html += '<div class="col-lg-7">';
                                html += '<div class="wrapper">';
                                    html += '<a href="#" class="wish_bt"></a>';
                                    html += '<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>';
                                    html += '<h3><a href="'+hotel_url+'">'+data[i].hotelName+'</a></h3>';
                                    html += '<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no.</p>';
                                    html += '<span class="price">From <strong>€ '+data[i].total+'</strong> /per person</span>';
                                html += '</div>';
                            html += '</div>';
                        html += '</div>' ;          
                    html += '</div>';
                    $('.isotope-wrapper').append(html);
                }   
            }
            
        })
	</script>
@endsection