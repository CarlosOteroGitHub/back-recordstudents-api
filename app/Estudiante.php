<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre', 'nacimiento'];
    
    public function asistencias()
    {
        return $this->hasMany(asistencia::class);
    }
}
