@extends('layouts.main-NavbarOnly')

@section('title', 'Cadastrar Simulado - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/admin/crud.css">

<!-- Container de Criação de Questões -->
    <div class="container-fluid">

        <!--Row-->
            <div class="row row-cols-1">

                <!--Coluna Titulo-->
                    <div class="col" id="d-CRUD-title-template">
                        <h1 id="txt-CRUD-title-template">Simulado</h1>
                    </div>
                <!--Fim da Coluna Titulo-->
                
                <!--Formulario-->
                    <form action="{{ url('/simulado/salvar') }}" method="POST" id="d-CRUD-CU-col-template">

                        @csrf
                        <!--Cabeçario do CRUD-->
                            <div class="col" id="d-CRUD-CU-col-header-template">

                                <!--Row-->
                                    <div class="row row-cols-2">

                                        <!--Titulo do CRUD-->
                                            <div class="col" id="d-CRUD-CU-col-header-title-template">
                                                <h2 id="txt-CRUD-CU-col-header-title-template">Cadastro de Questões</h2>
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

                                <!--Campo Questão-->
                                    <div class="col">
                                        <label id="txt-CRUD-CU-label-template">Questão</label><br>
                                        <textarea id="input-CRUD-CU-bigInp-template" name="txt_quest" placeholder="Adicione aqui o texto da questão..." required></textarea>
                                    </div>
                                <!--Fim do Campo Questão-->

                                <!--Campo Pergunta-->
                                    <div class="col">
                                        <label id="txt-CRUD-CU-label-template">Pergunta</label><br>
                                        <textarea id="input-CRUD-CU-bigInp-template" name="txt_perg" placeholder="Adicione aqui a questão..." required></textarea>
                                    </div>
                                <!--Fim do Campo Pergunta-->

                                <!--Campo Alternativas-->
                                    <div class="col">

                                        <!--Inputs Alternativa-->
                                            <div class="row row-cols-1">

                                                <!--Titulo do Campo-->
                                                    <div class="col" id="d-CRUD-CU-alt-title">
                                                        <h2 id="txt-CRUD-CU-alt-title">Alternativas</h2>
                                                    </div>
                                                <!--Fim do titulo do Campo-->

                                                <!--Nome dos Campos-->
                                                    <div class="row row-cols-3" id="d-CRUD-CU-alt-labelRow">

                                                        <!--Id-->
                                                            <div class="col" id="d-CRUD-CU-alt-labelCol1">
                                                                <label id="txt-CRUD-CU-alt-labelCamp">Id</label> 
                                                            </div>
                                                        <!--Fim do Id-->

                                                        <!--Texto da Alternativa-->
                                                            <div class="col" id="d-CRUD-CU-alt-labelCol2">
                                                                <label id="txt-CRUD-CU-alt-labelCamp">Texto da Alternativa</label> 
                                                            </div>
                                                        <!--Fim do Texto da Alternativa-->

                                                        <!--Alternativa Correta-->
                                                            <div class="col" id="d-CRUD-CU-alt-labelCol3">
                                                                <label id="txt-CRUD-CU-alt-labelCamp">Alternativa<br> Correta</label> 
                                                            </div>
                                                        <!--Fim do Alternativa Correta-->

                                                    </div>
                                                <!--Fim do Nome dos Campos-->

                                                <!--Campo Alternativa A-->
                                                    <div class="col" id="d-CRUD-CU-alt-col">

                                                        <!--Alinhamento do Input + Checkbox-->
                                                            <div class="row row-cols-2">
                                                                
                                                                <!--Coluna Alternativa + Letra-->
                                                                    <div class="col" id="d-CRUD-CU-alt-colInput">

                                                                        <!--Alinhamento do Input-->
                                                                            <div class="row row-cols-2">

                                                                                <!--Coluna Letra-->
                                                                                    <div class="col" id="d-CRUD-CU-alt-labelLetter">
                                                                                        <label id="txt-CRUD-CU-alt-labelLetter">A</label>
                                                                                    </div>
                                                                                <!--Fim da Coluna Letra-->

                                                                                <!--Coluna Input-->
                                                                                    <div class="col"  id="d-CRUD-CU-altInput">
                                                                                        <textarea id="input-CRUD-CU-alt" name="txt_alter[]" required></textarea>
                                                                                    </div>
                                                                                <!--Fim da Coluna Input-->

                                                                            </div>
                                                                        <!--Fim do Alinhamento do Input-->

                                                                    </div>
                                                                <!--Fim da Coluna Alternativa + Letra-->

                                                                <!--Checkbox-->
                                                                    <div class="col" id="d-CRUD-CU-alt-checkbox">
                                                                        <input type="radio" name="alter_true" value="0" id="checkbox-CRUD-CU-alt" required>
                                                                    </div>
                                                                <!--Fim do Checkbox-->

                                                            </div>
                                                        <!--Fim do Alinhamento do Input + Checkbox-->

                                                    </div>
                                                <!--Fim do Campo Alternativa A-->
                                                
                                                <!--Campo Alternativa B-->
                                                    <div class="col" id="d-CRUD-CU-alt-col">

                                                        <!--Alinhamento do Input + Checkbox-->
                                                            <div class="row row-cols-2">
                                                                
                                                                <!--Coluna Alternativa + Letra-->
                                                                    <div class="col" id="d-CRUD-CU-alt-colInput">

                                                                        <!--Alinhamento do Input-->
                                                                            <div class="row row-cols-2">

                                                                                <!--Coluna Letra-->
                                                                                    <div class="col" id="d-CRUD-CU-alt-labelLetter">
                                                                                        <label id="txt-CRUD-CU-alt-labelLetter">B</label>
                                                                                    </div>
                                                                                <!--Fim da Coluna Letra-->

                                                                                <!--Coluna Input-->
                                                                                    <div class="col"  id="d-CRUD-CU-altInput">
                                                                                        <textarea id="input-CRUD-CU-alt" name="txt_alter[]" required></textarea>
                                                                                    </div>
                                                                                <!--Fim da Coluna Input-->

                                                                            </div>
                                                                        <!--Fim do Alinhamento do Input-->

                                                                    </div>
                                                                <!--Fim da Coluna Alternativa + Letra-->

                                                                <!--Checkbox-->
                                                                    <div class="col" id="d-CRUD-CU-alt-checkbox">
                                                                        <input type="radio" name="alter_true" value="1" id="checkbox-CRUD-CU-alt" required>
                                                                    </div>
                                                                <!--Fim do Checkbox-->

                                                            </div>
                                                        <!--Fim do Alinhamento do Input + Checkbox-->

                                                    </div>
                                                <!--Fim do Campo Alternativa B-->

                                                <!--Campo Alternativa C-->
                                                    <div class="col" id="d-CRUD-CU-alt-col">

                                                        <!--Alinhamento do Input + Checkbox-->
                                                            <div class="row row-cols-2">
                                                                
                                                                <!--Coluna Alternativa + Letra-->
                                                                    <div class="col" id="d-CRUD-CU-alt-colInput">

                                                                        <!--Alinhamento do Input-->
                                                                            <div class="row row-cols-2">

                                                                                <!--Coluna Letra-->
                                                                                    <div class="col" id="d-CRUD-CU-alt-labelLetter">
                                                                                        <label id="txt-CRUD-CU-alt-labelLetter">C</label>
                                                                                    </div>
                                                                                <!--Fim da Coluna Letra-->

                                                                                <!--Coluna Input-->
                                                                                    <div class="col"  id="d-CRUD-CU-altInput">
                                                                                        <textarea id="input-CRUD-CU-alt" name="txt_alter[]" required></textarea>
                                                                                    </div>
                                                                                <!--Fim da Coluna Input-->

                                                                            </div>
                                                                        <!--Fim do Alinhamento do Input-->

                                                                    </div>
                                                                <!--Fim da Coluna Alternativa + Letra-->

                                                                <!--Checkbox-->
                                                                    <div class="col" id="d-CRUD-CU-alt-checkbox">
                                                                        <input type="radio" name="alter_true" value="2" id="checkbox-CRUD-CU-alt" required>
                                                                    </div>
                                                                <!--Fim do Checkbox-->

                                                            </div>
                                                        <!--Fim do Alinhamento do Input + Checkbox-->

                                                    </div>
                                                <!--Fim do Campo Alternativa C-->

                                                <!--Campo Alternativa D-->
                                                    <div class="col" id="d-CRUD-CU-alt-col">

                                                        <!--Alinhamento do Input + Checkbox-->
                                                            <div class="row row-cols-2">
                                                                
                                                                <!--Coluna Alternativa + Letra-->
                                                                    <div class="col" id="d-CRUD-CU-alt-colInput">

                                                                        <!--Alinhamento do Input-->
                                                                            <div class="row row-cols-2">

                                                                                <!--Coluna Letra-->
                                                                                    <div class="col" id="d-CRUD-CU-alt-labelLetter">
                                                                                        <label id="txt-CRUD-CU-alt-labelLetter">D</label>
                                                                                    </div>
                                                                                <!--Fim da Coluna Letra-->

                                                                                <!--Coluna Input-->
                                                                                    <div class="col"  id="d-CRUD-CU-altInput">
                                                                                        <textarea id="input-CRUD-CU-alt" name="txt_alter[]" required></textarea>
                                                                                    </div>
                                                                                <!--Fim da Coluna Input-->

                                                                            </div>
                                                                        <!--Fim do Alinhamento do Input-->

                                                                    </div>
                                                                <!--Fim da Coluna Alternativa + Letra-->

                                                                <!--Checkbox-->
                                                                    <div class="col" id="d-CRUD-CU-alt-checkbox">
                                                                        <input type="radio" name="alter_true"value="3" id="checkbox-CRUD-CU-alt" required>
                                                                    </div>
                                                                <!--Fim do Checkbox-->

                                                            </div>
                                                        <!--Fim do Alinhamento do Input + Checkbox-->

                                                    </div>
                                                <!--Fim do Campo Alternativa D-->

                                                <!--Campo Alternativa E-->
                                                    <div class="col" id="d-CRUD-CU-alt-col">

                                                        <!--Alinhamento do Input + Checkbox-->
                                                            <div class="row row-cols-2">
                                                                
                                                                <!--Coluna Alternativa + Letra-->
                                                                    <div class="col" id="d-CRUD-CU-alt-colInput">

                                                                        <!--Alinhamento do Input-->
                                                                            <div class="row row-cols-2">

                                                                                <!--Coluna Letra-->
                                                                                    <div class="col" id="d-CRUD-CU-alt-labelLetter">
                                                                                        <label id="txt-CRUD-CU-alt-labelLetter">E</label>
                                                                                    </div>
                                                                                <!--Fim da Coluna Letra-->

                                                                                <!--Coluna Input-->
                                                                                    <div class="col"  id="d-CRUD-CU-altInput">
                                                                                        <textarea id="input-CRUD-CU-alt" name="txt_alter[]" required></textarea>
                                                                                    </div>
                                                                                <!--Fim da Coluna Input-->

                                                                            </div>
                                                                        <!--Fim do Alinhamento do Input-->

                                                                    </div>
                                                                <!--Fim da Coluna Alternativa + Letra-->

                                                                <!--Checkbox-->
                                                                    <div class="col" id="d-CRUD-CU-alt-checkbox">
                                                                        <input type="radio" name="alter_true" value="4" id="checkbox-CRUD-CU-alt" required>
                                                                    </div>
                                                                <!--Fim do Checkbox-->

                                                            </div>
                                                        <!--Fim do Alinhamento do Input + Checkbox-->

                                                    </div>
                                                <!--Fim do Campo Alternativa E-->

                                            </div>
                                        <!--Fim do Inputs Alternativa-->
                                        
                                    </div>
                                <!--Fim do Campo Alternativas-->  
                                
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