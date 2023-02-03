<?php

namespace Database\Factories;

use App\Models\Aula;
use App\Models\Averia;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class IncidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $idAula = Aula::all()->random()->idAula;
        $idOrdenador = Aula::all()->where('idAula', $idAula)->random()->idOrdenador;

        return [
            'idAula' => $idAula,
            'idOrdenador' => $idOrdenador,
            'idProfesor' => User::all()->random()->id,
            'idAveria' => Averia::all()->random()->id,
            'observaciones' => fake()->text(),
        ];
    }
}
