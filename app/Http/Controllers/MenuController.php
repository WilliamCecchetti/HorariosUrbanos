<?php

namespace App\Http\Controllers;

use App\Rotas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RotaRequest;

class MenuController extends Controller
{
    public function index(){

        return view('menu.index');
        
    }


}
