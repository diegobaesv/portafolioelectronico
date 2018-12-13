<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->char('cl_dni',8);
            $table->string('cl_nombre');
            $table->string('cl_appaterno');
            $table->string('cl_apmaterno');
            $table->char('cl_telefono',9);
            $table->string('cl_direccion');
            $table->char('cl_sexo',1);
            $table->primary('cl_dni');
            $table->timestamps();
        });



        Schema::create('expediente_cliente', function (Blueprint $table) {
            
            $table->char('cl_dni',8);
            $table->integer('ex_id')->unsigned();
            $table->primary(['ex_id', 'cl_dni']);
            $table->date('fecha');
           
            $table->foreign('cl_dni')->references('cl_dni')->on('cliente')->onDelete('cascade');
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
        Schema::dropIfExists('cliente');
    }
}
