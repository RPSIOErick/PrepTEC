@extends('layouts.main-Completo')

@section('title', 'Gerenciar Sistema - PrepTEC')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/layouts/main.css">
    <link rel="stylesheet" href="/css/admin/crud.css">
    <link rel="stylesheet" href="/css/admin/gerenciarSistema.css">
</head>
<body>
    <!--Container Parte 1 - Boas Vindas-->
        <div class="container-fluid" id="d-gs-part1-container">

            <!--Row - 1 Col-->
                <div class="row row-cols-1">

                    <!--Coluna A - Titulo-->
                        <div class="col" id="d-gs-part1-titleCol">

                            <!--Titulo Principal-->
                                <h2 id="txt-gs-part1-titleCol-title">Boas vindas ao sistema!</h2>
                            <!--Fim do Titulo Principal-->

                            <!--Texto Explicativo Principal-->
                                <p id="txt-gs-part1-titleCol-text">
                                    Escolha uma das opções abaixo para gerenciar funções 
                                    específicas do <br> site ou gerenciar os estudantes que 
                                    estão presentes por aqui!
                                </p>
                            <!--Fim do Texto Explicativo Principal-->

                        </div>
                    <!--Fim da Coluna A-->

                    <!--Coluna B - Cards-->
                        <div class="col" id="d-gs-part1-cardCol">

                            <!--Row - 3 Colunas-->
                                <div class="row row-cols-3">

                                    <!--Card Gerenciar Estudante-->
                                        <div class="col d-gs-part1-cardTemplate" id="d-gs-part1-cardTemplate-1">

                                            <!--Card Header-->
                                                <div class="d-gs-part1-cardTemplate-header">
                                                    <h2 class="d-template-center-vertAndHori" id="txt-gs-part1-cardTemplate-title">Gerenciar Estudante</h2>
                                                </div>
                                            <!--Fim do Card Header-->

                                            <!--Card Body-->
                                                <div id="d-gs-part1-cardTemplate-body">
                                                    <!--Texto Explicativo Card-->
                                                        <p class="d-template-center-hori" id="txt-gs-part1-cardTemplate-text">
                                                            Clique aqui para <br>gerenciar 
                                                            os estudantes cadastrados!
                                                        </p>
                                                    <!--Fim do Texto Explicativo Card-->

                                                    <!--Botão Card-->
                                                        <button class="d-template-center-hori" id="btn-gs-part1-cardTemplate-button" onclick="window.location='/estudante/listar'">
                                                            <!--Texto-->
                                                                <a href="/estudante/listar" id="txt-gs-part1-cardTemplate-button-text">Acessar</a>
                                                            <!--Icon-->
                                                                <img src="/img/admin/gerenciarConta/setaAzul.png" id="icon-gs-part1-cardTemplete-button-icon">
                                                        </button>
                                                    <!--Fim do Botão Card-->
                                                </div>
                                            <!--Fim do Card Body-->

                                        </div>
                                    <!--Fim do Card Gerenciar Estudante-->

                                    <!--Card Questionario Vocacional--> 
                                        <div class="col d-gs-part1-cardTemplate" id="d-gs-part1-cardTemplate-2">

                                            <!--Card Header-->
                                                <div class="d-gs-part1-cardTemplate-header-2">
                                                    <h2 class="d-template-center-vertAndHori" id="txt-gs-part1-cardTemplate-title">Questionário<br>Vocacional</h2>
                                                </div>
                                            <!--Fim do Card Header-->

                                            <!--Card Body-->
                                                <div id="d-gs-part1-cardTemplate-body">

                                                    <!--Texto Explicativo Card-->
                                                        <p class="d-template-center-hori" id="txt-gs-part1-cardTemplate-text">
                                                            Clique aqui e gerencie as 
                                                            perguntas cadastradas do
                                                            questionário vocacional!
                                                        </p>
                                                    <!--Fim do Texto Explicativo Card-->

                                                    <!--Botão Card-->
                                                        <button class="d-template-center-hori" id="btn-gs-part1-cardTemplate-button" onclick="window.location='/questionario/listar'">
                                                            <!--Texto-->
                                                                <a href="/questionario/listar" id="txt-gs-part1-cardTemplate-button-text">Acessar</a>
                                                            <!--Icon-->
                                                                <img src="/img/admin/gerenciarConta/setaAzul.png" id="icon-gs-part1-cardTemplete-button-icon">
                                                        </button>
                                                    <!--Fim do Botão Card-->
                                                </div>
                                            <!--Fim do Card Body-->

                                        </div>
                                    <!--Fim do Card Questionario Vocacional-->

                                    <!--Card Simulado-->
                                        <div class="col d-gs-part1-cardTemplate" id="d-gs-part1-cardTemplate-3">

                                            <!--Card Header-->
                                                <div class="d-gs-part1-cardTemplate-header">
                                                    <h2 class="d-template-center-vertAndHori" id="txt-gs-part1-cardTemplate-title">Simulado</h2>
                                                </div>
                                            <!--Fim do Card Header-->

                                            <!--Card Body-->
                                                <div id="d-gs-part1-cardTemplate-body">

                                                    <!--Texto Explicativo Card-->
                                                        <p class="d-template-center-hori" id="txt-gs-part1-cardTemplate-text">
                                                            Clique aqui para<br> administrar as questões <br> do simulado!
                                                        </p>
                                                    <!--Fim do Texto Explicativo Card-->

                                                    <!--Botão Card-->
                                                        <button class="d-template-center-hori" id="btn-gs-part1-cardTemplate-button" onclick="window.location='/simulado/listar'">
                                                            <!--Texto-->
                                                                <a href="/simulado/listar" id="txt-gs-part1-cardTemplate-button-text">Acessar</a>
                                                            <!--Icon-->
                                                                <img src="/img/admin/gerenciarConta/setaAzul.png" id="icon-gs-part1-cardTemplete-button-icon">
                                                        </button>
                                                    <!--Fim do Botão Card-->

                                                </div>
                                            <!--Fim do Card Body-->

                                        </div>
                                    <!--Fim do Card Simulado-->

                                </div>
                            <!--Fim do Row-->

                        </div>
                    <!--Fim da Coluna B-->

                </div>
            <!--Fim do Row-->

        </div>
    <!--Fim do Container Parte 1-->

    <!--Container Tabela-->
    <div class="container-fluid" id="d-sistema-tableEstudante">
            
            <!--Row Principal-->
                <div class="row row-cols-1">

                    <!--Coluna Titulo-->
                        <div class="col" id="d-CRUD-title-template">

                            <!--Texto Titulo-->
                                <h1 id="txt-CRUD-title-template">Estudantes Registrados</h1>
                            <!--Fim do Texto Titulo-->

                        </div>
                    <!--Fim da Coluna Titulo-->

                    <!--Fomulario Pesquisar-->
                        <form method="post" action="{{ url('/estudante/pesquisar') }}">
                            @csrf
                            @method('get')

                            <!--Coluna Barra de Pesquisa e Botões-->
                                <div class="col" id="d-CRUD-R-colSearchBar-BTNread">

                                    <!--Row COLUNA Barra de Pesquisa-->
                                        <div class="row row-cols-2">

                                            <!--Coluna Barra de Pesquisa-->
                                                <div class="col" id="d-CRUD-R-colSearchBar">

                                                    <!--Barra de Pesquisa-->
                                                        <div id="d-CRUD-R-seachBar">
                                                            
                                                            <!--Alinhamento Barra de Pesquisa-->
                                                                <div class="row row-cols-2">
                                                                    
                                                                    <!--Coluna Icone-->
                                                                        <div class="col" id="d-CRUD-R-colSeachIco">
                                                                            <ion-icon name="search-circle-outline" id="icon-CRUD-R-seachIco"></ion-icon>
                                                                        </div>
                                                                    <!--Fim da Coluna Icone-->

                                                                    <!--Coluna Input-->
                                                                        <div class="col" id="d-CRUD-R-colSeachInput">
                                                                            <input type="text" id="input-CRUD-R-seachInput" placeholder="Pesquisar">
                                                                        </div>
                                                                    <!--Fim da Coluna Input-->

                                                                </div>
                                                            <!--Fim do Alinhamento Barra de Pesquisa-->

                                                        </div>
                                                    <!--Fim da Barra de Pesquisa-->

                                                </div>
                                            <!--Fim da Coluna Barra de Pesquisa-->
                                            
                                            <!--Coluna Botões-->
                                                <div class="col" id="d-CRUD-R-colBTNread">
                                                    <button id="btn-CRUD-R-btnBuscar">Buscar</button>
                                                </div>
                                            <!--Fim da Coluna Botões-->

                        </form>
                    <!--Fim do Formulario Pesquisar-->

                                </div>
                            <!--Fim do Row COLUNA Barra de Pesquisa-->

                        </div>
                    <!--Fim da Coluna Barra de Pesquisa e Botões-->

                    <!-- Linha de Paginação -->
                        <div class="col" id="d-paginate-previous">

                            @if ($Estudantes->currentPage() == $Estudantes->onfirstPage())
                                <button class="btn border-0" id="d-paginate-previous-btn" onclick="window.location='{{ $Estudantes->previousPageUrl() }}'" disabled> Anterior </button> &nbsp;&nbsp;&nbsp;&nbsp;
                            @else
                                <button class="btn" id="d-paginate-previous-btn" name="action" onclick="window.location='{{ $Estudantes->previousPageUrl() }}'"> Anterior </button> &nbsp;&nbsp;&nbsp;&nbsp;
                            @endif

                            @if ($Estudantes->currentPage() == $Estudantes->lastPage())
                                <button class="btn border-0" id="d-paginate-next-btn" name="action" onclick="window.location='{{ $Estudantes->nextPageUrl() }}'" disabled> Próximo </button>
                            @else
                                <button class="btn" id="d-paginate-next-btn" name="action" onclick="window.location='{{ $Estudantes->nextPageUrl() }}'"> Próximo </button>
                            @endif

                        </div>
                    <!-- Fim da linha de páginação -->

                    <!-- Tabela de Perguntas Registradas -->
                        <center>
                            <div class="col" id="d-quest-voc-table">
                                
                                <table id="table-quest-voc" class="table-striped">
                                    <tr id="table-quest-voc-title">
                                        <th id="table-quest-voc-id">ID</th>
                                        <th id="table-quest-voc-perg">Usuario</th>
                                        <th id="table-quest-voc-perg">Email</th>
                                        <th id="table-quest-voc-perg">Tipo de Usuario</th>
                                        <th id="table-quest-voc-funcoes">Funções</th>
                                    </tr>
                                    @foreach($Estudantes as $Estudante)
                                    <tr id="table-quest-voc-data-{{$Estudante->id_estudante}}">
                                        <td id="table-quest-voc-linha"> {{$Estudante->id_usuario}} </td>
                                        <td id="table-quest-voc-linha"> {{$Estudante->nome_usuario}} </td>
                                        <td id="table-quest-voc-linha"> {{$Estudante->email_usuario}} </td>
                                        <td id="table-quest-voc-linha"> {{$Estudante->tipoUsuario}} </td>
                                        <td id="table-quest-voc-linha-func">
                                            <center>
                                                <!--Botão Editar-->
                                                <a name="edit" class="btn-template-icon" href="{{url("/estudante/editar/$Estudante->id_usuario")}}">
                                                    <ion-icon name="create-outline" id="img-template-icons"></ion-icon>
                                                </a>
                                                <!--Fim do Botão Editar-->
                                            </center>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                <br><br><br><br><br><br>
                            </div>
                        </center>
                    <!-- Fim da Tabela de Perguntas Registradas -->

                </div>
            <!--Fim do Row Principal-->  
                <button class="d-template-center-hori" id="btn-gs-part2-verMais"><a id="txt-gs-part2-verMais" href="/estudante/listar">Ver Mais</a></button>
        </div>
    <!--Fim do Container Principal-->

<script src="js/crud.js"></script>  

</body>
</html>
@endsection