@extends('front.layouts.index')

@section('css')
    <!-- SKOTE THEME CSSS -->
    <link href="{{ URL::asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/Front/pages/dashboard.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('title')
    homepage
@endsection
@section('content')
<main>	
    <section class="hero_in restaurants">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Dashboard</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    <div class="container margin_60_35">
        <div class="row">
            @include('front.pages.user.sidebar')
            <div class="col-lg-9">
                <div class="isotope-wrapper">
                    <div class="box_list isotope-item popular">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="wrapper">
                                    <h3><a href="javascript:void(0)">Dashboard</a></h3>
                                    <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /col -->
        </div>		
    </div>
    <!-- /container -->
</main>
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js')}}"></script>
<!-- App js -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
@endsection