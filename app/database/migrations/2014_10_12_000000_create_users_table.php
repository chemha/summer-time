<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //Id base de Laravel
            $table->id();

            //Datos de autenticación base
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->string('password');

            //Datos añadidos
            $table->boolean('admin')->default(false);
            $table->string('image')->nullable();

            //Otros datos base
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        //Inserción de usuario administrador al hacer la migración
        DB::table('users')->insert(
            array(
                'name' => 'admin',
                'email' => 'admin',
                'password' => Hash::make('admin'),
                'admin' => true,
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
