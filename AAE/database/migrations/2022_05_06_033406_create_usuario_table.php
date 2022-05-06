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
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('paterno',30);
            $table->string('materno',30);
            $table->string('correo',191)->unique();
            $table->string('contrasenia',60);
            $table->string('codigo_recuperacion',50)->nullable();
            $table->boolean('activo')->default(false);
            $table->boolean('admin')->default(false);

            /*Descomentar esta llave foranea cuando se comience a trabajar 
            conla tabla imagen */
            // $table->foreign('imagen_id')->references('id')->on('imagen');

            $table->rememberToken();
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
        Schema::dropIfExists('usuario');
    }
};
