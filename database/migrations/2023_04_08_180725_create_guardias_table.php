<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardias', function (Blueprint $table) {
            $table->id();
            $table->string('CI_Guardia',10);
            $table->string('nombre_guardia',30);
            $table->string('apellido_guardia',30);
            $table->string('correo_guardia',40);
            $table->integer('celular_guardia');
            $table->string('direccion_guardia',30);
            $table->string('turno_guardia',15);
            $table->integer('tiempo_trabajo');
            //$table->morphs('perfil');
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
        Schema::dropIfExists('guardias');
    }
};
