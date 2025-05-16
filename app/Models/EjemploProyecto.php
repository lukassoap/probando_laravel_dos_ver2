<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EjemploProyecto extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
    ];
}
