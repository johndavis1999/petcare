@extends('admin.template.index')
@section('contenido')
    <div class="d-sm-flex align-items-center mb-3">
        <div class="">
            <h3 class="pe-3">
                Productos
            </h3>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a type="button" class="btn btn-outline-primary" href="{{ url('/productos/create') }}"><i class="fas fa-plus-circle"></i> Nuevo</a>
            </div>
        </div>
    </div>
    <hr/>
    <div class="card rounded-4">
        <div class="card-body">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $item)
                        <tr>
                            <td>
                                <div class="d-inline-flex align-items-center">
                                    <span>{{ $item->nombre }}</span>
                                    <div class="dropdown ms-2">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-cogs"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <!-- Opción de Editar -->
                                            <li><a class="dropdown-item" href="{{ route('productos.edit', $item->id) }}">Editar</a></li>
                                            <!-- Opción de Eliminar -->
                                            <li>
                                                <form action="{{ route('productos.destroy', $item->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Eliminar</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <td>
                                <img src="{{ asset('storage/' . $item->archivo) }}" alt="Imagen de {{ $item->nombre }}" style="width: 50px; height: auto;">
                            </td>
                            <td>
                                <span>{{ $item->categoria->nombre }}</span>
                            </td>
                            <td>
                                <span>{{ $item->marca->nombre }}</span>
                            </td>
                            <td>
                                <button 
                                    class="btn btn-sm toggle-status-btn {{ $item->estado ? 'btn-success' : 'btn-danger' }}" 
                                    data-id="{{ $item->id }}"
                                    onclick="toggleStatus('{{ url('/productos/toggle-status') }}', {{ $item->id }})">
                                    {{ $item->estado ? 'Disponible' : 'No disponible' }}
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection