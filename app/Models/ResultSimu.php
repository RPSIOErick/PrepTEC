<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultSimu extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "resultsimu";
    protected $fillable = [
        'id_usuario',
        'id_simu',
        'qntd_acertos',
        'data_conclusao',
    ];
}
