
@include('front.layouts.header')
@section('body')
<body class="datepicker_mobile_full"><!-- Remove this class to disable datepicker full on mobile -->
	@show
	<div id="page">
	@include('front.layouts.menu')
	@yield('content')
	@include('front.layouts.footer')
	
