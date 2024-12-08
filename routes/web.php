<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MarcaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\CategoriaController;
//Landing
use App\Http\Controllers\Landing\DashboardLandingController;
use App\Http\Controllers\Landing\ProductController;
use App\Http\Controllers\Landing\NosotrosController;
use App\Http\Controllers\Landing\ContactoController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('/', DashboardLandingController::class);
Route::resource('/products', ProductController::class);
Route::resource('/nosotros', NosotrosController::class);
Route::resource('/contacto', ContactoController::class);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('/marcas', MarcaController::class);
    Route::post('/marcas/toggle-status/{id}', [MarcaController::class, 'toggleStatus'])->name('marcas.toggle-status');
    Route::resource('/categorias', CategoriaController::class);
    Route::post('/categorias/toggle-status/{id}', [CategoriaController::class, 'toggleStatus'])->name('categorias.toggle-status');
    Route::resource('/productos', ProductoController::class);
    Route::post('/productos/toggle-status/{id}', [ProductoController::class, 'toggleStatus'])->name('productos.toggle-status');
});

require __DIR__.'/auth.php';
