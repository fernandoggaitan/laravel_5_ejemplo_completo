<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function(Blueprint $table){
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->integer('user_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');            
            $table->foreign('estado_id')->references('id')->on('estados');
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
        Schema::dropIfExists('tareas');
    }
}
