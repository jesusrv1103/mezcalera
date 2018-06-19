<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActualizarCantidadArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     DB::unprepared('

        CREATE TRIGGER trActualizarStock1 AFTER UPDATE ON entradas
        FOR EACH ROW BEGIN
        if new.estado = 'Inactivo' 
            UPDATE articulos SET cantidad=cantidad-new.cantidad
        WHERE articulos.id=old.idArticulos;
        else then
         UPDATE articulos SET cantidad=cantidad+new.cantidad
     WHERE articulos.id=old.idArticulos;
     END

     ');
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
