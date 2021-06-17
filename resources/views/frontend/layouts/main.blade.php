<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
	<head>
		<link href="{{asset('css/mwd-bs5.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/fontawesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		{{-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/ath.png')}}"> --}}
		@yield('css')

		<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		{{-- <script src="{{asset('js/fa5.min.js')}}"></script> --}}
		@yield('js')

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf_token" content="{{csrf_token()}}">
		@yield('meta')
		<title>{{config('app.name')}}{{(isset($title)?' | '.$title:'')}}</title>
	</head>
	<body class="antialiased">
		@include('frontend.layouts.partials.top')
		@include('layouts.partials.alerts')
		<div class="container-fluid mt-3 mb-5">
			<section class="pb-5">
				<div class="row">
					<div class="col-xl-12">
						@yield('content')
					</div>
				</div>
			</section>
		</div>
		@yield('scripts')
	</body>
</html>
