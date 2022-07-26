<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsuarioDomicilio>
 */
class UsuarioDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'domicilio' => fake()->name(),
            'numero_exterior' =>  fake()->numberBetween(5, 100),
            'colonia' => fake()->name(),
            'cp' => fake()->numberBetween(5, 100),
            'ciudad' => fake()->name(),
        ];
    }
}
