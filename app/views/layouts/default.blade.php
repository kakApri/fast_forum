<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">

		<title>
			@section('title')
FAST  - Forum Analisis Statistik
			@show
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<meta name="keywords" content="FAST, Forum Analisis statistik, STIS, BPS" />
		<meta name="author" content="FAST54" />
		<meta name="description" content="@section('description')FAST is Forum Analisis Statistik  @show" />

        <link rel="stylesheet" href="{{ URL::asset('assets/css/'.Asset::styles('frontend')) }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootflat.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" /> 
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-responsive.css') }}" />

        
        @yield('css')

        <link rel="shortcut icon" href="{{ URL::asset('/favicon.ico') }}"/>

        <script>
            Config = {
                'cdnDomain': '{{ getCdnDomain() }}',
                'user_id': {{ $currentUser ? $currentUser->id : 0 }},
                'routes': {
                    'notificationsCount' : '{{ route('notifications.count') }}',
                    'upload_image' : '{{ route('upload_image') }}'
                },
                'token': '{{ csrf_token() }}',
            };
        </script>

        <style type="text/css">
        	body{
        		    font-family: "cabin",Helvetica,Arial,sans-serif;
    				font-size: 14px;
    				line-height: 1.42857143;
    				color: #333;
    				background-color: #fff;
    				height: initial;
        	}
        </style>

	    @yield('styles')

	</head>
	<body id="body">

		<div id="wrap">

			@include('layouts.partials.nav')

			<div class="container">

				@include('flash::message')

				@yield('content')

			</div>

		</div>

	  <div id="footer" class="footer">
	  <div style="background-color:#858d93; height:30px; padding:5px;">
	  </div>
	    <div class="container">
	      <div class="row">
	      	<div class="col-md-6 small">
	      		
	      	</div>
	      	<div class="col-md-6">
	      	<p class="pull-right" style="color:#fff; margin-top:45px; font-size:65%;">
	      	  &copy; copyright  2016 <a href="http://www.">STIS</a>

	      </p>
	      	</div>
	      </div>
	    </div>
	  </div>

        <script src="{{ URL::asset('assets/js/'.Asset::scripts('frontend')) }}"></script>
        

	    @yield('scripts')

        @if (App::environment() == 'production')
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-53903425-1', 'auto');
          ga('send', 'pageview');

        </script>
        @endif

	</body>
</html>
