<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ResultSimu', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_simu');
            $table->integer('qntd_acertos');
            $table->date('data_conclusao');

            
            
            $table->foreign('id_usuario')->references('id_usuario')->on('Usuario');
            $table->foreign('id_simu')->references('id_simu')->on('Simulado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_simus');
    }
};
