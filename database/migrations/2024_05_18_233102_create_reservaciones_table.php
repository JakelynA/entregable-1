<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->string('nro_reservacion',4)->unique();
            $table->string('nro_promocion',4);
            $table->string('cliente_dni',40);
            $table->string('pago_adelantado',40);
            $table->foreign('nro_promocion')->references('nro_promoion')->on('promocion')->onDelete('cascade');
            $table->foreign('nro_reservacion')->references('nro_reservacion')->on('reservaciones')->onDelete('cascade');
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
        Schema::dropIfExists('reservaciones');
    }
}
