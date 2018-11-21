<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAhijadoRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahijado_registro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ahijado_id')->unsigned();
            $table->integer('registro_id')->unsigned();
            $table-> foreign ('ahijado_id') -> references ('id') -> on ('ahijados')-> onDelete ('cascade');
            $table-> foreign ('registro_id') -> references ('id') -> on ('registros')-> onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ahijado_registro');
    }
}
