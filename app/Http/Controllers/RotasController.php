<?php

namespace App\Http\Controllers;

use App\Rotas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RotaRequest;

class RotasController extends Controller
{
    public function index(){
        $rotas = Rotas::all();
        return view('rotas.index', ['rotas'=>$rotas]);
        
    }

    public function create (){
        return view('rotas.create');
    }

    public function store (RotaRequest $request) {
        $novo_rota = $request-> all();
        Rotas::create($novo_rota);

        return redirect()->route ('rotas');
    }

    public function destroy($id){
        Rotas::find($id)->delete();
        return redirect()->route ('rotas');
    }

    public function edit($id){
        $rotas = Rotas::find($id);
        return view('rotas.edit', compact('rotas'));
    }


    public function update(RotaRequest $request, $id){
        $rota = Rotas::find($id)->update($request->all());
        return redirect()->route ('rotas');
    }

}
