<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LinhasController;
use App\Http\Requests\EmpresaRequest;

class AppController extends Controller
{
    public function index(){
        $linhas = Linhas::all();
        return view('app.index', ['linhas'=>$linhas]);
        
    }



}
