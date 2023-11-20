@extends('layouts.main-NavbarOnly')

@section('title', 'Pesquisa Questionario Vocacional - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/admin/crud.css">

<!--Container Principal-->
    <div class="container-fluid">
        
        <!--Row Principal-->
            <div class="row row-cols-1">

                <!--Coluna Titulo-->
                    <div class="col" id="d-CRUD-title-template">

                        <!--Texto Titulo-->
                            <h1 id="txt-CRUD-title-template">Questionario Vocacional</h1>
                        <!--Fim do Texto Titulo-->

                    </div>
                <!--Fim da Coluna Titulo-->

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
                                                                        <input type="text" id="input-CRUD-R-seachInput" value="Resultados para: {{$query}}" readonly>
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
                                        <button id="btn-CRUD-R-btnVoltarListagemGeral"><a href="/questionario/listar">Voltar para a <br>Listagem Geral</a></button>
                                    </div>
                                <!--Fim da Coluna Botões-->

                            </div>
                        <!--Fim do Row COLUNA Barra de Pesquisa-->

                    </div>
                <!--Fim da Coluna Barra de Pesquisa e Botões-->

                <!-- Tabela de Respostas Encontradas -->
                    <center>

                        <div class="col" id="d-quest-voc-table">
                            
                                <table id="table-quest-voc" class="table-striped">

                                    <tr id="table-quest-voc-title">
                                        <th id="table-quest-voc-id">ID</th>
                                        <th id="table-quest-voc-perg"> Texto da Pergunta</th>
                                        <th id="table-quest-voc-intMult"> Inteligenca Multipla</th>
                                        <th id="table-quest-voc-funcoes">Funções</th>
                                    </tr>

                                    @foreach ($resultadoQuestionarioVocacional as $resultado)
                                        <tr id="table-result-data">

                                            <td id="table-quest-voc-linha"> {{$resultado->id_pergunta}} </td>
                                            <td id="table-quest-voc-linha"> {{$resultado->txt_perg}} </td>
                                            <td id="table-quest-voc-linha-intMult">
                                                
                                                <!-- Importa o Model "Tipo Inteligencia" onde o o ID do tipo está presente na pergunta, apresenta o nome -->
                                                {{ \App\Models\TipoInteligencia::find($resultado->id_TipoInteligencia)->nome_inteligencia }}

                                            </td>
                                            <td id="table-quest-voc-linha-func">

                                                <center>
                                                    <a name="edit" class="btn-template-icon" href="#Popup-Excl-{{$resultado->id_pergunta}}">
                                                        <button name="delete" class="btn-template-icon" type="submit">
                                                            <ion-icon name="trash-outline" id="img-template-icons"></ion-icon>
                                                        </button>
                                                    </a>

                                                    <!-- Popup de Exclusão -->
                                                        <div id="Popup-Excl-{{$resultado->id_pergunta}}" class="overlay">
                                                            <div class="popup">
                                                                <a class="close" href="#">&times;</a>
                                                                <div class="row">
                                                                    <!-- Formário de cadastro -->
                                                                    <div class="col" id="Form-Excl">
                                                                        <!-- Icone + título do formulário -->
                                                                        <center>
                                                                            <ion-icon name="trash-outline" id="Trash-Icon"></ion-icon> <h1 id="Popup-Excl_Title"> Excluir </h1>
                                                                            <form action="/questionario/excluir/{{$resultado->id_pergunta}}" method="POST" id="table-quest-voc-form-excl-{{$resultado->id_quest}}">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <input type="text" value="{{$resultado->id_pergunta}}" name="id_pergunta" hidden>                
                                                                                
                                                                                <p id="Form-Excl-p"> Deseja mesmo excluir essa pergunta? Pergunta: {{$resultado->id_pergunta}}</p>
                                                                                <button class="btn" type="submit" id="Excl-form-btn"> Confirmar </button>
                                                                            </form>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- Fim do Popup de Exclusão -->

                                                    <!--Botão Editar-->
                                                        <a name="edit" class="btn-template-icon" href="{{url("/questionario/editar/$resultado->id_pergunta")}}">
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
                <p id="txt-CRUD-R-mobileWarning">Arraste para o lado para visualizar a tabela</p>
                <button id="btn-CRUD-R-btnVoltarListagemGeral-mobile"><a href="/questionario/listar">Voltar a Listagem Geral</a></button>

            </div>
        <!--Fim do Row Principal-->  

        
    </div>
<!--Fim do Container Principal-->


@endsection