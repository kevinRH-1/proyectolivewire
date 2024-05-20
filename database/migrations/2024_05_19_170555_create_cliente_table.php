<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() :void
    {
        Schema::create('clientes', function (Blueprint $table){
            $table->string('id')->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono');
            $table->string('sexo');
            $table->date("fecha_nacimiento");
            // $table->date("fecha_registro");
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
     
            // $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('clientes');
    }
};

