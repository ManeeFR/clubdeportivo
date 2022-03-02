<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->randomElement(["babolat", "adidas", "siux", 'kuikma']),
            'precio'  => $this->faker->numberBetween(11, 60),
            'imagen' => $this->faker->unique->randomElement(["productos_01.jpg", "productos_02.jpg", "productos_03.jpg", "productos_04.jpg"])
        ];
    }
}
