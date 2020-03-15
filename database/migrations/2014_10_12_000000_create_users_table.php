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
            $table->string('name')->unique(); #username
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('documento')->nullable()->unique();
            $table->date('fecha_nacimiento')->nullable();
            $table->smallInteger('localidad_id')->nullable();
            $table->smallInteger('provincia_id')->nullable();
            $table->smallInteger('pais_id')->nullable();
            $table->string('domicilio')->nullable();
            $table->smallInteger('tipo_documento_id')->nullable();
            $table->smallInteger('tipo_telefono_id')->nullable();
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
