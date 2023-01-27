<?php

namespace Database\Factories;

use App\Models\Aula;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idGrupo' => fake()->randomNumber(2),
            'numLista' => fake()->randomNumber(2),
            'idAula' => Aula::all()->random()->idAula,
            'idOrdenador' => Aula::all()->random()->idOrdenador,
        ];
    }
}
