<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'referencia', 'precio', 'peso','categoria','stock','fecha_creacion'];

    public $timestamps = false;
    
}
