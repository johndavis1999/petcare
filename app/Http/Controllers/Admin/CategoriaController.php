<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('nombre', 'ASC')->get();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|min:3|max:30',
            'archivo' => 'required|file|mimes:png,jpeg,jpg,webp|max:2048',
        ]);
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $rutaArchivo = Storage::disk('public')->putFile('archivos', $archivo);
        }
        Categoria::create([
            'nombre' => $data['nombre'],
            'archivo' => $rutaArchivo,
            'estado' => 1,
        ]);
        return redirect('categorias')->with('success', 'Categoria creada exitosamente');
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
        $item = Categoria::findOrFail($id);
        return view('admin.categorias.show', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Categoria::findOrFail($id);
        $data = $request->validate([
            'nombre' => 'required|string|min:3|max:30',
            'archivo' => 'nullable|file|mimes:png,jpeg,jpg,webp|max:2048',
        ]);
        $item->nombre = $data['nombre'];
        if ($request->hasFile('archivo')) {
            Storage::disk('public')->delete($item->archivo);
            $item->archivo = $request->file('archivo')->store('archivos', 'public');
        }
        $item->save();
        return redirect('categorias')->with('success', 'Categoria actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Categoria::findOrFail($id);
        try {
            if ($item->archivo && Storage::disk('public')->exists($item->archivo)) {
                Storage::disk('public')->delete($item->archivo);
            }
            $item->delete();
            return redirect('categorias')->with('success', 'Categoria eliminada exitosamente');
        } catch (\Exception $e) {
            return redirect('categorias')->with('error', 'Mantiene registros relacionados.');
        }
    }

    public function toggleStatus($id)
    {
        $item = Categoria::findOrFail($id);
        $item->estado = !$item->estado;
        $item->save();

        return response()->json([
            'estado' => $item->estado
        ]);
    }
}
