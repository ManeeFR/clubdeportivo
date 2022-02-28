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
        $fecha = getdate();
        return [
            'email_user' => $this->faker->unique()->safeEmail(),
            'id_pista'  => $this->faker->numberBetween(1, 6),
            'franja' => $this->faker->randomElement(['9:00 - 10:30', '10:30 - 12:00', '12:00 - 13:30', '16:00 - 17:30', '17:30 - 19:00', '19:00 - 20:30']),
            'fecha' => $this->faker->date('Y/m/d', strtotime("now"))
            // 'dia'  => $this->faker->numberBetween($fecha['mday'], $fecha['mday'] + 3),
            // 'mes'  => $fecha['mon']
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
