@extends('layout')

@section('breadcrumb')
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('listar_funcionarios')}}">Funcionários</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cadastrar Funcionários</li>
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
    </div>
</div>

        <form action="" method="post">
        <div class="row">
            <div class="col-12">
                <h4>Dados Pessoais</h4><hr>
            </div>
        </div>
            
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="nome">Nome*</label>
                        <input type="text" class="form-control" name="nome" placeholder="Larissa">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="sobrenome">Sobrenome*</label>
                        <input type="text" class="form-control" name="sobrenome" placeholder="Silva">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        Cargo*
                        <select class="custom-select" name="cargo_id_fk">
                            @foreach ($cargos as $cargo)
                            <option value="{{$cargo->id}}">{{$cargo->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" name="email" placeholder="larissa.gcrs@gmail.com">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="telefone">Telefone*</label>
                        <input type="text" class="form-control" name="telefone" placeholder="1234-1234">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dataNascimento">
                    </div>
                </div>
            </div>  
            <br>   
            <div class="row">
                <div class="col-12">
                    <h4>Endereço</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" name="rua">
                    </div>
                </div>
            </div>       
            
           <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado">
                    </div>
                </div>
           </div>
            
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-primary mb-4">Cadastrar</button>
                </div>
            </div>
            
            
        </form>
    </div>
</div>
@endsection