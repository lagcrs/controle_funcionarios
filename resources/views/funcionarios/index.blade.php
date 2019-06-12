@extends('layout')

@section('breadcrumb')
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Funcionários</li>
  </ol>
</nav>
<br>
@endsection
    
@section('conteudo')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <h3>Funcionários</h3>
        @if (!empty($mensagem))
            <div class="alert alert-success">
                {{$mensagem}}
            </div>
        @endif
        <a href="{{route('cadastrar_funcionario')}}" class="btn btn-dark mb-2">Adicionar <i class="fas fa-plus"></i></a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table">
            <thread>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th>Ações</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                @foreach($funcionarios as $funcionario)
                    <td>
                        {{$funcionario->id}}                        
                    </td>
                    <td>
                        {{$funcionario->nome}}                        
                    </td>
                    <td>
                        {{$funcionario->email}}                        
                    </td>
                @endforeach
                    <th>
                        <form action="/funcionario/remover/{{ $funcionario->id }}" method="post" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($funcionario->nome) }}?')" >
                            @csrf
                            <button class="btn btn-danger btn-sm">
                              Excluir <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection