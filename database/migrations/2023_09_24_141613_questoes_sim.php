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
        Schema::create('Questoes', function (Blueprint $table) {            
            $table->id('id_quest');
            $table->text('txt_quest');
            $table->string('txt_perg');
            $table->unsignedBigInteger('id_simu');

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
        Schema::dropIfExists('questoes_sim');
    }
};
