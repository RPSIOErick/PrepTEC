<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultQuestVoc extends Model
{
    use HasFactory;

    protected $table = "resultquestvoc";
    protected $fillable = [
        'id_usuario',
        'id_QuestVoc',
        'resultado_QV',
        'data_conclusao',
    ];
}
