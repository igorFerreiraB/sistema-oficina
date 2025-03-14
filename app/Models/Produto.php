<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{   
    protected $guarded = ['id'];
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
    ];
}