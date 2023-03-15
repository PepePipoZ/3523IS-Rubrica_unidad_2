<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salones',function(Blueprint $table){
            $table->id();
            $table->string('numero');
            $table->timestamps();
        });
        Schema::create('alumnos1',function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->bigInteger('id_salon')->unsigned();
            $table->foreign('id_salon')->references('id')->on('salones');
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
        Schema::dropIfExists('salones');
        Schema::dropIfExists('alumnos1');
    }
};
