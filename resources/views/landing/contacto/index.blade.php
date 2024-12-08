@extends('landing.template.index')
@section('contenido')
<div class="container-fluid bg-info py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Contactanos</h1>
            <a href="{{ url('/') }}" class="h4 text-white">Inicio</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">Contacto</a>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-info text-uppercase">Contactanoss</h5>
                        <h1 class="display-6 mb-4">No dudes en escribirnos</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-info me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Direcciòn</h5>
                            <span>Guayaquil - Ecuador</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-info me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Correo</h5>
                            <span>info@petcare.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-info me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Celular</h5>
                            <span>0981714966</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <img class="card-img-top mb-5 mb-md-0" src="{{ asset('./assets/img/vetnosotros.jpg') }}" alt="...">
            </div>
            <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d63720844.68626046!2d-110.92099191354491!3d-12.894103877883666!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1733698194181!5m2!1ses!2sec" frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

@include('landing.componentes.servicios')
@include('landing.componentes.nosotros')

@endsection