<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index(Request $request)
    {
        $query = Producto::orderBy('nombre', 'ASC')->where('estado', 1);

        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        if ($request->filled('marca')) {
            $query->where('id_marca', $request->marca);
        }

        if ($request->filled('categoria')) {
            $query->where('id_categoria', $request->categoria);
        }

        $productos = $query->paginate(20);
        $marcas = Marca::where('estado', 1)->get();
        $categorias = Categoria::where('estado', 1)->get();
        
        return view('landing.products.index', compact('productos', 'marcas', 'categorias'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return redirect('/')->with('error', 'Producto no encontrado');
        }

        $productos = Producto::where('id_categoria', $producto->id_categoria)
                            ->where('id_marca', $producto->id_marca)
                            ->limit(10)
                            ->get();

        return view('landing.products.show', compact('producto', 'productos'));
    }

}
