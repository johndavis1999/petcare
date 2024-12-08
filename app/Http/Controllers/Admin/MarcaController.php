<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::orderBy('nombre', 'ASC')->get();
        return view('admin.marcas.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.marcas.create');
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
        Marca::create([
            'nombre' => $data['nombre'],
            'archivo' => $rutaArchivo,
            'estado' => 1,
        ]);
        return redirect('marcas')->with('success', 'Marca creada exitosamente');
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
        $item = Marca::findOrFail($id);
        return view('admin.marcas.show', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Marca::findOrFail($id);
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
        return redirect('marcas')->with('success', 'Marca actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Marca::findOrFail($id);
        try {
            if ($item->archivo && Storage::disk('public')->exists($item->archivo)) {
                Storage::disk('public')->delete($item->archivo);
            }
            $item->delete();
            return redirect('marcas')->with('success', 'Marca eliminada exitosamente');
        } catch (\Exception $e) {
            return redirect('marcas')->with('error', 'Mantiene registros relacionados.');
        }
    }

    public function toggleStatus($id)
    {
        $item = Marca::findOrFail($id);
        $item->estado = !$item->estado;
        $item->save();

        return response()->json([
            'estado' => $item->estado
        ]);
    }
}
