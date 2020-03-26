<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $fillable = ['titulo', 'data_lancamento', 'equipe'];
}
