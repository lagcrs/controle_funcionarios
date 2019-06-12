@extends('layout')

@section('breadcrumb')
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cargos</li>
  </ol>
</nav>
<br>
@endsection
    
@section('conteudo')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <h3>Cargos</h3>
        @if (!empty($mensagem))
            <div class="alert alert-success">
                {{$mensagem}}
            </div>
        @endif
        <a href="{{route('cadastrar_cargos')}}" class="btn btn-dark mb-2">Adicionar <i class="fas fa-plus"></i></a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <ul class="list-group">
        @foreach($cargos as $cargo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
               <span id="nome-cargo-{{ $cargo->id }}">{{$cargo->nome}}</span> 

            <div class="input-group w-50" hidden id="input-nome-cargo-{{ $cargo->id }}">
                <input type="text" class="form-control" value="{{ $cargo->nome }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="editarCargo({{ $cargo->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
            <div class="d-flex align-items-end">
                <button class="btn btn-info btn-sm mr-1" onclick="toggleInput({{ $cargo->id }})">
                    Editar <i class="far fa-edit"></i>
                </button>
                <form action="/cargo/remover/{{ $cargo->id }}" method="post" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($cargo->nome) }}?')" >
                    @csrf
                    <button class="btn btn-danger btn-sm">
                        Excluir <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
            </li>
        @endforeach
        </ul>
    </div>
</div>

<script>
    function toggleInput(cargoId){
        const nomeCargo = document.getElementById(`nome-cargo-${cargoId}`);
        const inputCargo = document.getElementById(`input-nome-cargo-${cargoId}`);

        if(nomeCargo.hasAttribute('hidden')){
            nomeCargo.removeAttribute('hidden');
            inputCargo.hidden = true
        }else{
            inputCargo.removeAttribute('hidden');
            nomeCargo.hidden = true;
        }
    }

    function editarCargo(cargoId){
        let formData = new FormData();

        const nome = document.querySelector(`#input-nome-cargo-${cargoId} > input`).value;
        const token = document.querySelector(`input[name="_token"]`).value;

        formData.append('nome', nome);
        formData.append('_token', token)

        const url = `/cargo/${cargoId}/editarCargo`;

        fetch(url, {
            body: formData,
            method: 'POST'
        }).then(() => {
            toggleInput(cargoId);
            document.getElementById(`nome-cargo-${cargoId}`).textContent = nome;
        });
    }
</script>
@endsection