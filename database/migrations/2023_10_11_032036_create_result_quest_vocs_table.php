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
        Schema::create('ResultQuestVoc', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_QuestVoc');
            $table->string('resultado_QV');
            $table->date('data_conclusao');

            
            
            $table->foreign('id_usuario')->references('id_usuario')->on('Usuario');
            $table->foreign('id_QuestVoc')->references('id_QuestVoc')->on('QuestionarioVocacional');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_quest_vocs');
    }
};
