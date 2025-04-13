<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rango extends Model
{
    public function oficials()
    {
        return $this->hasMany(Oficial::class);
    }

    protected $fillable = [
        'nombre',
        'nivel_interno',
        'foto_rango',
    ];
}
