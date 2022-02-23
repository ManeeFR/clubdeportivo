<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reserva;
use App\Models\User;
use App\Models\Pista;

class DatabaseSeeder extends Seeder {
    public function run() {
        Reserva::factory(100)->create();
        User::factory(50)->create();
        Pista::factory(6)->create();
    }
}
