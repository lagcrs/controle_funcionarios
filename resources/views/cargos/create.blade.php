@extends('layout')

@section('breadcrumb')
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('listar_cargos')}}">Cargos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cadastrar Cargos</li>
  </ol>
</nav>
<br>
@endsection

@section('conteudo')
<div class="row">
    <div class="col-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao">
            </div>
            <div class="form-group">
                <label for="salario">Salário</label>
                <input type="number" class="form-control" name="salario" pattern="^\d*(\.\d{0,2})?$">
            </div>
            <button class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>
@endsection