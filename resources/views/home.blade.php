@extends('layout')

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-home"></i> Home</li>
  </ol>
</nav>
@endsection

@section('conteudo')
<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <i class="fas fa-2x fa-user-tie"></i>
                <h5 class="card-title">Gerenciar Funcionários</h5>
                <p class="card-text">Aqui você conseguirá ter controle sobre todos os funcionários cadastrados no sistema. Comece agora, clicando abaixo.</p>
                <a href="{{route('listar_funcionarios')}}" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <i class="far fa-2x fa-clipboard"></i>
                <h5 class="card-title">Gerenciar Cargos</h5>
                <p class="card-text">Aqui você conseguirá ter total controle sobre todos os cargos cadastrados no sistema. Comece agora, clicando abaixo.</p>
                <a href="{{route('listar_cargos')}}" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </div>
</div>
@endsection