<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes_cliente', function (Blueprint $table) {
            $table->char('cl_dni',8);
            $table->integer('ex_id')->unsigned();
            $table->primary(['ex_id', 'cl_dni']);
            $table->date('fecha');
            $table->timestamps();
            $table->foreign('cl_dni')->references('cl_dni')->on('clientes')->onDelete('cascade');
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
        Schema::dropIfExists('expedientes_cliente');
    }
}
