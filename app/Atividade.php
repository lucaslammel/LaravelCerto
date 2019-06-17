<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\mensagens;

class Atividade extends Model
{
    protected $table = 'atividades';

    public function mensagens()
    {
        return $this->hasMany(mensagens::class);
    }
}


