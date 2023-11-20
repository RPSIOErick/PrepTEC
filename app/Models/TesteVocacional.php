<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesteVocacional extends Model
{
    use HasFactory;

    protected $table = "questionariovocacional";
    protected $primaryKey = "id_QuestVoc";
    protected $fillable = [
        'id_QuestVoc',
        'descricao_QuestVoc',
    ];
}
