<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecha');
            $table->string('numero');
            $table->string('descripcion');
            $table->unsignedBigInteger('mascota_id');
            $table->foreign('mascota_id')->references('id')->on('mascotas');
            $table->unsignedBigInteger('medicina_id');
            $table->foreign('medicina_id')->references('id')->on('medicinas');
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
        Schema::dropIfExists('vacunas');
    }
}
