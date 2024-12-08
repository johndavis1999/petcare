@extends('landing.template.index')
@section('contenido')
        
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('./assets/img/portada2.png') }}" alt="Image">
            </div>
        </div>
    </div>
</div>
        
@include('landing.componentes.nosotros')
<x-slider-productos />
<x-slider-categorias />
@include('landing.componentes.servicios')

@endsection