<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('apellido');
            $table->integer('telefono');
            $table->integer('documento');
            $table->date('fecha_nacimiento');
            $table->smallInteger('localidad_id');
            $table->smallInteger('provincia_id');
            $table->smallInteger('pais_id');
            $table->string('domicilio');
            $table->smallInteger('tipo_documento_id');
            $table->smallInteger('tipo_telefono_id');
        });
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
}
