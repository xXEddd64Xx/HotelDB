<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this -> faker -> firstName(),
            'apellido' => $this -> faker -> lastName(),
            'tlf' => $this -> faker -> numerify('6########'),
            'dni' => $this -> faker -> bothify('########?'),
            'email' => $this -> faker -> email(),
            'direccion' => $this -> faker -> address(),
            'pwd' => $this -> faker -> password()
            /* 'tipo_usuario' => $this -> faker -> randomElement(['1', '2']), */
        ];
    }
}
