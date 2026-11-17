<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    protected $fillable = [
        'orden', 'numero', 'piloto', 'copiloto', 'vehiculo', 'localidad', 'clase',
    ];

    protected function casts(): array
    {
        return ['orden' => 'integer'];
    }
}
