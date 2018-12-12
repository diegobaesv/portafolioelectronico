<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiligenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diligencias', function (Blueprint $table) {
            $table->increments('dil_id');
            $table->string('dil_nombre');
            $table->integer('ex_id')->unsigned();
            $table->string('dil_lugar');
            $table->date('dil_fecha');
            $table->time('dil_hora');
            $table->timestamps();
            $table->foreign('ex_id')->references('ex_id')->on('expedientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diligencias');
    }
}
