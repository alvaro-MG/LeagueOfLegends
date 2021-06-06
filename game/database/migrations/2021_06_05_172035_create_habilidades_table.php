<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidades', function (Blueprint $table) {
            $table->id();
            $table->String('Nombre');
            $table->String('Personaje');
            $table->String('Tecla');
            $table->Double('CosteDeManaN1');
            $table->Double('CosteDeManaN2');
            $table->Double('CosteDeManaN3');
            $table->Double('CooldownN1');
            $table->Double('CooldownN2');
            $table->String('CooldownN3');
            $table->String('Foto');
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
        Schema::dropIfExists('habilidades');
    }
}
