<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    public function alumno()
    {
        return $this->hasMany(Alumno::class);
    }
    public function incidencia()
    {
        return $this->belongsTo(Incidencia::class);
    }
}
