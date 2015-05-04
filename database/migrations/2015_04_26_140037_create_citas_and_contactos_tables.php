<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasAndContactosTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('citas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('slug')->default('');
            $table->datetime('data');
            $table->string('titol')->default('');
            $table->string('lloc')->default('');
            $table->text('descripcio')->default('');
            $table->timestamps();
        });
        Schema::create('contactos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom')->default('');
            $table->string('slug')->default('');
            $table->string('email')->default('');
            $table->string('tlf')->default('');
            $table->timestamps();
        });

        Schema::create('cita_contacto', function(Blueprint $table)
        {
            $table->integer('cita_id')->unsigned()->index();
            $table->foreign('cita_id')->references('id')->on('citas')->onDelete('cascade');

            $table->integer('contacto_id')->unsigned()->index();
            $table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade');

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
        Schema::drop('cita_contacto');
        Schema::drop('contactos');
        Schema::drop('citas');
    }
}