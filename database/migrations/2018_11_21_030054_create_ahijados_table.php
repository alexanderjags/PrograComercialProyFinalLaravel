<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAhijadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahijados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_ni');
            $table->string('apellido_ni');
            $table->string('fecha__nac_ni');
            $table->string('edad_ni');    
            $table->string('domicilio_ni');
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
        Schema::dropIfExists('ahijados');
    }
}
