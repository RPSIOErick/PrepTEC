<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questoes extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "questoes";
    protected $primaryKey = "id_quest";
    protected $fillable = [
        'id_quest',
        'txt_quest',
        'txt_perg',
        'id_simu',
    ];
}
