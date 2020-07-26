
@extends('layouts.layout')

@section('content')

<!-- WeAreMisia -->
<section class="we-are-misia">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 h-condensed pr-0">
        <h1 class="step mb-5"> #SOMOSMISIA </h1>
        <div class="misia-text h-condensed">
          <p class="mb-4">Dos amigas que se asociaron por un proyecto en común: crear una marca de vestidos de fiesta, hechos y a medida, versátiles, elegantes, accesibles y con mucha onda.</p>
          <p class="">Nuestro TEAM está compuesto por:</p>
          <ul class="">
            <li>• May, diseñadora de indumentaria que desde chiquita está en contacto con el mundo de la moda. Ella es la encargada de la producción de diseño, moldería y corte de cada vestido, enfocándose en cada detalle. Inquieta y curiosa, bailarina de tango y amante de la astronomía</li>
            <li>• Mery, arquitecta y capacitada en diseño gráfico, es la encargada de la comunicación en las redes y marketing de la marca. Entusiasta de la fotografía y de la gastronomía.  <br /> Creemos fielmente que el trabajo en el equipo es fundamental, porque es ahí donde aflora nuestra creatividad y donde sacamos lo mejor de cada una para MISIA.</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-5 offset-2">
        <img class="img-fluid" src="{{ asset('assets/images/JPG/we-are-misia.jpg') }}" alt="Somos Misia" />
      </div>
    </div>
  </div>
</section>
<!-- endWeAreMisia -->
@endsection
