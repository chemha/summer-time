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

            //Relación con el usuario
            $table->foreignId('user_id')->references('id')->on('users');

            //Datos añadidos
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->integer('edad')->unsigned();
            $table->integer('hermanos');
            $table->boolean('medicacion');
            $table->boolean('especial');
            $table->text('observacionesMedicas')->nullable();

            $table->string('tutor', 200);
            $table->string('email', 100)->nullable();
            $table->string('telefono1', 20);
            $table->string('telefono2', 20)->nullable();

            //$table->foreignId('grupo')->references('id')->on('grupos');
            $table->string('grupo', 20);
            $table->string('horario', 20);

            $table->boolean('quincena0');
            $table->boolean('quincena1');
            $table->boolean('quincena2');
            $table->boolean('quincena3');
            $table->boolean('quincena4');

            $table->boolean('datos');
            $table->boolean('fotos');

            $table->text('anotaciones')->nullable();

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
