@extends('layouts.main-NavbarOnly')

@section('title', 'Editar Simulado - PrepTEC')

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
                    <form action="/simulado/atualizar/{{ $quest->id_quest }}" method="POST" id="d-CRUD-CU-col-template">
                        <input hidden type="text" name="id_QuestVoc" value="{{$quest->id_quest}}">
                        @csrf
                        @method('put')
                        <!--Cabeçario do CRUD-->
                            <div class="col" id="d-CRUD-CU-col-header-template">

                                <!--Row-->
                                    <div class="row row-cols-2">

                                        <!--Titulo do CRUD-->
                                            <div class="col" id="d-CRUD-CU-col-header-title-template">
                                                <h2 id="txt-CRUD-CU-col-header-title-template">Alterar Questões</h2>
                                            </div>
                                        <!--Fim do Titulo do CRUD-->

                                        <!--Botões do Formulario-->
                                            <div class="col" id="d-CRUD-CU-col-header-btn-template">

                                                <!--Botão Limpar-->
                                                <button id="btn-CRUD-CU-col-header-btnLimpar-template" type="button" onclick="limparCampos()">Limpar</button>
                                                <!--Fim do Botão Limpar-->

                                                <!--Botão Salvar-->
                                                    <button id="btn-CRUD-CU-col-header-btnSalvar-template" type="submit">Salvar</button>
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
                                        <textarea id="input-CRUD-CU-bigInp-template" name="txt_quest" placeholder="Adicione aqui o texto da questão..." required>{{$quest->txt_quest}}</textarea>
                                    </div>
                                <!--Fim do Campo Questão-->

                                <!--Campo Pergunta-->
                                    <div class="col">
                                        <label id="txt-CRUD-CU-label-template">Pergunta</label><br>
                                        <textarea id="input-CRUD-CU-bigInp-template" name="txt_perg" placeholder="Adicione aqui a questão..." required>{{$quest->txt_perg}}</textarea>
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
                                                                <label id="txt-CRUD-CU-alt-labelCamp">Alternativa<br>Correta</label> 
                                                            </div>
                                                        <!--Fim do Alternativa Correta-->

                                                    </div>
                                                <!--Fim do Nome dos Campos-->
                                            @php
                                                $letra_alternativa = "A";
                                            @endphp
                                            @foreach ($alternativas as $index => $alternativa)                                          
                                                <!--Campo Alternativa--> <!--SIM, ELE EXIBE TODAS DE UMA VEZ-->
                                                    <div class="col" id="d-CRUD-CU-alt-col">

                                                        <!--Alinhamento do Input + Checkbox-->
                                                            <div class="row row-cols-2">
                                                                
                                                                <!--Coluna Alternativa + Letra-->
                                                                    <div class="col" id="d-CRUD-CU-alt-colInput">

                                                                        <!--Alinhamento do Input-->
                                                                            <div class="row row-cols-2">
                                                                                <input type="hidden" name="alternativas[{{$index}}][id_alternativa]" value="{{$alternativa->id_alternativa}}"> {{-- ID RESPOSTA --}}
                                                                                <input type="hidden" name="id_quest" value="{{$quest->id_quest}}"> {{-- ID QUESTÃO --}}

                                                                                <!--Coluna Letra-->
                                                                                    <div class="col" id="d-CRUD-CU-alt-labelLetter">
                                                                                        <label id="txt-CRUD-CU-alt-labelLetter">{{ $letra_alternativa }}</label>
                                                                                    </div>
                                                                                <!--Fim da Coluna Letra-->

                                                                                <!--Coluna Input-->
                                                                                    <div class="col"  id="d-CRUD-CU-altInput">
                                                                                        <textarea class="input-CRUD-CU-alt" id="input-CRUD-CU-alt" name="alternativas[{{ $index }}][text_alternativas]" required>{{ $alternativa->txt_alter}}</textarea>
                                                                                    </div>
                                                                                <!--Fim da Coluna Input-->

                                                                            </div>
                                                                        <!--Fim do Alinhamento do Input-->

                                                                    </div>
                                                                <!--Fim da Coluna Alternativa + Letra-->

                                                                <!--Checkbox-->
                                                                    <div class="col" id="d-CRUD-CU-alt-checkbox">
                                                                        <input type="radio" class="d-simu-create-alternativa1-radio" name="alternativas[{{$index}}][alternativas_certa]" id="d-simu-create-alternativa1-radio-{{  $index  }}" @if ($alternativa->alter_true == 1) checked @endif>
                                                                    </div>
                                                                <!--Fim do Checkbox-->

                                                            </div>
                                                        <!--Fim do Alinhamento do Input + Checkbox-->

                                                    </div>
                                                <!--Fim do Campo Alternativa A-->
                                            @php
                                                $letra_alternativa ++;
                                            @endphp 
                                               
                                            @endforeach

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
<script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
<script src="/js/crud.js"></script>
<script>
    function check_correct() {
        // Uncheck all checkboxes before checking the selected one
        $('.d-simu-create-alternativa1-radio').prop('checked', false);

        // Check the selected checkbox
        $(this).prop('checked', true);
    }

    $(document).on('click', '.d-simu-create-alternativa1-radio', check_correct);
</script>

@endsection