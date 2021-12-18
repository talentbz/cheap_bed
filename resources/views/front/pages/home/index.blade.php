@extends('front.layouts.index')

@section('css')
@endsection
@section('title')
    homepage
@endsection
@section('content')
<main>
    <section class="hero_single version_2">
        <div class="wrapper">
            <div class="container">
                <h3>Book unique experiences</h3>
                <p>Expolore top rated tours, hotels and restaurants around the world</p>
            
                <form method="get" action="{{route('front.search')}}" enctype="multipart/form-data">
                    <div class="row no-gutters custom-search-input-2 version_3">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <span>Location</span>
                                <input class="form-control" id='searchTextField' type="text" placeholder="Where are you going?" required>
                                <input type="hidden" id="city" name="city" />
                                <input type="hidden" id="country" name="country" />
                                <input type="hidden" id="cityLat" name="cityLat" value="52.3675734"/>
                                <input type="hidden" id="cityLng" name="cityLng" value="4.9041389"/>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <span>Checkin - Checkout</span>
                                <input class="form-control" type="text" placeholder="Add dates" name="dates" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel-dropdown form-group">
                                <span>Guests</span>
                                <a href="#">Add Guests <span class="qtyTotal">1</span></a>
                                <div class="panel-dropdown-content">
                                    <!-- Quantity Buttons -->
                                    <div class="qtyButtons">
                                        <label>Rooms</label>
                                        <input type="text" name="qtyInput_rooms" value="1">
                                    </div>
                                    <div class="qtyButtons">
                                        <label>Adults</label>
                                        <input type="text" class="qty_input" name="qtyInput_adult" value="1">
                                    </div>
                                    <div class="qtyButtons">
                                        <label>Childrens</label>
                                        <input type="text" class="qty_input" name="qtyInput_children" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" class="btn_search" value="Search">
                        </div>
                    </div>
                    <!-- /row -->
                </form>
            </div>
        </div>
    </section>
    <!-- /hero_single -->

    <div class="container container-custom margin_80_0">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Our Popular Tours</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
            @forelse ($getDatas as $key=>$getData)
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href="#0" class="wish_bt"></a>
                        <a href="{{route('front.hotel_details', ['id' =>$getData->id])}}">
                            @if($getData->first_image)
                                <img src="{{$getData->first_image}}" class="img-fluid" alt="" width="300" height="533">
                            @else
                                <img src="{{asset('/assets/Front/img/no-image.png')}}" class="img-fluid" alt="" width="300" height="533">
                            @endif
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <small>{{$getData->kind}}</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href="{{route('front.hotel_details', ['id' =>$getData->id])}}">{{$getData->name}}</a></h3>
                        <p>{{str_limit($getData->description_struct[0]['paragraphs'][0], 110)}}</p>
                        <!-- <span class="price">From <strong>$54</strong> /per person</span> -->
                    </div>
                    <ul>
                        <li><i class="icon_clock_alt"></i> 1h 30min</li>
                        <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                    </ul>
                </div>
            </div>
            @empty
            @endforelse
            <!-- /item -->
        </div>
        <!-- /carousel -->
        <p class="btn_home_align"><a href="{{route('front.hotel_list')}}" class="btn_1 rounded">View all Tours</a></p>
        <hr class="large">
    </div>
    <!-- /container -->

    <div class="container container-custom margin_30_95">
        <section class="add_bottom_45">
            <div class="main_title_3">
                <span><em></em></span>
                <h2>Popular Hotels and Accommodations</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>8.9</strong></div>
                            <img src="{{asset('/assets/Front/img/hotel_1.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Mariott Hotel</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>7.9</strong></div>
                            <img src="{{asset('/assets/Front/img/hotel_2.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Concorde Hotel </h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>7.0</strong></div>
                            <img src="{{asset('/assets/Front/img/hotel_3.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Louvre Hotel</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>8.9</strong></div>
                            <img src="{{asset('/assets/Front/img/hotel_4.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Park Yatt Hotel</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /row -->
            <a href="hotels-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
        </section>
        <!-- /section -->

        <section class="add_bottom_45">
            <div class="main_title_3">
                <span><em></em></span>
                <h2>Popular Restaurants</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a href="restaurant-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>8.5</strong></div>
                            <img src="{{asset('/assets/Front/img/restaurant_1.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <h3>Da Alfredo</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a href="restaurant-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>7.9</strong></div>
                            <img src="{{asset('/assets/Front/img/restaurant_2.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <h3>Slow Food</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a href="restaurant-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>7.5</strong></div>
                            <img src="{{asset('/assets/Front/img/restaurant_3.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <h3>Bella Napoli</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a href="restaurant-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>9.0</strong></div>
                            <img src="{{asset('/assets/Front/img/restaurant_4.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <h3>Marcus</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /row -->
            <a href="restaurants-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
        </section>
        <!-- /section -->

        <div class="banner mb-0">
            <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                <div>
                    <small>Adventure</small>
                    <h3>Your Perfect<br>Advenure Experience</h3>
                    <p>Activities and accommodations</p>
                    <a href="adventure.html" class="btn_1">Read more</a>
                </div>
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /banner -->

    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h3>News and Events</h3>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="{{asset('/assets/Front/img/news_home_1.jpg')}}" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="{{asset('/assets/Front/img/news_home_2.jpg')}}" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Jhon Doe</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Duo eius postea suscipit ad</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="{{asset('/assets/Front/img/news_home_3.jpg')}}" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Luca Robinson</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Elitr mandamus cu has</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="#0">
                        <figure><img src="{{asset('/assets/Front/img/news_home_4.jpg')}}" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Paula Rodrigez</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Id est adhuc ignota delenit</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->

    <div class="call_section">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                <div class="block-reveal">
                    <div class="block-vertical"></div>
                    <div class="box_1">
                        <h3>Enjoy a GREAT travel with us</h3>
                        <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                        <a href="#0" class="btn_1 rounded">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/call_section-->
</main>
<!-- /main -->
@endsection
@section('script')
<!-- DATEPICKER  -->
<script>
    $(function() {
        'use strict';
        $('input[name="dates"]').daterangepicker({
            autoUpdateInput: false,
            minDate: new Date(),
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD') + ' > ' + picker.endDate.format('YYYY-MM-DD'));
        });
        $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
</script>

<!-- INPUT QUANTITY  -->
<script src="{{ URL::asset('assets/Front/js/input_qty.js')}}"></script>
@endsection
