@extends('front.layouts.index')
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
@endsection