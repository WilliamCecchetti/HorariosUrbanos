<?php

namespace App\Http\Controllers;

use App\Empresas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmpresaRequest;

class EmpresasController extends Controller
{
    public function index(){
        $empresas = Empresas::all();
        return view('empresas.index', ['empresas'=>$empresas]);
        
    }

    public function create (){
        return view('empresas.create');
    }

    public function store (EmpresaRequest $request) {
        $novo_empresa = $request-> all();
        Empresas::create($novo_empresa);

        return redirect()->route ('empresas');
    }

    public function destroy($id){
        Empresas::find($id)->delete();
        return redirect()->route ('empresas');
    }

    public function edit($id){
        $empresas = Empresas::find($id);
        return view('empresas.edit', compact('empresas'));
    }


    public function update(EmpresaRequest $request, $id){
        $empresa = Empresas::find($id)->update($request->all());
        return redirect()->route ('empresas');
    }

}
