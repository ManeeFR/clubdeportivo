<?php

namespace Database\Factories;

use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReservaFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @return string
     */
    protected $model = Reserva::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'id_user' => $this->faker->unique()->safeEmail(),
            'num_pista' => rand(1, 6),
            'categoria' => $this->faker->randomElement(['Cubierta', 'Descubierta'])
        ];
    }
}
/**
 * id_reserva
 * id_usuario
 * num_pista
 * tiempo
 * precio
 */
