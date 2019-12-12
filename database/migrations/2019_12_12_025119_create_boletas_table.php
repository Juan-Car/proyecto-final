<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')->references('id')->on('servicios');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->unsignedBigInteger('tratamiento_id');
            $table->foreign('tratamiento_id')->references('id')->on('tratamientos');
            $table->unsignedBigInteger('medicina_id');
            $table->foreign('medicina_id')->references('id')->on('medicinas');
            $table->unsignedBigInteger('vacuna_id');
            $table->foreign('vacuna_id')->references('id')->on('vacunas');
            $table->string('total');
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
        Schema::dropIfExists('boletas');
    }
}
