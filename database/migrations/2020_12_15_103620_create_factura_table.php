<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
          
            $table->integer('codigoF')->autoIncrement();
            $table->integer('Numero');
            $table->integer('cliente');
            $table->integer('formaPago');
            $table->date('Entrada');
            $table->date('Salida');
            $table->double('Total');
            $table->foreign('Numero')->references('Numero')->on('habitacion');
            $table->foreign('cliente')->references('id')->on('cliente');
            $table->foreign('formapago')->references('id')->on('formapago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
