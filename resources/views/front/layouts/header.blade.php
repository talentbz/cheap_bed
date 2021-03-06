<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Cheap bed finder</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ URL::asset('/assets/Front/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ URL::asset('/assets/Front/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ URL::asset('/assets/Front/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ URL::asset('/assets/Front/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ URL::asset('/assets/Front/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ URL::asset('/assets/Front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/Front/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/Front/css/vendors.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" >
    
    <!-- YOUR CUSTOM CSS -->
    <link href="{{ URL::asset('/assets/Front/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <!-- SKOTE THEME CSSS -->
    <link href="{{ URL::asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ URL::asset('/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" /> -->
    <link href="{{ URL::asset('/assets/Front/pages/dashboard.css') }}" rel="stylesheet" type="text/css" />
    @yield('css') 
</head>
