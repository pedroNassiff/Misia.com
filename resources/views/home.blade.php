
@extends('layouts.layout')

@section('content')

<!-- Slider -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 content-slider">
        <div class="main-slider">
          <div>
            <img class="img-fluid" src="{{ asset('assets/images/JPG/slider.jpg') }}" alt="sldier"/>
            <div class="slide-text text-center">
              <h1 class="mb-4 g-bolditalic">
                ELEGÍ, CREÁ Y ENCARGÁ TU<br/>VESTIDO DE FIESTA A MEDIDA
              </h1>
              <a class="btn h-condensed btn-generic" href="#">
                COMENZAR A CREAR
              </a>
            </div>
          </div>
          <div>
            <img class="img-fluid" src="{{ asset('assets/images/JPG/slider.jpg') }}" alt="sldier"/>
            <div class="slide-text text-center">
              <h1 class="mb-4 g-bolditalic">
                ELEGÍ, CREÁ Y ENCARGÁ TU<br/>VESTIDO DE FIESTA A MEDIDA
              </h1>
              <a class="btn h-condensed btn-generic" href="#">
                COMENZAR A CREAR
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- endSlider -->


@endsection
