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
        Schema::create('ninos', function (Blueprint $table) {
            //Id base de Laravel
            $table->id();

            //Datos añadidos
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->integer('edad')->unsigned();
            $table->integer('hermanos')->unsigned()->default(0);
            $table->boolean('medicacion')->default(false);
            $table->boolean('especial')->default(false);
            $table->string('observacionesMedicas')->nullable();

            $table->string('tutor', 200);
            $table->string('email', 100)->nullable();
            $table->string('telefono1', 20);
            $table->string('telefono2', 20)->nullable();

            //$table->foreignId('grupo')->references('id')->on('grupos');
            $table->string('grupo', 20);
            $table->string('horario', 20);

            $table->boolean('quincena1')->default(false);
            $table->boolean('quincena2')->default(false);
            $table->boolean('quincena3')->default(false);
            $table->boolean('quincena4')->default(false);

            $table->boolean('datos')->default(false);
            $table->boolean('fotos')->default(false);

            $table->string('anotaciones')->nullable();

            $table->float('pago');
            $table->string('recibo', 20);

            //Otros datos base
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
        Schema::dropIfExists('ninos');
    }
};
