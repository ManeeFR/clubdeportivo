<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_user');
            $table->integer('id_pista');
            $table->string('franja');
            $table->date('fecha');

            // $table->integer('dia');
            // $table->integer('mes');
            $table->timestamps();










            // $table->foreign('num_pista')->references('num_pista')->on('pistas');
            // $table->string('email_user');
            // $table->foreign('email_user')->references('email')->on('users');
            // $table->unsignedInteger('id_user');
            // // $table->foreign('id_user')->references('id')->on('users');

            // $table->unsigned('name_user');

            // $table->string('email_user');

            // $table->integer('id_pista');

            // $table->string('categoria');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
