@extends('frontend.layouts.main')
@section('content')
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="h4 card-header">{{__('Registration')}}</div>
			<div class="card-text m-2">
				<form class="row g-3" action="{{route('auth.postRegister')}}" method="post"> @csrf
				  <div class="col-md-12">
					  <label for="username" class="form-label">{{__('Username')}}</label>
  					<div class="input-group">
  						<span class="input-group-text">@fas('user','fa-fw')</span>
  					  <input type="text" class="form-control" name="username" id="username" value="{{old('username')}}" autofocus />
  					</div>
				  </div>
				  <div class="col-md-12">
					<label for="email" class="form-label">{{__('E-mail address')}}</label>
					<div class="input-group">
						<span class="input-group-text">@fas('at','fa-fw')</span>
					  <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" />
					</div>
				  </div>
				  <div class="col-md-6">
					<label for="password" class="form-label">{{__('Password')}}</label>
					<div class="input-group">
						<span class="input-group-text">@fas('lock','fa-fw')</span>
						<input type="password" class="form-control" name="password" id="password" />
					</div>
				  </div>
				  <div class="col-md-6">
					  <label for="password_confirmation" class="form-label">{{__('Confirm password')}}</label>
					  <div class="input-group">
						  <span class="input-group-text">@fas('lock','fa-fw')</span>
						  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" />
					  </div>
				  </div>
			  </div>

			  <div class="card-footer d-flex bd-highlight">
			    <div class="bd-highlight">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="terms" id="terms" value="{{old('terms')}}" />
						<label class="form-check-label" for="terms">{{__('Agree to terms and conditions')}}</label>
					</div>
			    </div>
			    <div class="ms-auto p-2 bd-highlight"><button class="btn btn-primary" type="submit">{{__('Registration')}}</button></div>
			  </div>
			</form>
		</div>
	</div>
@endsection
