<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Requests\FuncionariosFormRequest;

class FuncionariosController extends Controller{

    public function index(Request $request){
        $funcionarios = Funcionario::query()->orderBy('idFuncionario')->get();

        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');

        return view('funcionarios.index', compact('funcionarios', 'mensagem'));
    }

    public function create(){
        $cargos = Cargo::all();
        return view('funcionarios.create', compact('cargos'));
    }

    public function store(FuncionariosFormRequest $request){
        $funcionario = Funcionario::create($request->all());

        $request->session()->flash('mensagem', "Funcionário: {$funcionario->nome} criado com sucesso!" );

        return redirect()->route('listar_funcionarios');
    }

    public function destroy(Request $request){
        Funcionario::destroy($request->id);
        $request->session()->flash('mensagem', "Funcionario {$request->nome} removido com sucesso!");
        return redirect()->route('listar_funcionarios');
    }
}