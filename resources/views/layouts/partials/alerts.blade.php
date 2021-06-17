<div id="app-alerts">
	@if(session('primary'))
		<div class="alert alert-primary alert-dismissible shadow-soft mt-1" role="alert">
			{{session('primary')}}
		</div>
	@endif

	@if(session('secondary'))
		<div class="alert alert-secondary alert-dismissible shadow-soft mt-1" role="alert">
			{{session('secondary')}}
		</div>
	@endif

	@if(session('danger'))
		<div class="alert alert-danger alert-dismissible shadow-soft fade show mt-1" role="alert">
			<span>@fas('fire','fa-fw') <b>{{__('Attention')}}!!!</b></span><br/>
			<span class="alert-inner--text">{{session('danger')}}</span>
		</div>
	@endif

	@if(session('warning'))
		<div class="alert alert-warning alert-dismissible shadow-soft fade show mt-1" role="alert">
			<span>@far('bell','fa-fw') <b>{{__('Warning')}}!!!</b></span><br/>
			<span class="alert-inner--text">{{session('warning')}}</span>
		</div>
	@endif

	@if(session('success'))
		<div class="alert alert-success alert-dismissible shadow-soft fade show mt-1" role="alert">
			<span>@far('thumbs-up','fa-fw') <b>{{__('Success')}}!!!</b></span><br/>
			<span class="alert-inner--text">{{session('success')}}</span>
		</div>
	@endif

	@if(session('info'))
		<div class="alert alert-info alert-dismissible shadow-soft fade show mt-1" role="alert">
			<span class="alert-inner--icon">@far('thumbs-up','fa-fw')</span>
			<span class="alert-inner--text">{{session('info')}}</span>
		</div>
	@endif

	@if(session('light'))
		<div class="alert alert-light alert-dismissible shadow-soft mt-1" role="alert">
			{{session('light')}}
		</div>
	@endif

	@if(session('dark'))
		<div class="alert alert-dark alert-dismissible shadow-soft mt-1" role="alert">
			{{session('dark')}}
		</div>
	@endif
</div>

@if(session('error'))
	<div class="alert alert-danger shadow-soft mt-1" role="alert">
		{{session('error')}}
	</div>
@endif

@if(count($errors) > 0)
	<div class="mt-1 alert alert-danger" role="alert">
		<span>@fas('fire','fa-fw') <b>{{trans('general.alert_errors')}}</b></span>
		<ul class="my-0">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<script>
	// $(document).ready(function() {
		// 	$("#app-alerts").hide();
		// 	$("#app-alerts").fadeTo(15000, 500).slideUp(500, function() {
			// 		$("#app-alerts").slideUp(500);
			// 	});
			// });
</script>
