<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rotas extends Model
{
    protected $fillable = ['id_linha','link'];

    public function Linhas(){
        return $this->belongsTo('Linhas');
    }
}
