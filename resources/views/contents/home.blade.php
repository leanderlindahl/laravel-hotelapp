@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-6 columns">
        <h4>{{ __('Hotel Booking App') }}</h4>
        <img class="thumbnail" src="images/attractions.jpg">
      </div>
      <div class="medium-6 large-5 columns">
		@lang('content.hotel_description')
      </div>
    </div>
@endsection