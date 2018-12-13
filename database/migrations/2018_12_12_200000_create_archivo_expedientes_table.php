<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivoExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo_expedientes', function (Blueprint $table) {
            $table->increments('arex_id');
            $table->string('arex_nombre');
            $table->string('arex_ruta');
            $table->string('arex_descripcion');
            $table->integer('ex_id')->unsigned();
            $table->foreign('ex_id')->references('ex_id')->on('expedientes')->onDelete('cascade');
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
        Schema::dropIfExists('archivo_expedientes');
    }
}
