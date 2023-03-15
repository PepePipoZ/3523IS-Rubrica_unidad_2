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
        //Se crean los campos 
        Schema::create('grupos',function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('clave')->unique();
            $table->timestamps();
        });
        Schema::create('alumnos',function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('apellido')->unique();
            $table->bigInteger('id_grupos')->unsigned();
            $table->foreign('id_grupos')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('grupo');
        Schema::dropIfExists('alumnos');
    }
};
