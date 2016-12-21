<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaListaDeTarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::create('listaDeTarefas', function(Blueprint $table){
          $table->increments('id');
          $table->string('texto');
          $table->string('autor');
          $table->string('status');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('listaDeTarefas');
    }
}
