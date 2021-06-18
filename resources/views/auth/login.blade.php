@extends('frontend.layouts.main')
@section('content')
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="h4 card-header">{{__('Login')}}</div>
			<div class="card-text m-2">
				<form class="row g-3" action="{{route('auth.postLogin')}}" method="post"> @csrf
					<div class="col-md-12">
						<label for="login" class="form-label">{{__('Username or E-mail')}}</label>
						<div class="input-group">
							<span class="input-group-text">@fas('user','fa-fw')</span>
							<input type="text" class="form-control" name="login" id="login">
						</div>
					</div>
					<div class="col-md-12">
						<label for="password" class="form-label">{{__('Password')}}</label>
						<div class="input-group">
							<span class="input-group-text">@fas('lock','fa-fw')</span>
							<input type="password" class="form-control" name="password" id="password">
						</div>
					</div>
				</div>
				<div class="card-footer">

					<div class="d-flex bd-highlight">
					  <div class="me-auto bd-highlight">
						  <div class="form-check">
	  						<input class="form-check-input" type="checkbox" name="remember" id="remember">
	  						<label class="form-check-label" for="remember">{{__('Remember me')}}</label>
	  					</div>
					  </div>
					  <div class="bd-highlight me-1"><a href="#" class="btn btn-info w-100">{{__('Forgot password?')}}</a></div>
					  <div class="bd-highlight"><button class="btn btn-primary w-100" type="submit">{{__('Login')}}</button></div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
