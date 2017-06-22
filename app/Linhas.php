<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linhas extends Model
{
    protected $fillable = ['nome'];

    public function Horarios(){
        return $this->hasMany('Horarios');
    }

    public function Rotas(){
        return $this->hasMany('Rotas');
    }
}
