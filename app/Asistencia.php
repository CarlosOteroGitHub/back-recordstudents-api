<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = ['fechahora', 'estudiante_id', 'sesion_id'];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function sesion()
    {
        return $this->belongsTo(Sesion::class);
    }
}
