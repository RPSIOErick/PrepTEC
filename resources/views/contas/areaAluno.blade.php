@extends('layouts.main-Completo')

@section('title', 'Área do Aluno - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/contas/areaAluno.css">
<center>
    <body id="body-area-do-aluno">
    <!--Containers-->
        <div class="container-fluid text-center" id="div-container-main">

            <!--Row-->
                <div class="row row-cols-3">

                    <!--Coluna Foto de Perfil-->
                        <div class="col" id="div-profile-info">
                            @if(!empty($conta->fotoUsuario))
                                
                                <img src="{{ asset('users/'. $conta->fotoUsuario) }}" alt="Foto do perfil" id="img-profile-areaAlu">
                        
                            @elseif(empty($conta->fotoUsuario))

                                <img src="/img/contas/minhaConta/img-profile-default.png" alt="Foto do perfil" id="img-profile-areaAlu">
                            
                            @endif
                            <p class="txt-template-main-text">Bem vindo(a)<br> {{$conta->nome_usuario}}</p>
                        </div>
                    <!--Fim do Coluna Foto de Perfil-->

                    <!--Coluna Rendimento Semanal-->
                        <div class="col" id="div-rend-semanal">
                            <h5 id="txt-rend-title">Rendimento Semanal</h5><br>

                                <!--Grafico Desktop-->
                                    <div id="grafico-rendS"></div>
                                <!--Fim do Grafico Desktop-->

                                <!--Grafico Mobile-->
                                    <div id="grafico-rendS-mobile"></div>
                                <!--Fim do Grafico Mobile-->

                        </div>
                    <!--Fim do Coluna Rendimento Semanal-->
                    
                    <!--Coluna Rendimento Total-->
                        <div class="col" id="div-rend-total">
                            <h5 id="txt-rend-title">Rendimento Total</h5><br>
                            <!-- Se houver algum registro -->
                            @if (!empty($simu_totais))
                            <p id="txt-rendt">Total de simulados feitos:</p>
                                <b id="txt-rendt">
                                    {{$simu_totais}}
                                </b>
                            <!-- Se não houver nenhum registro -->
                            @else
                            <p id="txt-rendt">Total de simulados feitos:</p>
                                <b id="txt-rendt">
                                    Nenhum simulado foi realizado até o momento...
                                </b>
                            
                            @endif
                        </div>
                    <!--Fim do Coluna, Rendimento Total-->
                    
                    
                    <!--Coluna, Rendimento Mensal-->
                        <div class="col" id="div-rend-mensal">
                                <h5 id="txt-rend-title">Rendimento Mensal</h5><br>

                                <!--Grafico Desktop-->
                                    <div id="grafico-rendM"></div>
                                <!--Fim do Grafico Desktop-->

                                <!--Grafico Mobile-->
                                    <div id="grafico-rendM-mobile"></div>
                                <!--Fim do Grafico Mobile-->
                        </div>
                    <!--Fim do Coluna, Rendimento Mensal-->
                    

                </div>
            <!--Fim do Row-->
            <br><br>

            <!--Botão Ver Materias-->
            <p class="txt-template-main-text">Comece a estudar!</p>
                <button id="btn-azuis" onclick="window.location='/simulado/realizar'"> Fazer Simulado </button>
            <!--Fim do Botão Ver Materias-->
        </div>
    <!--Fim dos Containers-->


</center>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartSemanal);
    google.charts.setOnLoadCallback(drawChartMensal);
    google.charts.setOnLoadCallback(drawChartSemanalMobile);
    google.charts.setOnLoadCallback(drawChartMensalMobile);
    function drawChartSemanal() 
    {
        var data1 = google.visualization.arrayToDataTable(@json($dados_Semanal));
        var options1 = 
        {
            curveType: 'function',
            legend: 'none',
            backgroundColor: 'transparent',
            colors: ['#326CB4'],
            vAxis: 
            {
                maxValue: 20,
                gridlines: 
                {
                    color: 'black',
                    count: 4,
                },
                minorGridlines: 
                {
                    color: '#C19B39'
                },
            }, 
            hAxis: 
            {
                slantedText: true,
                slantedTextAngle: 25
            },
            responsive: true,
        };
        var chart1 = new google.visualization.LineChart(document.getElementById('grafico-rendS'));
        chart1.draw(data1, options1);
    }

    function drawChartMensal() 
    {
        var data2 = google.visualization.arrayToDataTable(@json($dados_Mensal));
        var options2 = 
        {
            curveType: 'function',
            legend: 'none',
            backgroundColor: 'transparent',
            colors: ['#326CB4'],
            vAxis: 
            {
                maxValue: 20,
                gridlines: 
                {
                    color: 'black',
                    count: 4,
                },
                minorGridlines: 
                {
                    color: '#C19B39'
                },
            }, 
            hAxis: 
            {
                slantedText: true,
                slantedTextAngle: 25
            },
            responsive: true,
        };

        var chart2 = new google.visualization.LineChart(document.getElementById('grafico-rendM'));
        chart2.draw(data2, options2);
    }
    function drawChartSemanalMobile() 
    {
        var data3 = google.visualization.arrayToDataTable(@json($dados_Semanal));
        var options3 = 
        {
            curveType: 'function',
            legend: 'none',
            backgroundColor: 'transparent',
            colors: ['#326CB4'],
            hAxis: 
            {
                gridlines: 
                {
                    color: 'black',
                    count: 4,
                },
                minorGridlines: 
                {
                    color: 'black'
                },
            }, 
            responsive: true,
        };

        var chart3 = new google.visualization.BarChart(document.getElementById('grafico-rendS-mobile'));
        chart3.draw(data3, options3);
    }
    function drawChartMensalMobile() 
    {
        var data4 = google.visualization.arrayToDataTable(@json($dados_Mensal));
        var options4 = 
        {
            curveType: 'function',
            legend: 'none', 
            backgroundColor: 'transparent',
            colors: ['#326CB4'],
            hAxis: 
            {
                gridlines: 
                {
                    color: 'black',
                    count: 4,
                },
                minorGridlines: 
                {
                    color: 'black'
                },
            }, 
            responsive: true,
        };

        var chart4 = new google.visualization.BarChart(document.getElementById('grafico-rendM-mobile'));
        chart4.draw(data4, options4);
    }
</script>

</body>


@endsection

