<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    public function oficials()
    {
        return $this->hasMany(Oficial::class);
    }

    protected $fillable = [
        'nombre_completo',
        'foto_institucion',
    ];
}
