@extends('landing.template.index')
@section('contenido')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
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
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Contactanoss</h5>
                        <h1 class="display-6 mb-4">No dudes en escribirnos</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Direcciòn</h5>
                            <span>Alborada Tercera Etapa MZ CB V11, Guayaquil - Ecuador</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Correo</h5>
                            <span>info@oncofarmsa.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Celular</h5>
                            <span>096 972 12270</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="...">
            </div>
            <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.024704619769!2d-79.9035454250324!3d-2.1442219978366905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6dc440fa8561%3A0xb32f310c7aa2f9b!2sFarmacia%20Oncofarm!5e0!3m2!1ses-419!2sec!4v1733183612391!5m2!1ses-419!2sec" frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

@include('landing.componentes.servicios')
@include('landing.componentes.nosotros')

@endsection