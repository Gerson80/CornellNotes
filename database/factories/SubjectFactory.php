<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->sentence(5),
            'clave'=>fake()->bothify('???-####'),
            'ingenieria'=>fake()->randomElement(['isc','ier','iem','ii','ie']),
            'semestre'=>fake()->numberBetween(1, 9)
        ];
    }
}