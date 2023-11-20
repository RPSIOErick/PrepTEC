<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "usuario";
    protected $primaryKey = "id_usuario";
    protected $fillable = [
        'nome_usuario',
        'email_usuario',
        'senha_usuario',
        'tipoUsuario',
        'fotoUsuario',
    ];
}
