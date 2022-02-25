<?php

namespace Database\Factories;

use App\Models\Reserva;
use App\Models\Pista;
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
            'email_user' => $this->faker->unique()->safeEmail(),
            'id_pista'  => $this->faker->numberBetween(1, 6)
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
