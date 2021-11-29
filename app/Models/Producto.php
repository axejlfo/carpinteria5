<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_producto', 'descripcion_producto','precio_producto','cantidad_producto', 'categoria_id' ];
}
