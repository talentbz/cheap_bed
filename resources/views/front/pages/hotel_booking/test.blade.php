@extends('front.layouts.index')
    <link href="{{ URL::asset('/assets/Front/pages/Hotel/booking_review.css') }}" rel="stylesheet" type="text/css" />
@section('css')
@endsection
@section('title')
    review
@endsection
@section('content')
<main>
    <div class="hero_in cart_section">
        <div class="wrapper">
            <div class="container">
                <div class="bs-wizard clearfix">
                    <div class="bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum">Your cart</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Payment</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Finish!</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>
                </div>
                <!-- End bs-wizard -->
            </div>
        </div>
    </div>
    <!--/hero_in-->

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <div class="box_cart">
                        <div class="deatels-search">
                            <div class="heading">
                                <div class="row">
                                    <h2>Review Your Booking</h2>
                                </div>
                            </div>
                        </div>
                        <div class="amenities">
                            <div class="content-details-from pt-2 pb-2">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-3">
                                            Contact Details
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input parsley-type="email" type="email" name="email" class="form-control" placeholder="Email" required />
                                                </div>
                                                <div class="col-md-3">
                                                    <input data-parsley-type="number"  type="text" name="country_code" class="form-control" placeholder="Country Code" required />
                                                </div>
                                                <div class="col-md-5">
                                                    <input data-parsley-type="number"  type="text" name="phone_number" class="form-control" placeholder="Mobile Number" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line pt-2 pb-2"></div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            Room 1
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <select class="form-control" required>
                                                            <option selected >Mr.</option>
                                                            <option>Mrs.</option>
                                                            <option>Miss.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input data-parsley-type="number"  type="text" name="country_code" class="form-control" placeholder="Country Code" required />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input data-parsley-type="number"  type="text" name="country_code" class="form-control" placeholder="Country Code" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 pt-3">
                                            Special Request:
                                        </div>
                                        <div class="col-md-9 pt-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="" class="form-control" rows="3"></textarea>
                                                    <p class="ml-0">Special request can't be guaranteed. We will pass these requests to the hotels.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row payment-check">
                                        <div class="col-md-12 mb-2">
                                            <span class="payment-buttons">
                                                <input type="radio" name="payment_type" value="paypal" checked="">
                                                <img src="{{asset('/assets/Front/img/paypal.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                                                <label class="form-check-label text-details" for="defaultCheck1">
                                                I confirm that I have read, understood and agree with the Booking Engine Terms &amp; Conditions provided </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="agent_details"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                
                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <div id="total_cart">
                            Total <span class="float-right">69.00$</span>
                        </div>
                        <ul class="cart_details">
                            <li>From <span>02-11-18</span></li>
                            <li>To <span>04-11-18</span></li>
                            <li>Adults <span>2</span></li>
                            <li>Childs <span>1</span></li>
                        </ul>
                        <a href="cart-2.html" class="btn_1 full-width purchase">Checkout</a>
                        <div class="text-center"><small>No money charged in this step</small></div>
                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
@endsection