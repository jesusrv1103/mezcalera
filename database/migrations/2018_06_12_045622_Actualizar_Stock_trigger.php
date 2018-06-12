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

            CREATE TRIGGER tr_updStrockVenta AFTER INSERT ON salidasalmacenmaterial
            FOR EACH ROW BEGIN
            UPDATE almacenmateriales SET cantidad=cantidad-NEW.cantidad
            WHERE almacenmateriales.id=NEW.id_material;

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
