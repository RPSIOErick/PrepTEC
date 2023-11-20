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
        Schema::create('Alternativas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_quest');
            $table->string('txt_alter');
            $table->boolean('alter_true');

            
            $table->foreign('id_quest')->references('id_quest')->on('Questoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternativas_sim');
    }
};
