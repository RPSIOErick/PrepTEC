<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerguntasTestVoc extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "perguntasquestvoc";
    protected $primaryKey = "id_pergunta";

    protected $fillable = [
        'id_QuestVoc',
        'id_pergunta',
        'id_TipoInteligencia',
        'txt_perg',
    ];
}
