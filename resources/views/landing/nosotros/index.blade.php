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
        <p>Somos una clínica veterinaria comprometida con el bienestar y la salud de las mascotas, brindando atención integral con productos y servicios de alta calidad. Trabajamos con dedicación, empatía y profesionalismo para mejorar la vida de los animales y fortalecer el vínculo con sus dueños.</p>
      </div>
      <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <h1 class="text-center">Visión</h1>
        <p>Ser un referente en el cuidado animal, reconocidos por nuestra excelencia en servicios veterinarios y por proporcionar soluciones innovadoras que garanticen la salud y felicidad de las mascotas, posicionándonos como una clínica líder en el ámbito local y regional.</p>
      </div>
    </div>
  </div>
</section

@include('landing.componentes.nosotros')

@endsection