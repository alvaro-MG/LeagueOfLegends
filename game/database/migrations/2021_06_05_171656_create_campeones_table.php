<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampeonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campeones', function (Blueprint $table) {
            $table->id();
            $table->String('Nombre');
            $table->String('Region');
            $table->String('Raza');
            $table->Double('Edad');
            $table->String('Sexo');
            $table->String('Habilidad');
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
        Schema::dropIfExists('campeones');
    }
}
