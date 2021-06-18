@extends('frontend.layouts.main')
@section('content')
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="h4 card-header">{{__('Change password')}}</div>
			<div class="card-text m-2">
				<form class="row g-3" action="{{route('auth.password.update')}}" method="post"> @csrf
					<div class="col-md-4">
						<label for="current_password" class="form-label">{{__('Current password')}}</label>
						<div class="input-group">
							<span class="input-group-text">@fas('lock','fa-fw')</span>
							<input type="password" class="form-control" name="current_password" id="current_password" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="new_password" class="form-label">{{__('New password')}}</label>
						<div class="input-group">
							<span class="input-group-text">@fas('lock','fa-fw')</span>
							<input type="password" class="form-control" name="new_password" id="new_password" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="new_password_confirmation" class="form-label">{{__('Confirm new password')}}</label>
						<div class="input-group">
							<span class="input-group-text">@fas('lock','fa-fw')</span>
							<input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" />
						</div>
					</div>
				</div>
				<div class="card-footer">
				  <div class="ms-auto"><button class="btn btn-primary" type="submit">{{__('Update password')}}</button></div>
				</div>
			</form>
		</div>
	</div>
@endsection
