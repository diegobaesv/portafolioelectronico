<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->increments('mod_id');
            $table->string('mod_etiqueta');
            $table->integer('armod_id')->unsigned();
            $table->date('mod_fecha'); 
            $table->timestamps();
            $table->foreign('armod_id')->references('armod_id')->on('archivo_modelos')->onDelete('cascade');
        });
    


   


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
