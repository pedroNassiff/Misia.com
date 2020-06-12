
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

<!-- Phrase -->
<section class="phrase pt-5">
  <div class="container pb-4">
    <div class="row">
      <div class="col-12 text-right">
        <h3 class="h3 g-semibolditalic">
          Nadie se conoce mejor que vos <br />misma, confiá y seguí tu estilo 
        </h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-4">
      <img class="img-fluid" src="{{ asset('assets/images/JPG/phrase-1.jpg') }}" alt="" style="width: 100%"/>
    </div>
    <div class="col-12 col-md-4">
      <img class="img-fluid" src="{{ asset('assets/images/JPG/phrase-2.jpg') }}" alt="" style="width: 100%"/>
    </div>
    <div class="col-12 col-md-4">
      <img class="img-fluid" src="{{ asset('assets/images/JPG/phrase-3.jpg') }}" alt="" style="width: 100%"/>
    </div>
  </div>
</section>
<!-- endPhrase -->

@endsection
