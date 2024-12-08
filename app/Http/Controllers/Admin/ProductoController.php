<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::orderBy('nombre', 'ASC')->get();
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas = Marca::orderBy('nombre', 'ASC')->get();
        $categorias = Categoria::orderBy('nombre', 'ASC')->get();
        return view('admin.productos.create', compact('marcas', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|min:3|max:30',
            'descripcion' => 'nullable|max:5000',
            'id_categoria' => 'required|numeric',
            'id_marca' => 'required|numeric',
            'precio' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'descuento' => 'nullable|numeric|between:0,100|regex:/^\d+(\.\d{1,2})?$/',
            'archivo' => 'required|file|mimes:png,jpeg,jpg,webp|max:2048',
        ]);
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $rutaArchivo = Storage::disk('public')->putFile('archivos', $archivo);
        }
        Producto::create([
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'id_categoria' => $data['id_categoria'],
            'id_marca' => $data['id_marca'],
            'precio' => $data['precio'],
            'descuento' => $data['descuento'] ?? 0,
            'id_marca' => $data['id_marca'],
            'archivo' => $rutaArchivo,
            'estado' => 1,
        ]);
        return redirect('productos')->with('success', 'Producto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Producto::findOrFail($id);
        $marcas = Marca::orderBy('nombre', 'ASC')->get();
        $categorias = Categoria::orderBy('nombre', 'ASC')->get();
        return view('admin.productos.show', compact('item', 'marcas', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Producto::findOrFail($id);
        $data = $request->validate([
            'nombre' => 'required|string|min:3|max:30',
            'descripcion' => 'nullable|max:5000',
            'id_categoria' => 'required|numeric',
            'id_marca' => 'required|numeric',
            'precio' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'descuento' => 'nullable|numeric|between:0,100|regex:/^\d+(\.\d{1,2})?$/',
            'archivo' => 'nullable|file|mimes:png,jpeg,jpg,webp|max:2048',
        ]);
        
        // Asignar todos los valores del formulario al modelo excepto el archivo
        $item->fill($data);
        
        // Manejar el archivo si se sube uno nuevo
        if ($request->hasFile('archivo')) {
            // Eliminar el archivo existente si existe
            if ($item->archivo) {
                Storage::disk('public')->delete($item->archivo);
            }
            // Subir y asignar el nuevo archivo
            $item->archivo = $request->file('archivo')->store('archivos', 'public');
        }
        
        // Guardar los cambios en el modelo
        $item->save();
        return redirect('productos')->with('success', 'Producto actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Producto::findOrFail($id);
        try {
            if ($item->archivo && Storage::disk('public')->exists($item->archivo)) {
                Storage::disk('public')->delete($item->archivo);
            }
            $item->delete();
            return redirect('productos')->with('success', 'Producto eliminada exitosamente');
        } catch (\Exception $e) {
            return redirect('productos')->with('error', 'Mantiene registros relacionados.');
        }
    }

    public function toggleStatus($id)
    {
        $item = Producto::findOrFail($id);
        $item->estado = !$item->estado;
        $item->save();

        return response()->json([
            'estado' => $item->estado
        ]);
    }
}
