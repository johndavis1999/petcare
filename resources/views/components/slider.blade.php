
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title mb-4">
            <h1 class="display-5 mb-0">Marcas principales</h1>
        </div>
        <div class="large-12 columns">
            <div class="owl-carousel owl-loaded owl-drag">
                @foreach ($items as $item)
                    <div class="item d-flex justify-content-center align-items-center" style="max-height: 100px;">
                        <img class="img-fluid" style="width: auto; max-height: 100px;" src="{{ asset('storage/' . $item->archivo) }}" alt="{{ $item->nombre }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
