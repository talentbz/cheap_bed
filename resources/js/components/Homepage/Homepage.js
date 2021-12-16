import React, { useState, useEffect } from 'react';
import Header from '../Header/Header';
import Footer from '../Footer/Footer';
import './Homepage.scss';
function Homepage() {
    return (
        <>
            <Header /> 
            <div>
                <section className="hero_single version_2">
                    <div className="wrapper">
                        <div className="container">
                            <h3>Book unique experiences</h3>
                            <p>Expolore top rated tours, hotels and restaurants around the world</p>
                        
                            <form method="get" action="{{route('front.search')}}" enctype="multipart/form-data">
                                <div className="row no-gutters custom-search-input-2 version_3">
                                    <div className="col-lg-4">
                                        <div className="form-group">
                                            <span>Location</span>
                                            <input className="form-control" id='searchTextField' type="text" placeholder="Where are you going?" required />
                                            <input type="hidden" id="city" name="city" />
                                            <input type="hidden" id="country" name="country" />
                                            <input type="hidden" id="cityLat" name="cityLat" value="52.3675734"/>
                                            <input type="hidden" id="cityLng" name="cityLng" value="4.9041389"/>
                                        </div>
                                    </div>
                                    <div className="col-lg-3">
                                        <div className="form-group">
                                            <span>Checkin - Checkout</span>
                                            <input className="form-control" type="text" placeholder="Add dates" name="dates" required />
                                        </div>
                                    </div>
                                    <div className="col-lg-3">
                                        <div className="panel-dropdown form-group">
                                            <span>Guests</span>
                                            <a href="#">Add Guests <span className="qtyTotal">1</span></a>
                                            <div className="panel-dropdown-content">
                                                <div className="qtyButtons">
                                                    <label>Adults</label>
                                                    <input type="text" className="qty_input" name="qtyInput_adult" value="1" />
                                                </div>
                                                <div className="qtyButtons">
                                                    <label>Childrens</label>
                                                    <input type="text" className="qty_input" name="qtyInput_children" value="0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-lg-2">
                                        <input type="submit" className="btn_search" value="Search" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <div className="container container-custom margin_80_0">
                    <div className="main_title_2">
                        <span><em></em></span>
                        <h2>Our Popular Tours</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                    <div id="reccomended" className="owl-carousel owl-theme">
                       
                    </div>
                    <p className="btn_home_align"><a href="{{route('front.hotel_list')}}" className="btn_1 rounded">View all Tours</a></p>
                    <hr className="large" />
                </div>
                <div className="container container-custom margin_30_95">
                    <section className="add_bottom_45">
                        <div className="main_title_3">
                            <span><em></em></span>
                            <h2>Popular Hotels and Accommodations</h2>
                            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                        </div>
                        <div className="row">
                            <div className="col-xl-3 col-lg-6 col-md-6">
                                <a href="hotel-detail.html" className="grid_item">
                                    <figure>
                                        <div className="score"><strong>8.9</strong></div>
                                        <img src="{{asset('/assets/Front/img/hotel_1.jpg')}}" className="img-fluid" alt="" />
                                        <div className="info">
                                            <div className="cat_star"><i className="icon_star"></i><i className="icon_star"></i><i className="icon_star"></i><i className="icon_star"></i></div>
                                            <h3>Mariott Hotel</h3>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                            <div className="col-xl-3 col-lg-6 col-md-6">
                                <a href="hotel-detail.html" className="grid_item">
                                    <figure>
                                        <div className="score"><strong>7.9</strong></div>
                                        <img src="{{asset('/assets/Front/img/hotel_2.jpg')}}" className="img-fluid" alt="" />
                                        <div className="info">
                                            <div className="cat_star"><i className="icon_star"></i><i className="icon_star"></i><i className="icon_star"></i><i className="icon_star"></i></div>
                                            <h3>Concorde Hotel </h3>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                            <div className="col-xl-3 col-lg-6 col-md-6">
                                <a href="hotel-detail.html" className="grid_item">
                                    <figure>
                                        <div className="score"><strong>7.0</strong></div>
                                        <img src="{{asset('/assets/Front/img/hotel_3.jpg')}}" className="img-fluid" alt="" />
                                        <div className="info">
                                            <div className="cat_star"><i className="icon_star"></i><i className="icon_star"></i><i className="icon_star"></i><i className="icon_star"></i></div>
                                            <h3>Louvre Hotel</h3>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                            <div className="col-xl-3 col-lg-6 col-md-6">
                                <a href="hotel-detail.html" className="grid_item">
                                    <figure>
                                        <div className="score"><strong>8.9</strong></div>
                                        <img src="{{asset('/assets/Front/img/hotel_4.jpg')}}" className="img-fluid" alt="" />
                                        <div className="info">
                                            <div className="cat_star"><i className="icon_star"></i><i className="icon_star"></i><i className="icon_star"></i><i className="icon_star"></i></div>
                                            <h3>Park Yatt Hotel</h3>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <a href="hotels-grid-isotope.html"><strong>View all (157) <i className="arrow_carrot-right"></i></strong></a>
                    </section>
                    <section className="add_bottom_45">
                        <div className="main_title_3">
                            <span><em></em></span>
                            <h2>Popular Restaurants</h2>
                            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                        </div>
                        <div className="row">
                            <div className="col-xl-3 col-lg-6 col-md-6">
                                <a href="restaurant-detail.html" className="grid_item">
                                    <figure>
                                        <div className="score"><strong>8.5</strong></div>
                                        <img src="{{asset('/assets/Front/img/restaurant_1.jpg')}}" className="img-fluid" alt="" />
                                        <div className="info">
                                            <h3>Da Alfredo</h3>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                            <div className="col-xl-3 col-lg-6 col-md-6">
                                <a href="restaurant-detail.html" className="grid_item">
                                    <figure>
                                        <div className="score"><strong>7.9</strong></div>
                                        <img src="{{asset('/assets/Front/img/restaurant_2.jpg')}}" className="img-fluid" alt="" />
                                        <div className="info">
                                            <h3>Slow Food</h3>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                            <div className="col-xl-3 col-lg-6 col-md-6">
                                <a href="restaurant-detail.html" className="grid_item">
                                    <figure>
                                        <div className="score"><strong>7.5</strong></div>
                                        <img src="{{asset('/assets/Front/img/restaurant_3.jpg')}}" className="img-fluid" alt="" />
                                        <div className="info">
                                            <h3>Bella Napoli</h3>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                            <div className="col-xl-3 col-lg-6 col-md-6">
                                <a href="restaurant-detail.html" className="grid_item">
                                    <figure>
                                        <div className="score"><strong>9.0</strong></div>
                                        <img src="{{asset('/assets/Front/img/restaurant_4.jpg')}}" className="img-fluid" alt="" />
                                        <div className="info">
                                            <h3>Marcus</h3>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <a href="restaurants-grid-isotope.html"><strong>View all (157) <i className="arrow_carrot-right"></i></strong></a>
                    </section>
                    <div className="banner mb-0">
                        <div className="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                            <div>
                                <small>Adventure</small>
                                <h3>Your Perfect<br/>Advenure Experience</h3>
                                <p>Activities and accommodations</p>
                                <a href="adventure.html" className="btn_1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="bg_color_1">
                    <div className="container margin_80_55">
                        <div className="main_title_2">
                            <span><em></em></span>
                            <h3>News and Events</h3>
                            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                        </div>
                        <div className="row">
                            <div className="col-lg-6">
                                <a className="box_news" href="#0">
                                    <figure><img src="{{asset('/assets/Front/img/news_home_1.jpg')}}" alt="" />
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
                            <div className="col-lg-6">
                                <a className="box_news" href="#0">
                                    <figure><img src="{{asset('/assets/Front/img/news_home_2.jpg')}}" alt="" />
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
                            <div className="col-lg-6">
                                <a className="box_news" href="#0">
                                    <figure><img src="{{asset('/assets/Front/img/news_home_3.jpg')}}" alt="" />
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
                            <div className="col-lg-6">
                                <a className="box_news" href="#0">
                                    <figure><img src="{{asset('/assets/Front/img/news_home_4.jpg')}}" alt="" />
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
                        </div>
                        <p className="btn_home_align"><a href="blog.html" className="btn_1 rounded">View all news</a></p>
                    </div>
                </div>

                <div className="call_section">
                    <div className="container clearfix">
                        <div className="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                            <div className="block-reveal">
                                <div className="block-vertical"></div>
                                <div className="box_1">
                                    <h3>Enjoy a GREAT travel with us</h3>
                                    <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                                    <a href="#0" className="btn_1 rounded">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>

    );
}
export default Homepage;