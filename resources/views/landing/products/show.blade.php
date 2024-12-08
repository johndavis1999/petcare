@extends('landing.template.index')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div class="card mb-3">
                <img class="card-img img-fluid" src="{{ asset('storage/' . $producto->archivo) }}" alt="Card image cap" id="product-detail">
            </div>
            {{--
            <div class="row">
                <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                    <div class="carousel-inner product-links-wap" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="{{ asset('storage/' . $producto->archivo) }}" alt="Product Image 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="{{ asset('storage/' . $producto->archivo) }}" alt="Product Image 4">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="{{ asset('storage/' . $producto->archivo) }}" alt="Product Image 7">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            --}}
        </div>
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2">
                        {{ $producto->nombre }}
                    </h1>
                    <p class="h3 py-2">${{ $producto->precio }}</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Marca:</h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong>{{ $producto->marca->nombre }}</strong></p>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Categoria:</h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong>{{ $producto->categoria->nombre }}</strong></p>
                        </li>
                    </ul>

                    <h6>Descripción:</h6>
                    {{ $producto->descripcion }}

                    <form>
                        <div class="row mt-3">
                            <div class="col d-grid">
                                <a href="https://api.whatsapp.com/send/?phone=593981714966&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-success btn-lg" name="submit" value="buy"><i class="fab fa-whatsapp"></i> Solicitar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<x-slider-productos />

@include('landing.componentes.servicios')

@endsection