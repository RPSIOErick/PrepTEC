<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulado extends Model
{
    use HasFactory;
    
    protected $table = "simulado";
    protected $primaryKey = "id_simu";
    protected $fillable = [
        'id_simu',
        'descricao_sim',
    ];
}
