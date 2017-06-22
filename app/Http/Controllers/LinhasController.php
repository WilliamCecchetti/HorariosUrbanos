<?php

namespace App\Http\Controllers;

use App\Linhas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LinhaRequest;

class LinhasController extends Controller
{
    public function index(){
        $linhas = Linhas::all();
        return view('linhas.index', ['linhas'=>$linhas]);
        
    }

    public function create (){
        return view('linhas.create');
    }

    public function store (LinhaRequest $request) {
        $novo_linha = $request-> all();
        Linhas::create($novo_linha);

        return redirect()->route ('linhas');
    }

    public function destroy($id){
        Linhas::find($id)->delete();
        return redirect()->route ('linhas');
    }

    public function edit($id){
        $linhas = Linhas::find($id);
        return view('linhas.edit', compact('linhas'));
    }


    public function update(LinhaRequest $request, $id){
        $linha = Linhas::find($id)->update($request->all());
        return redirect()->route ('linhas');
    }

}
