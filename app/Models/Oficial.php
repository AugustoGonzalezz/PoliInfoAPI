<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficial extends Model
{
    public function rango()
    {
        return $this->belongsTo(Rango::class);
    }

    public function institucion()
    {
        return $this->belongsTo(Institucion::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}