<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('cliente_roles1', function (Blueprint $table) {
            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('roles1_id');
            $table->primary(array('cliente_id', 'roles1_id'));
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
        Schema::drop('cliente_roles1');
    }
}
