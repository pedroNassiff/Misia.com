
@extends('layouts.layout')

@section('content')

<!-- Slider -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 content-slider">
        <div class="main-slider">
          <div><img class="img-fluid" src="{{ asset('assets/images/JPG/slider.jpg') }}" alt="sldier"/></div>
          <div><img class="img-fluid" src="{{ asset('assets/images/JPG/slider.jpg') }}" alt="sldier"/></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- endSlider -->


@endsection
