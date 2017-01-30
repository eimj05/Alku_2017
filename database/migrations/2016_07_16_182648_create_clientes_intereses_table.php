<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesInteresesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('cliente_intereses1', function (Blueprint $table) {
            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('intereses1_id');
            $table->primary(array('cliente_id', 'intereses1_id'));
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
        //
        Schema::drop('cliente_intereses1');
    }
}
