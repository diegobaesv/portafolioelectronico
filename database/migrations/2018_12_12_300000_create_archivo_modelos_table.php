<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivoModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo_modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('armod_nombre');
            $table->string('armod_ruta');
            $table->string('armod_descripcion');
            $table->integer('mod_id')->unsigned();
            $table->foreign('mod_id')->references('id')->on('modelos')->onDelete('cascade');
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
        Schema::dropIfExists('archivo_modelos');
    }
}
