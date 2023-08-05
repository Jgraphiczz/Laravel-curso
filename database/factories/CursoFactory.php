<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this ->faker ->sentence(), //se llena con una oracion
            'descripcion' => $this ->faker ->paragraph(), //se llena con un parrafo
            'categoria' => $this ->faker ->randomElement(['Desarrollo web', 'Diseño web']) //Rellenamos con dos elementos aleatorios, usamos RandomElement
        ];
    }
}
