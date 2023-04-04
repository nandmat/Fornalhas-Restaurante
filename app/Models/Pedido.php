<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente',
        'mesa',
        'pratos',
        'status_id',
        'valor',
        'funcionarios_id'
    ];
}
