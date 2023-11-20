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
        Schema::create('PerguntasQuestVoc', function (Blueprint $table) {
            $table->unsignedBigInteger('id_QuestVoc');
            $table->id('id_pergunta');
            $table->unsignedBigInteger('id_TipoInteligencia');
            $table->string('txt_perg');

            
            
            $table->foreign('id_TipoInteligencia')->references('id_TipoInteligencia')->on('TipoInteligencia');
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
        Schema::dropIfExists('PerguntasQuestVoc');
    }
};
