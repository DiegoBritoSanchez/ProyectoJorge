<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aula>
 */
class AulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idAula'=> fake()->randomElement(['aula1', 'aula2', 'aula3', 'aula4']),
            'idOrdenador'=> fake()->randomNumber(3),
            

        ];
    }
}
