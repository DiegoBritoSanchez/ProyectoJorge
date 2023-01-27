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
        return [
            'idAula' =>Aula::all()->random()->id,
            'idOrdenador' =>Aula::all()->random()->idOrdenador,
             'idProfersor' =>User::all()->random()->id,
             'idAveria'=>Averia::all()->random()->idAveria,
             'observaciones'=> fake()->text(),
        ];
    }
}
