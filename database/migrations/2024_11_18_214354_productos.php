<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->mediumText('descripcion')->nullable();
            $table->string('archivo')->nullable();
            $table->decimal('precio', 10, 2)->default(0);
            $table->decimal('descuento', 5, 2)->default(0);
            $table->boolean('estado')->default(false);
            $table->unsignedBigInteger('id_marca');
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps();

            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos'); // Elimina la tabla si existe
    }
};
