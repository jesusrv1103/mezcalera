<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudes1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numeroSolicitud');
            $table->string('fechaS');
            $table->string('usuario');
            $table->string('areaDireccion');
            $table->string('estado');
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
        Schema::drop('solicitudes1s');
    }
}