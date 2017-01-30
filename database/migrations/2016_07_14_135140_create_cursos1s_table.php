<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursos1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos1s', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombreCurso');
            $table->string('descripcion');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->decimal('costo');
            $table->string('capacitador');
            $table->integer('cupoLimite');
            $table->binary('imagen');
            $table->integer('interes');
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
        Schema::drop('cursos1s');
    }
}
