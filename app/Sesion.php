<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $fillable = ['nombre', 'fecha', 'responsable'];
    
    public function asistencias()
    {
        return $this->hasMany(asistencia::class);
    }
}
