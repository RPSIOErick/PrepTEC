@extends('layouts.main-NavbarOnly')

@section('title', 'Questionário Vocacional - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/questionarios/questionarioVocacional/questionario.css">

<!-- Condições em PHP para paginação do conteúdo (Favor, não alterar) -->
    @php 
        $pergunta = 1;

        //Caso exista a variavel page, o numero da pergunta recebe esse valor
        if(isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <=$total_perg){
            $pergunta = $_GET['page'];
        }
        
        //caso nao exista a variavel, é a primeira pergunta
        else if(!isset($_GET['page'])){
            $pergunta =1;

        //caso nao tiver a pergunta com a variavel page redireciona para a pagina nao encontrada
        }else if(isset($_GET['page'])){
            redirect('page_not_found');
        }

        
        $next = $pergunta +1;
        $prev = $pergunta -1;
    @endphp
<!-- Fim das Condições -->

<!-- Div Teste para escurecer o fundo, o nome pode mudar, era realmente só um teste -->
<div id="teste">

    <!-- Container de Questionário -->
    <div class="container" id="d-questionario">

        <!-- Conteúdo do Questionário -->
        <div class="row" id="d-questionario-content">

            <!-- Título do Questionário -->
            <div class="col" id="d-quest-content-title">
                <center>
                    <!-- Logo -->
                    <img src="/img/questionarios/questionarioVocacional/questionario/preptec-logo-black.png" alt="Logo" id="d-questionario-content-logo">
                    <!-- Fim da Logo -->

                    <br>

                    <!-- Título -->
                    Questionário Vocacional
                    <!-- Fim do Título -->
                </center>
            </div>
            <!-- Fim do Título do Questionário -->

        </div>
        <!-- Fim do Conteúdo do Questionário -->

            <!-- Perguntas do Questionário / Form -->
            <form action="/questionario-vocacional/responder" method="post">
                @csrf
                <!-- Input para definir a página atual -->
                <input type="hidden" name="page" id="page" value="{{ $pergunta }}">{{-- número da pagina/pergunta --}}
                <!-- Fim do input para definição de página atual -->

                <!-- Div row para onde aparece a pergunta -->
                <div class="row" id="d-quest-perguntas">

                    @foreach($quest_voc as $questao)
                        <p id="d-quest-perguntas-p"> {{$questao->txt_perg}} </p>
                        <input type="hidden" name="id_pergunta" id="id_pergunta" value="{{$questao->id_pergunta }}">{{-- id da pergunta --}}
                    @endforeach
                    
                </div>
                <!-- Fim da div row para onde aparece a pergunta -->

                <!-- Opções do Questionário-->
                <div class="row" id="q-quest-options">
                    <!-- Primeira Coluna - Opção 1 -->
                    <div class="col" id="q-quest-op1">

                        <center>
                            <!-- Input + Label que definem o círculo de opção 1 -->
                            <input type="radio" id="q-quest-op1-input" name="opcao" value="-2">
                            <label for="q-quest-op1-input" class="form-control"></label><br>
                            <!-- Fim do Input + Label que definem o círculo de opção -->
                        </center>
                        <!-- Parágrafo (P) para a opção 1 -->
                        <p id="d-quest-op-p">
                            Discordo Muito
                        </p>

                    </div>
                    <!-- Fim da Primeira Coluna - Opção 1 -->
                    <!-- Segunda Coluna - Opção 2 -->
                    <div class="col" id="q-quest-op2">
                        
                        <center>
                            <!-- Input + Label que definem o círculo de opção 2 -->
                            <input type="radio" id="q-quest-op2-input" name="opcao" value="-1">
                            <label for="q-quest-op2-input" class="form-control"></label><br>
                            <!-- Fim do Input + Label que definem o círculo de opção -->
                        </center>
                        <p id="d-quest-op-p">
                            Discordo Pouco
                        </p>


                    </div>
                    <!-- Fim da Segunda Coluna - Opção 2 -->
                    <!-- Terceira Coluna - Opção 3 -->
                    <div class="col" id="q-quest-op3">
                        
                        <center>
                            <!-- Input + Label que definem o círculo de opção 3 -->
                            <input type="radio" id="q-quest-op3-input" name="opcao" value="1">
                            <label for="q-quest-op3-input" class="form-control"></label><br>
                            <!-- Fim do Input + Label que definem o círculo de opção -->
                        </center>
                        <p id="d-quest-op-p">
                            Concordo Pouco
                        </p>

                    </div>
                    <!-- Fim da Terceira Coluna - Opção 3 -->
                    <!-- Quarta Coluna - Opção 4 -->
                    <div class="col" id="q-quest-op4">
                        
                        <center>
                            <!-- Input + Label que definem o círculo de opção 3 -->
                            <input type="radio" id="q-quest-op4-input" name="opcao" value="2">
                            <label for="q-quest-op4-input" class="form-control"></label><br>
                            <!-- Fim do Input + Label que definem o círculo de opção -->
                        </center>
                        <p id="d-quest-op-p">
                            Concordo Muito
                        </p>

                    </div>
                    <!-- Fim da Quarta Coluna - Opção 4 -->
                    
                </div>
                <!-- Fim das Opções -->
        
            <!-- Fim das Perguntas do Questionário / Form -->
            
            <!-- Div row para os botões de páginação -->
            <div class="row" id="d-quest-voc-btn">
                
                <!-- Coluna Esquerda / Botão Anterior -->
                <div class="col">
                    <!-- Se a página atual for a primeira... -->
                    @if ($quest_voc->currentPage() == $quest_voc->onfirstPage())
                        
                        <!-- Botão Anterior Desativado -->
                        <button value="previous" name="action" class="btn" id="d-quest-voc-btn-previous" onclick="window.location='{{ $quest_voc->previousPageUrl() }}'" disabled> Anterior </button>

                    @else
                        
                        <!-- Botão Anterior Ativado -->
                        <button value="previous" name="action" class="btn" id="d-quest-voc-btn-previous" onclick="window.location='{{ $quest_voc->previousPageUrl() }}'"> Anterior </button>

                    @endif
                </div>
                <!-- Fim da Coluna Esquerda / Botão Anterior -->

                <!-- Coluna Direita / Botão Próximo -->
                <div class="col">
                    <!-- Se a página atual for a última... -->
                    @if ($quest_voc->currentPage() == $quest_voc->lastPage())    

                        <!-- Botão Finalizar -->
                        <button value="submit" name="action" class="btn" id="d-quest-voc-btn-next" onclick="window.location='{{ $quest_voc->nextPageUrl() }}'"> Finalizar </button>

                    @else

                        <!-- Botão Próximo -->
                        <button value="next" name="action" class="btn" id="d-quest-voc-btn-next" onclick="window.location='{{ $quest_voc->nextPageUrl() }}'"> Próximo </button>

                    @endif

                </div>
                <!-- Fim da Coluna Direita / Botão Próximo -->

            </div>
            <!-- Fim da div row para os botões de páginação -->

    </div>
    <!-- FIm do Container de Questionário -->
    </form>

</div>
<!-- Fim da Div "Teste" -->

@endsection