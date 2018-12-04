<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutoOrdens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_ordens', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('produto_id')->unsigned();
             $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');

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
        Schema::dropIfExists('produto_ordens');
    }
}
