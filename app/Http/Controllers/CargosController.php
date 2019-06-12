<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Requests\CargosFormRequest;

class CargosController extends Controller{
    public function index(Request $request){
        $cargos = Cargo::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');

        return view('cargos.index', compact('cargos', 'mensagem'));
    }

    public function create(){
        return view('cargos.create');
    }

    public function store(CargosFormRequest $request){
        $cargo = Cargo::create($request->all());

        $request->session()->flash('mensagem', "Cargo: {$cargo->nome} criado com sucesso!");

        return redirect()->route('listar_cargos');
    }

    public function destroy(Request $request){
        Cargo::destroy($request->id);

        $request->session()->flash('mensagem', "O cargo foi removido com sucesso!");

        return redirect()->route('listar_cargos');
    }

    public function editarCargo(Request $request){
        $novoNome = $request->nome;
        $cargo = Cargo::find($request->id);
        $cargo->nome = $novoNome;
        $cargo->save();

    }
}