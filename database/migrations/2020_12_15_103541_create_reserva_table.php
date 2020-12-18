<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
     
            $table->integer('id')->autoIncrement();
            $table->integer('Numero');
            $table->integer('cliente');
            $table->date('Entrada');
            $table->date('Salida');
            $table->foreign('Numero')->references('Numero')->on('habitacion');
            $table->foreign('cliente')->references('id')->on('cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
