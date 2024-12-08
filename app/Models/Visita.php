<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table = 'categorias';
    public $timestamps = true;
    protected $fillable = [
        'fecha', 
        'pagina', 
        'ip', 
    ];
}
