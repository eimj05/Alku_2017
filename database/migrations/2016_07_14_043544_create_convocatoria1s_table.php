<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConvocatoria1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatoria1s', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombreConvocatoria');
            $table->string('descripcion');
            $table->string('tipoConvocatoria');
            $table->string('dependencia');
            $table->date('fechaCierre');
            $table->binary('imagen');
            $table->string('contacto');
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
        Schema::drop('convocatoria1s');
    }
}
