@php
    $route = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/" ><img src="/img/mfis-logo.png" alt="mfis_logo" id="mfis_logo"></a>
      <a class="navbar-brand" href="/" ><img src="/img/mfis-dark.png" alt="mfis_logo" id="mfis_dark"></a>
      <button id="nav"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{$route == 'home'? 'active': ''}}"><a href="{{route('home')}}" class="nav-link">Home</a></li>
          <li class="nav-item {{$route == 'pages.about'? 'active': ''}}"><a href="{{route('pages.about')}}" class="nav-link">About</a></li>
          <li class="nav-item {{$route == 'pages.watch'? 'active': ''}}"><a href="/watch-us" class="nav-link">WatchUs</a></li>
          <li class="nav-item {{$route == 'pages.events'? 'active': ''}}"><a href="/events" class="nav-link">Events</a></li>
          <li class="nav-item cta"><a href="/contact" class="nav-link"><span>Contact</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
