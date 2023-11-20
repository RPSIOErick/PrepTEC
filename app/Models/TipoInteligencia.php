<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoInteligencia extends Model
{
    use HasFactory;

    protected $table = "tipointeligencia";
    protected $primaryKey = "id_TipoInteligencia";
    protected $fillable = [
        'id_TipoInteligencia',
        'nome_inteligencia',
    ];
}
