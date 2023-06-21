<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'sku',
        'titulo',
        'imagen',
        'descripcion',
        'precio',
        'categoria',
    ];
}
