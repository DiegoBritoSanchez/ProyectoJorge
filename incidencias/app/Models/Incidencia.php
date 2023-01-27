<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
    public function averia()
    {
        return $this->hasMany(Averia::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
