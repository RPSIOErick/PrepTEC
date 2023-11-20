@extends('layouts.main-NavbarOnly')

@section('title', 'Editar Questionario Vocacional - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/admin/crud.css">

<!-- Container de Criação de Questões -->
    <div class="container-fluid">

        <!--Row-->
            <div class="row row-cols-1">

                <!--Coluna Titulo-->
                    <div class="col" id="d-CRUD-title-template">
                        <h1 id="txt-CRUD-title-template">Questionário Vocacional</h1>
                    </div>
                <!--Fim da Coluna Titulo-->
                
                <!--Formulario-->
                    <form action="/questionario/atualizar/{{$quest->id_pergunta}}"  method="POST" id="d-CRUD-CU-col-template">
                        <input hidden type="text" name="id_QuestVoc" value="{{$quest->id_pergunta}}">
                        @csrf
                        @method('put')
                        <!--Cabeçario do CRUD-->
                            <div class="col" id="d-CRUD-CU-col-header-template">

                                <!--Row-->
                                    <div class="row row-cols-2">

                                        <!--Titulo do CRUD-->
                                            <div class="col" id="d-CRUD-CU-col-header-title-template">
                                                <h2 id="txt-CRUD-CU-col-header-title-template">Alterar Perguntas</h2>
                                            </div>
                                        <!--Fim do Titulo do CRUD-->

                                        <!--Botões do Formulario-->
                                            <div class="col" id="d-CRUD-CU-col-header-btn-template">

                                                <!--Botão Limpar-->
                                                    <button id="btn-CRUD-CU-col-header-btnLimpar-template" type="button" onclick="limparCampos()">Limpar</button>
                                                <!--Fim do Botão Limpar-->

                                                <!--Botão Salvar-->
                                                    <button id="btn-CRUD-CU-col-header-btnSalvar-template">Salvar</button>
                                                <!--Fim do Botão Salvar-->

                                            </div>
                                        <!--Fim dos Botões do Formulario-->

                                    </div>
                                <!--Fim do Row-->                            

                            </div>
                        <!--Fim do Cabeçario do CRUD-->

                        <!--Body CRUD-->
                            <div class="col" id="d-CRUD-CU-col-body-template">


                                <!--Campo Pergunta-->
                                    <div class="col">
                                        <label id="txt-CRUD-CU-label-template">Pergunta</label><br>
                                        <textarea id="input-CRUD-CU-bigInp-template" placeholder="Adicione aqui a pergunta..." name="txt_perg" value="{{$quest->txt_perg}}" required>{{$quest->txt_perg}}</textarea>
                                    </div>
                                <!--Fim do Campo Pergunta-->
                                    <br><br>
                                <!--Campo Inteligencias-->
                                    <div class="col">
                                        
                                        <label id="txt-CRUD-CU-label-template">Selecione a Inteligencia relacionada</label><br>

                                        <select id="input-CRUD-CU-qv-dropdown" class="input-CRUD-CU-qv-dropdown-arrow"  name="id_TipoInteligencia" form="d-CRUD-CU-col-template">
                                            <option value="{{$tipoInteligencia->id_TipoInteligencia}}" selected>{{$tipoInteligencia->nome_inteligencia}} (Selecionado)</option>

                                            @foreach($inteligencias as $inteligencia)
                                                <option value="{{$inteligencia->id_TipoInteligencia}}">{{$inteligencia->nome_inteligencia}}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                <!--Fim do Campo Inteligencias-->

                            </div>
                        <!--Fim do Body CRUD-->
                
                    </form>
                <!--Fim do Formulario-->

            </div>
        <!--Fim do Row-->

    </div>
<!-- Fim do Container de Criação de Questões -->
<script src="/js/crud.js"></script>
@endsection