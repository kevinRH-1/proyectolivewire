<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    protected static ?string $password;
    // protected $model = Cliente::class;
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
            "sexo" => $this->faker->randomElement(['hombre', 'mujer']),
            "fecha_nacimiento" => $this->faker->date
            
        ];
    }
}

