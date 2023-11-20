@extends('layouts.main-NavbarOnly')

@section('title', 'Pesquisa Estudantes - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/admin/crud.css">

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
                                        <button id="btn-CRUD-R-btnVoltarListagemGeral"><a href="/estudante/listar">Voltar para a <br>Listagem Geral</a></button>
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
                                        <th id="table-quest-voc-perg">Nome</th>
                                        <th id="table-quest-voc-intMult">Email</th>
                                        <th id="table-quest-voc-intMult">Tipo de Acesso</th>
                                        <th id="table-quest-voc-funcoes">Funções</th>
                                    </tr>

                                    @foreach ($resultadoAluno as $resultado)
                                        <tr id="table-result-data">

                                            <td id="table-quest-voc-linha"> {{$resultado->id_usuario}} </td>
                                            <td id="table-quest-voc-linha"> {{$resultado->nome_usuario}} </td>
                                            <td id="table-quest-voc-linha"> {{$resultado->email_usuario}} </td>
                                            <td id="table-quest-voc-linha-intMult"> {{$resultado->tipoUsuario}} </td>
                                            <td id="table-quest-voc-linha-func">

                                                <center>
                                                    <!--Botão Editar-->
                                                        <a name="edit" class="btn-template-icon" href="{{url("/estudante/editar/$resultado->id_usuario")}}">
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
                <button id="btn-CRUD-R-btnVoltarListagemGeral-mobile"><a href="/estudante/listar">Voltar a Listagem Geral</a></button>
                

            </div>
        <!--Fim do Row Principal-->  
       
        
    </div>
<!--Fim do Container Principal-->



@endsection