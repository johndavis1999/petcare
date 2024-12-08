@extends('landing.template.index')
@section('contenido')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Nosotros</h1>
            <a href="{{ url('/') }}" class="h4 text-white">Inicio</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">Nosotros</a>
        </div>
    </div>
</div>

<section id="about" class="about section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <h1 class="text-center">Misión</h1>
          <p>Somos una empresa que busca satisfacer las necesidades de las personas o instituciones en el ámbito de la salud brindando productos de la mejor calidad a un precio justo, con un servicio ágil, profesional y calidez humana, innovando constantemente por la vida de los seres humanos.</p>
        </div>
        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <h1 class="text-center">Misión</h1>
          <p>Ofrecer todos aquellos medicamentos e insumos médicos que los clientes necesitan en una forma ágil y oportuna llegando a ser una empresa que venda productos de especialidad y lograr ubicarnos como un referente en el mercado farmacéutico.</p>
        </div>
      </div>
    </div>

  </section>

@include('landing.componentes.nosotros')

<x-slider />

@endsection