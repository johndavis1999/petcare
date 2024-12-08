<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title mb-4">
            <h1 class="display-5 mb-0">Productos</h1>
        </div>
        <div class="large-12 columns">
            <div class="owl-carousel owl-loaded owl-drag">
                @foreach ($items as $item)
                    <div class="">
                        <div class="card h-100">
                            <!-- Product image-->
                            @if ($item->descuento > 0)
                                <div class="badge bg-secondary text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
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
                                <div class="text-center"><a class="btn btn-outline-secondary mt-auto" href="{{ url('/products', $item) }}">Ver más</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>            
        </div>
    </div>
</div>

<style>
    .product-name {
        white-space: nowrap;       /* Evita saltos de línea */
        overflow: hidden;          /* Oculta el texto que excede */
        text-overflow: ellipsis;   /* Muestra los "..." cuando el texto es demasiado largo */
        max-width: 150px;          /* Ajusta el ancho máximo para el texto */
        display: block;            /* Asegura que se comporte como un bloque */
    }
</style>