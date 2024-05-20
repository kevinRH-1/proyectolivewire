<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\instructores>
 */
class InstructoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id" => strval($this->faker->unique()->numberBetween(1, 99999999)),

            "nombre" => $this->faker->lastName,
            "apellido" => $this->faker->lastName,
            "email" => $this->faker->email,
            "telefono" => $this->faker->phoneNumber,
            "fecha_nacimiento" => $this->faker->date,
            "usuario" => $this->faker->name,
            "contraseña" => $this->faker->lastName,
            "sexo" => $this->faker->randomElement(['hombre', 'mujer']),
        ];
    }
}
