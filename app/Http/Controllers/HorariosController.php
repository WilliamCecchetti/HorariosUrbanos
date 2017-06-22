<?php

namespace App\Http\Controllers;

use App\Horarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HorarioRequest;

class HorariosController extends Controller
{
    public function index(){
        $horarios = Horarios::all();
        return view('horarios.index', ['horarios'=>$horarios]);
        
    }

    public function create (){
        return view('horarios.create');
    }

    public function store (HorarioRequest $request) {
        $novo_horario = $request-> all();
        Horarios::create($novo_horario);

        return redirect()->route ('horarios');
    }

    public function destroy($id){
        Horarios::find($id)->delete();
        return redirect()->route ('horarios');
    }

    public function edit($id){
        $horarios = Horarios::find($id);
        return view('horarios.edit', compact('horarios'));
    }


    public function update(HorarioRequest $request, $id){
        $horario = Horarios::find($id)->update($request->all());
        return redirect()->route ('horarios');
    }

}
