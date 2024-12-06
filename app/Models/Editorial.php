<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    static protected $table = "editorial";

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
    ];

}
