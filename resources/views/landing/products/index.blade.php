@extends('landing.template.index')
@section('contenido')
<div class="container-fluid bg-primary hero-header">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Descubre nuestra selección exclusiva</h1>
            <p class="h4 text-white">Explora la variedad y calidad de lo que tenemos para ofrecer</p>
        </div>
    </div>
</div>

<!-- Sección de filtro -->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5">
        <form method="GET" action="{{ route('products.index') }}">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nombre" class="form-label">Producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Buscar por Producto" value="{{ request('nombre') }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <select class="form-select" id="marca" name="marca">
                        <option value="">Selecciona una marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}" {{ request('marca') == $marca->id ? 'selected' : '' }}>{{ $marca->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="categoria" class="form-label">Categoría</label>
                    <select class="form-select" id="categoria" name="categoria">
                        <option value="">Selecciona una categoría</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ request('categoria') == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Buscar</button>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('products.index') }}" class="btn btn-info w-100">Limpiar filtros</a>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($productos as $item)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        @if ($item->descuento > 0)
                            <div class="badge bg-info text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                        @endif
                        <img class="card-img-top" src="{{ asset('storage/' . $item->archivo) }}" alt="{{ $item->nombre }}">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder product-name">{{ $item->nombre }}</h5>
                                <!-- Product price-->
                                ${{ $item->precio }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-info mt-auto" href="{{ url('/products', $item) }}">Ver más</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $productos->links() }}
        </div>
    </div>
</section>

<style>
    .product-name {
        white-space: nowrap;       /* Evita saltos de línea */
        overflow: hidden;          /* Oculta el texto que excede */
        text-overflow: ellipsis;   /* Muestra los "..." cuando el texto es demasiado largo */
        max-width: auto;          /* Ajusta el ancho máximo para el texto */
        display: block;            /* Asegura que se comporte como un bloque */
    }
</style>

@endsection