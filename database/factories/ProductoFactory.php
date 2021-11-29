<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_producto' => $this->faker->name(),
            'descripcion_producto' => $this->faker->name(),
            'estado_producto' => $this->faker->name(),
            'precio_producto' => $this->faker->name(),
            'decuento_producto' => $this->faker->name(),
        ];
    }
}
