<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    protected $fillable = ['id_linha', 'tipo', 'link'] ;

    public function Linhas(){
        return $this->belongsTo('Linhas');
    }
}
