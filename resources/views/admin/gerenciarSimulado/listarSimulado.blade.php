@extends('layouts.main-NavbarOnly')

@section('title', 'Listar Simulado - PrepTEC')

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
                            <h1 id="txt-CRUD-title-template">Simulado</h1>
                        <!--Fim do Texto Titulo-->

                    </div>
                <!--Fim da Coluna Titulo-->

                <!--Fomulario Pesquisar-->
                    <form method="POST" action="{{ url('/simulado/pesquisar') }}" style="appearance: none;">
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
                        </form>
                    <!--Fim do Formulario Pesquisar-->
                    
                                                <button id="btn-CRUD-R-btnNovo" type="button" onclick="window.location='/simulado/cadastrar'"><a href="/simulado/cadastrar" id="txt-CRUD-R-btnNovo">Novo</a></button>
                                            </div>
                                        <!--Fim da Coluna Botões-->

                                    </div>
                                <!--Fim do Row COLUNA Barra de Pesquisa-->

                            </div>
                        <!--Fim da Coluna Barra de Pesquisa e Botões-->

                <!-- Linha de Paginação -->
                    <div class="col" id="d-paginate-previous">

                        @if ($quests->currentPage() == $quests->onfirstPage())
                            <button class="btn border-0" id="d-paginate-previous-btn" onclick="window.location='{{ $quests->previousPageUrl() }}'" disabled> Anterior </button> &nbsp;&nbsp;&nbsp;&nbsp;
                        @else
                            <button class="btn" id="d-paginate-previous-btn" name="action" onclick="window.location='{{ $quests->previousPageUrl() }}'"> Anterior </button> &nbsp;&nbsp;&nbsp;&nbsp;
                        @endif

                        @if ($quests->currentPage() == $quests->lastPage())
                            <button class="btn border-0" id="d-paginate-next-btn" name="action" onclick="window.location='{{ $quests->nextPageUrl() }}'" disabled> Próximo </button>
                        @else
                            <button class="btn" id="d-paginate-next-btn" name="action" onclick="window.location='{{ $quests->nextPageUrl() }}'"> Próximo </button>
                        @endif

                    </div>
                <!-- Fim da linha de páginação -->

                <!-- Tabela de Perguntas Registradas -->
                    <center>
                        <div class="col" id="d-quest-voc-table">
                            
                                <table id="table-quest-voc" class="table-striped">
                                    <tr id="table-quest-voc-title">
                                        <th id="table-quest-voc-id">ID</th>
                                        <th id="table-quest-voc-perg"> Texto da Questão </th>
                                        <th id="table-quest-voc-intMult"> Questão </th>
                                        <th id="table-quest-voc-funcoes">Funções</th>
                                    </tr>
                                    @foreach($quests as $quest)
                                    <tr id="table-quest-voc-data-{{$quest->id_quest}}">
                                        <td id="table-quest-voc-linha"> {{$quest->id_quest}} </td>
                                        <td id="table-quest-voc-linha"> {{$quest->txt_quest}} </td>
                                        <td id="table-quest-voc-linha-intMult"> {{$quest->txt_perg}} </td>
                                        <td id="table-quest-voc-linha-func">
                                            <center>
                                                <a name="edit" class="btn-template-icon" href="#Popup-Excl-{{$quest->id_quest}}">
                                                    <button name="delete" class="btn-template-icon" type="submit">
                                                        <ion-icon name="trash-outline" id="img-template-icons"></ion-icon>
                                                    </button>
                                                </a>


                                            <!-- Popup de Exclusão -->
                                                <div id="Popup-Excl-{{$quest->id_quest}}" class="overlay">
                                                    <div class="popup">
                                                        <a class="close" href="#">&times;</a>
                                                        <div class="row">
                                                            <!-- Formário de cadastro -->
                                                            <div class="col" id="Form-Excl">
                                                                <!-- Icone + título do formulário -->
                                                                <center>
                                                                    <ion-icon name="trash-outline" id="Trash-Icon"></ion-icon> <h1 id="Popup-Excl_Title"> Excluir </h1>
                                                                    
                                                                        <!--Não Entendi-->
                                                                        <form action="{{ route('excluir_questao', ['id_quest' => $quest->id_quest]) }}" method="POST" id="table-quest-voc-form-excl-{{$quest->id_quest}}">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <input type="text" value="{{$quest->id_quest}}" name="id_quest" hidden>                
                                                                        
                                                                        <p id="Form-Excl-p"> Deseja mesmo excluir essa questão? Questão: {{$quest->id_quest}}</p>
                                                                        <button class="btn" type="submit" id="Excl-form-btn"> Confirmar </button>
                                                                    </form>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- Fim do Popup de Exclusão -->

                                            <!--Botão Editar-->
                                                <a name="edit" class="btn-template-icon" href="{{url("/simulado/editar/$quest->id_quest")}}">
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