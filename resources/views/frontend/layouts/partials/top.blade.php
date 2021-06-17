<nav class="navbar navbar-expand-lg navbar-light bg-info">
	<span class="navbar-brand mx-2"><img class="border border-light" src="{{asset('images/ath.png')}}" alt="{{config('app.name')}}" height="48"></span>
	  <div class="container">
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
	<li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('home')}}">@fas('home','fa-fw') {{__('Home')}}</a></li>
  </ul>
</div>
</div>
@auth
	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item dropdown shadow bg-light rounded me-2">
	<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	  {{auth()->user()->username}}
  </a>
	<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdown">
	  {{-- <li><a class="dropdown-item" href="{{route('user.profile')}}">@fas('passport','fa-fw text-primary') {{__('My Profile')}}</a></li> --}}
	  <li><hr class="dropdown-divider"></li>
	  <li><a class="dropdown-item" href="{{route('auth.logout')}}">@fas('sign-out-alt','fa-fw text-danger') {{__('Logout')}}</a></li>
	</ul>
  </li>
</ul>
@endauth
</nav>
