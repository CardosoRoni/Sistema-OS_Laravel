<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdemServicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servicos', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('servico_id')->unsigned();
           $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('cascade');

            $table->integer('ordem_id')->unsigned();
         $table->foreign('ordem_id')->references('id')->on('ordens')->onDelete('cascade');
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
        Schema::dropIfExists('ordem_servicos');
    }
}
