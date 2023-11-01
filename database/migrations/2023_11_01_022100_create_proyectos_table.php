<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    public function up()
    {
        Schema::create('Proyectos', function (Blueprint $table) {
            $table->id(); 
            $table->string('NombreProyecto', 255);
            $table->string('fuenteFondos', 100);
            $table->decimal('MontoPlanificado', 10, 2);
            $table->decimal('MontoPatrocinado', 10, 2);
            $table->decimal('MontoFondosPropios', 10, 2);
            $table->timestamps(); // Esto agrega automáticamente los campos 'created_at' y 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('Proyectos');
    }
}

