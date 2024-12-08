@extends('admin.template.index')
@section('contenido')
    <div class="d-sm-flex align-items-center mb-3">
        <div class="">
            <h3 class="pe-3">
                Actualizar Producto
            </h3>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a type="button" class="btn btn-warning" href="{{ url('/productos') }}"><i class="fas fa-long-arrow-alt-left"></i> Volver</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="card"><div class="card-header px-4 py-3">
                <h5 class="mb-0">Actualizar Producto</h5>
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
                <form class="row g-3 needs-validation" action="{{ url('productos', $item) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="col-12">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input 
                                    type="text" 
                                    class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" 
                                    id="nombre" 
                                    name="nombre" 
                                    placeholder="Nombre" 
                                    value="{{ old('nombre', $item->nombre) }}" 
                                >
                                <div class="invalid-feedback">
                                    {{ $errors->first('nombre') }}
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" cols="4" rows="2" placeholder="Descripción del producto" style="height: 150px;">{{ old('descripcion', $item->descripcion) }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="id_categoria" class="form-label">Categoría</label>
                                <select 
                                    class="form-control {{ $errors->has('id_categoria') ? 'is-invalid' : '' }}" 
                                    id="id_categoria" 
                                    name="id_categoria"
                                >
                                    <option value="" selected disabled>Seleccione una categoría</option>
                                    @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" 
                                        @selected(old('id_categoria') == $categoria->id || $item->id_categoria == $categoria->id)>
                                        {{ $categoria->nombre }} xd
                                    </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_categoria') }}
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="id_marca" class="form-label">Marca</label>
                                <select 
                                    class="form-control {{ $errors->has('id_marca') ? 'is-invalid' : '' }}" 
                                    id="id_marca" 
                                    name="id_marca"
                                >
                                    <option value="" selected disabled>Seleccione una marca</option>
                                    @foreach ($marcas as $marca)
                                        <option value="{{ $marca->id }}" 
                                            @selected(old('id_marca') == $marca->id || $item->id_marca == $marca->id)>
                                            {{ $marca->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_marca') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <label for="precio" class="form-label">Precio</label>
                                    <input 
                                        type="text" 
                                        class="form-control {{ $errors->has('precio') ? 'is-invalid' : '' }}" 
                                        id="precio" 
                                        name="precio" 
                                        placeholder="$$$" 
                                        value="{{ old('precio', $item->precio) }}"
                                    >
                                    <div class="invalid-feedback">
                                        {{ $errors->first('precio') }}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="descuento" class="form-label">% Descuento</label>
                                    <input 
                                        type="text" 
                                        class="form-control {{ $errors->has('descuento') ? 'is-invalid' : '' }}" 
                                        id="descuento" 
                                        name="descuento" 
                                        placeholder="%%%" 
                                        value="{{ old('descuento', $item->descuento) }}"
                                    >
                                    <div class="invalid-feedback">
                                        {{ $errors->first('descuento') }}
                                    </div>
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

                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Guardar</button>
                            </div>
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
                showRemove: false,
                showPreview: true,
                initialPreview: [
                    @if($item->archivo)
                        "{{ asset('storage/' . $item->archivo) }}",
                    @endif
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [
                    {
                        caption: "{{ basename($item->archivo) }}",
                        key: 1
                    }
                ],
                overwriteInitial: true,
            });
        });
    </script>
@endsection