@extends('layouts.main-NavbarOnly')

@section('title', 'Simulado - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/questionarios/simulado/simulado.css">

@php 
    $pergunta = 1;

    //Caso exista a variavel page, o numero da pergunta recebe esse valor
    if(isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <=$total_quest){
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

<!-- Container Simulado -->

<div class="container" id="d-simu">
    <form action="/simulado/responder" method="post">
        <!-- Numero da pagina -->
        <input type="hidden" name="page" id="page" value="{{ $pergunta }}">{{-- número da pagina/pergunta --}}
        @csrf
        @foreach($quest_sim as $quest)

        <div class="col" id="d-simu-header">
            <p id="d-simu-header-title">Simulado Vestibulinho</p>
            <p id="d-simu-header-numerator"> <b> {{ $quest_sim->firstItem() }} </b>/ {{$total_quest}} </p>
        </div>

        <center>
        <div class="col" id="d-simu-header-mobile">
            <p id="d-simu-header-title">  Simulado Vestibulinho <br> <b> {{$quest->id_quest}}</b>/{{$total_quest}} </p>
        </div>
        </center>

        <div class="col" id="d-simu-quest">
            
            <div id="d-simu-quest-p-question">
                {{$quest->txt_quest}}
                <br>
                <br>
                {{$quest->txt_perg}}
            </div>

            
            @php
                $i =0;
            @endphp
        
            <div id="d-simu-quest-answer">
                
                @foreach($alter_sim as $alt)

                    {{-- Caso tenha uma sessão com resposta anterior, e ela tenha o mesmo id da resposta, deixa ela selecionada --}}
                    {{-- @if(session()->has('value-resposta') && session('value-resposta')== $alt->id_alternativa) checked @endif --}}
                    
                    @if($alt->id_quest == $quest->id_quest)
                        <input type="radio" id="d-simu-quest-checkbox-answear{{$i}}" name="alternativa" value="{{$alt->id_alternativa}}" @if(session()->has('value-resposta') && session('value-resposta')== $alt->id_alternativa) checked @endif>
                        <label for="d-simu-quest-checkbox-answear{{$i}}" class="form-control" id="d-simu-quest-label">{{$alt->txt_alter}}</label><br>
        
                        <!-- <button class="btn" id="d-simu-quest-btn-answear"> {{$alt->txt_alter}} </button> -->
                        <!-- <input type="radio" id="d-simu-quest-checkbox-answear" name="alternativa" value="{{$alt->alter_true}}">  <br>
                        <label for="d-simu-quest-checkbox-answear" class="form-control" id="d-simu-quest-label"> {{$alt->txt_alter}} </label> -->
                        <br>

                        @php
                            $i ++;
                        @endphp
                    @endif
        
                @endforeach
            </div>
        @endforeach
        
            <div class="row" id="d-simu-quest-btns">

                @if ($quest_sim->currentPage() == $quest_sim->onfirstPage())

                    <button class="btn" id="d-simu-quest-btn-pn-previous" onclick="window.location='{{ $quest_sim->previousPageUrl() }}'" disabled> Anterior </button> &nbsp;&nbsp;&nbsp;&nbsp;

                @else
                
                    <button class="btn" id="d-simu-quest-btn-pn-previous" name="action" value="previous" onclick="window.location='{{ $quest_sim->previousPageUrl() }}'"> Anterior </button> &nbsp;&nbsp;&nbsp;&nbsp;
                
                @endif
                @if ($quest_sim->currentPage() == $quest_sim->lastPage())

                    <button class="btn" id="d-simu-quest-btn-pn-next" name="action" value="submit" onclick="window.location='{{ $quest_sim->nextPageUrl() }}'"> Finalizar </button>

                @else

                    <button class="btn" id="d-simu-quest-btn-pn-next" name="action" value="next" onclick="window.location='{{ $quest_sim->nextPageUrl() }}'"> Próximo </button>
                    
                @endif
                
            </div>
        
        </div>
    </form>
</div>
<!-- Fim Container Simulado -->


@endsection