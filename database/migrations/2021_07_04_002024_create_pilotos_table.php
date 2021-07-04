<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilotos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',70);
            $table->string('apellido',70);
            $table->string('edad',70);
            $table->foreignId('escuderia_id');
            $table->unsignedBigInteger('piloto_id');

            $table->foreign('piloto_id')->references('id')->on('users');
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
        Schema::dropIfExists('pilotos');
    }
}
