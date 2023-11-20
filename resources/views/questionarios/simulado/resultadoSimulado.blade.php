@extends('layouts.main-NavbarOnly')

@section('title', 'Resultado do Simulado - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/questionarios/simulado/resultadoSimulado.css">

<script src="{{ asset('js/bloquear.js') }}"></script>

@php
    use Illuminate\Support\Facades\Session;
    use App\Models\Usuario;

    $conta = array();
    if(Session::has('loginId')){

        $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

    }

@endphp

<!-- Container Resultado -->

<div class="container" id="d-result-simu">

    <!-- Cabeçalho do Resultado -->
    <div class="row" id="d-result-simu-header">
        <center>
            <img src="/img/questionarios/preptec-logo-quadrada.png" id="d-result-simu-header-img" alt="Logo-Icon">
            <p id="d-result-simu-header-title"> Você concluiu o simulado! </p>
        </center>
    </div>
    <!-- Fim do Cabeçalho -->

    <!-- Cabeçalho Mobile -->
    <div class="row" id="d-result-simu-header-mobile">
        <center>
            <img src="/img/questionarios/preptec-logo-quadrada.png" id="d-result-simu-header-img" alt="Logo-Icon">
            <p id="d-result-simu-header-title"> Você concluiu o simulado! </p>
        </center>
    </div>
    <!-- Fim do Cabeçalho Mobile -->
    
    <!-- Dados do Resultado -->
    <div class="row" id="d-result-simu-data">
        

        <!-- Imagem Ilustrativa -->
        <div class="col" id="d-result-simu-data-img-col">
            <img src="/img/questionarios/simulado/resultadoSimulado/img_fim-simulado.jpg" alt="Resultado do Simulado" id="d-result-simu-data-img">
        </div>
        <!-- Fim da Imagem Ilustrativa -->

        <!-- Acertos e Erros -->
        <div class="col" id="d-result-simu-data-RW">
            <p id="d-result-simu-data-RW-p">

                

                <!-- Se o usuário acertar mais de uma questão... -->
                @if($acerto_usuario > 1)
                    Você obteve {{$acerto_usuario}} acertos no total! 
                    
                    @if($erros_total > 0)
                        Apenas {{$erros_total}} questões foram respondidas de forma incorreta...
                    @endif
                
                <!-- Se o usuário não acertar nada... -->
                @elseif($acerto_usuario < 1)
                    Você não acertou nenhuma questão...
                <!-- Se o usuário acertar apenas 1 questão... -->                
                @else
                    Você obteve {{$acerto_usuario}} acerto no total!
                    @if($erros_total > 1)
                        {{$erros_total}} questões foram respondidas de forma incorreta...
                    @else
                        {{$erros_total}} questão foi respondida de forma incorreta...
                    @endif
                @endif

            </p>            

        </div>
        <!-- Fim dos Acertos e Erros -->

    </div>
    <!-- Fim dos Dados do Resultado -->    

    <div class="row" id="d-result-simu-confirm">
        <center>
            <form action="{{'/simulado/salvar-resposta'}}" method="POST">
                @csrf
                
                <input hidden type="text" name="id_usuario" value="{{$conta->id_usuario}}">
                <input hidden type="text" name="id_simu" value="1">
                <input hidden type="text" name="qntd_acertos" value="{{$acerto_usuario}}">
                <input hidden type="text" name="data_conclusao" value="<?= date('Y-m-d'); ?>">
                
                <button class="btn" id="d-result-simu-confirm-btn" type="submit"> Confirmar </button>
            </form>
        </center>
    </div>

    <!-- Resultados em Responsividade Mobile -->
        <div class="col" id="d-result-simu-data-RW">
            <p id="d-result-simu-data-RW-p-mobile">

            <!-- Se o usuário acertar mais de uma questão... -->
                @if($acerto_usuario > 1)
                    Você obteve {{$acerto_usuario}} acertos no total! 
                    
                    @if($erros_total > 0)
                        Apenas {{$erros_total}} questões foram respondidas de forma incorreta...
                    @endif
                
                <!-- Se o usuário não acertar nada... -->
                @elseif($acerto_usuario < 1)
                    Você não acertou nenhuma questão...
                <!-- Se o usuário acertar apenas 1 questão... -->                
                @else
                    Você obteve {{$acerto_usuario}} acerto no total!
                    @if($erros_total > 1)
                        {{$erros_total}} questões foram respondidas de forma incorreta...
                    @else
                        {{$erros_total}} questão foi respondida de forma incorreta...
                    @endif
                @endif

            
            </p>

            <center>
                <form action="{{'/simulado/salvar-resposta'}}" method="POST">
                    @csrf
                    
                    <input hidden type="text" name="id_usuario" value="{{$conta->id_usuario}}">
                    <input hidden type="text" name="id_simu" value="1">
                    <input hidden type="text" name="qntd_acertos" value="{{$acerto_usuario}}">
                    <input hidden type="text" name="data_conclusao" value="<?= date('Y-m-d'); ?>">
                    
                    <button class="btn" id="d-result-simu-confirm-btn-mobile" type="submit"> Confirmar </button>
                </form>
            </center>

        </div>
    <!-- Fim dos Resultados em Responsividade Mobile -->

</div>

<!-- Fim do Container de Resultado -->

@endsection