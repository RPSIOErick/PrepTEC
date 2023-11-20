<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternativas extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "alternativas";
    protected $primaryKey = "id_alternativa";
    protected $fillable = [
        'id_quest',
        'id_alter',
        'txt_alter',
        'alter_true',
    ];
}
