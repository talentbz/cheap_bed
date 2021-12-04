@extends('layouts.master')

@section('title') @lang('translation.Preloader') @endsection

@section('body')
    <body data-sidebar="dark">
        <!-- Loader -->
        <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Layouts @endslot
        @slot('title') Preloader @endslot
    @endcomponent
@endsection

@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection