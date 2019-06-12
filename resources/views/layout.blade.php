<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Controle de Funcionários</title>
</head>
<body>
    <nav class="nav bg-light d-flex align-items-center">
        <strong class="ml-4">Controle de Funcionários</strong>
        <a class="nav-link active" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('listar_funcionarios')}}">Funcionários</a>
        <a class="nav-link" href="{{route('listar_cargos')}}">Cargos</a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('breadcrumb')
            </div>
        </div>
        @yield('conteudo')
    </div>
</body>
</html>