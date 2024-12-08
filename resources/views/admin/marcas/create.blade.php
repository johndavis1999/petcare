@extends('admin.template.index')
@section('contenido')
    <div class="d-sm-flex align-items-center mb-3">
        <div class="">
            <h3 class="pe-3">
                Crear Marca
            </h3>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a type="button" class="btn btn-warning" href="{{ url('/marcas') }}"><i class="fas fa-plus-circle"></i> Nuevo</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card"><div class="card-header px-4 py-3">
                <h5 class="mb-0">Crear Marca</h5>
            </div>
            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-border-danger alert-dismissible fade show">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-danger">
                                <span class="material-icons-outlined fs-2">report_gmailerrorred</span>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-danger">Advertencia</h6>
                                @foreach ($errors->all() as $error)
                                    <div class="">{{ $error }}</div>
                                @endforeach
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="row g-3 needs-validation" action="{{ url('marcas') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input 
                            type="text" 
                            class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" 
                            id="nombre" 
                            name="nombre" 
                            placeholder="Nombre" 
                            value="{{ old('nombre') }}" 
                        >
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre') }}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group {{ $errors->has('archivo') ? 'has-error' : '' }} has-feedback">
                            <label for="archivo" class="col-md-3 col-form-label">Archivo</label>
                            <div class="p-0">
                                <input type="file" id="archivo" name="archivo" multiple>
                                <div class="invalid-feedback d-inline">
                                    {{ $errors->first('archivo') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#archivo").fileinput({
                theme: 'fa5',
                language: 'es',
                allowedFileExtensions: ['jpg', 'png', 'jpeg', 'webp'],
                maxFileSize: 2240,
                maxFileCount: 1,
                showUpload: false,
                showRemove: true,
                showPreview: true
            });
        });
    </script>
@endsection