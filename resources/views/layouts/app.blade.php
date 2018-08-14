<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>{{ __('Hotel Booking') }}</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css') }}">
            <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css') }}">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem"><a href="{{ route('front') }}">{{ __('Home') }}</a></li>
            <li role="menuitem"><a href="{{ route('clients') }}">{{ __('Clients') }}</a></li>
          </ul>
        </div>
		<div class="top-bar-right">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem is-dropdown-submenu-parent opens-right">
				<a href=""><i class="fas fa-globe-americas"></i>

{{ __('Language') }}</a>
				<ul class="menu submenu is-dropdown-submenu first-sub vertical" role="menubar">
				@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
					<li>
						<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
							{{ $properties['native'] }}
						</a>
					</li>
				@endforeach
				</ul>
			</li>
			@if (Auth::check())
			<li role="menuitem">
				<a href="{{ route('logout') }}"
				   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				   {{ __('Logout') }}
                </a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
			</li>
			@endif
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->
	<ul>
    
</ul>

    <br>
    
    
    
@yield('content')
    

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Powered by Laravel {{ App::VERSION() }}. © {{ date('Y') }}</li>
      </ul>
    </div>

        <script src="{{ asset('js/vendor/jquery.js') }}"></script>
		
        <script src="{{ asset('js/vendor/what-input.js') }}"></script>
		
        <script src="{{ asset('js/vendor/foundation.js') }}"></script>
		
        <script src="{{ asset('js/app.js') }}"></script>
		<script type="text/javascript">
			$(document).foundation();
		</script>
        <script src="{{ asset('pickadate/lib/picker.js') }}"></script>
        <script src="{{ asset('pickadate/lib/picker.date.js') }}"></script>
        <script>
            $('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
		
    </body>
</html>