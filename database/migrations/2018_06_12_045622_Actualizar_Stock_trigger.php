<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActualizarStockTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('

            CREATE TRIGGER tr_updStrockEntradas AFTER INSERT ON entradas
            FOR EACH ROW BEGIN
            UPDATE articulos SET cantidad=cantidad+entradas.cantidad
            WHERE articulos.id=NEW.entradas.id;

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
