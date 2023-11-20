@extends('layouts.main-NavbarOnly')

@section('title', 'Listar Estudantes - PrepTEC')

@section('content')

<!--Importação CSS e JS-->
    <link rel="stylesheet" href="/css/admin/crud.css">
<!--Fim da Importação CSS e JS-->

<!--Container Principal-->
    <div class="container-fluid">
        
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
                                                                        <input type="text" id="input-CRUD-R-seachInput" placeholder="Pesquisar" name="query" required>
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
            <p id="txt-CRUD-R-mobileWarning">Arraste para o lado para visualizar a tabela</p>
    </div>
<!--Fim do Container Principal-->
@endsection