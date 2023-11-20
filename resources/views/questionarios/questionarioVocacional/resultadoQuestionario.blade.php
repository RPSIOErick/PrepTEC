@extends('layouts.main-NavbarOnly')

@section('title', 'Resultado do Questionario Vocacional - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/questionarios/questionarioVocacional/resultadoQuestionario.css">

<!-- Código para verificar se existe uma conta logada -->
@php
    use Illuminate\Support\Facades\Session;
    use App\Models\Usuario;

    $conta = array();
    if(Session::has('loginId')){

        $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

    }

@endphp
<!-- Fim do código para verificar login existente -->

    <!-- Parte 1: Resultado -->
        <div class="container-fluid" id="d-resultado-inteligencia">

            <center>
                @if($resultado == 'Espacial')
                <!-- Div row para a inteligência obtida -->
                    <div class="row" id="d-inteligencia-espacial-titulo">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                                Centrais à inteligência espacial, estão as capacidades de perceber o mundo visual com precisão, efetuar transformações e modificações sobre as percepções iniciais e ser capaz de recriar aspectos da experiência visual. (GARDNER, 1994, p. 76).
                            </p>
                        </div>
                    
                </div>
                @elseif($resultado == 'Intrapessoal')
                <!-- Div row para a inteligência obtida -->
                <div class="row" id="d-inteligencia-espacial-titulo" style="background-color: #8bc63e;">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                            Como indicado por Gardner (et al., 2010), a inteligência intrapessoal é quando o indivíduo é capaz de entender a si mesmo.

                            </p>
                        </div>
                    
                </div>
                @elseif($resultado == 'Linguística')
                <!-- Div row para a inteligência obtida -->
                <div class="row" id="d-inteligencia-espacial-titulo" style="background-color: #f7931d;">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                            Conforme explica Gardner (1994), a inteligência linguística pode ser dividida em quatro aspectos: a capacidade de convencer indivíduos, de lembrar informações, de explicar e de analisar usando a linguagem.
                            </p>
                        </div>
                    
                </div>
                @elseif($resultado == 'Corporal-cinestésica')
                <!-- Div row para a inteligência obtida -->
                <div class="row" id="d-inteligencia-espacial-titulo" style="background-color: #f07ea5;">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                                A inteligência corporal-cinestésica é explicado por Gardner (et al. 2010) que usa o próprio corpo ou partes dele para resolver problemas ou fazer algo
                            </p>
                        </div>
                    
                </div>
                @elseif($resultado == 'Interpessoal')
                <!-- Div row para a inteligência obtida -->
                <div class="row" id="d-inteligencia-espacial-titulo" style="background-color: #90268f; color: white;">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                                A inteligência interpessoal com base nas palavras de Gardner (et al., 2010), essa inteligência permite entender os outros.
                            </p>
                        </div>
                    
                </div>
                @elseif($resultado == 'Existencial')
                <!-- Div row para a inteligência obtida -->
                <div class="row" id="d-inteligencia-espacial-titulo" style="background-color: #652d91; color: white;">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                                A inteligência existencial, a que gera e tenta responder às maiores perguntas sobre a natureza e preocupações humanas. (GARDNER ET AL, 2010, p. 19).
                            </p>
                        </div>
                    
                </div>
                @elseif($resultado == 'Lógico-matemática')
                <!-- Div row para a inteligência obtida -->
                <div class="row" id="d-inteligencia-espacial-titulo" style="background-color: #1074bc; color: white;">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                            Na inteligência lógico-matemática, o indivíduo torna-se mais capaz de apreciar as ações que se pode desempenhar sobre objetos, as relações que prevalecem entre estas ações. (GARDNER, 1994, p. 100).

                            </p>
                        </div>
                    
                </div>
                @elseif($resultado == 'Musical')
                <!-- Div row para a inteligência obtida -->
                <div class="row" id="d-inteligencia-espacial-titulo" style="background-color: #0c6638; color: white;">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                                A inteligência musical — as capacidades de indivíduos de discernir significado e importância em conjuntos de sons ritmicamente organizados e também de produzir tais sequências de sons metricamente organizadas. (GARDER, 1994, p. 76).
                            </p>
                        </div>
                    
                </div>
                @elseif($resultado == 'Naturalista')
                <!-- Div row para a inteligência obtida -->
                <div class="row" id="d-inteligencia-espacial-titulo" style="background-color: #12a79d;">
                        <!-- Parágrafo da Inteligência Obtida -->
                            <p id="d-inteligencia"> Você possui a inteligêcia <b> {{$resultado}}</b>! </p>
                        <!-- Fim do Parágrafo da Inteligência Obtida -->


                        <div class="col" id="d-inteligencia-espacial-text">
                            <p id="d-intelicencia-titulo">
                                Mas afinal, o que é a inteligência {{$resultado}}?
                            </p>

                            <p>
                            É lembrado por Antunes (1998) que a inteligência naturalista é o que torna o homem sensível ao mundo natural, com facilidade em entender paisagens ativas.

                            </p>
                        </div>
                    
                </div>
                @endif
            </center>
        </div>
    <!-- Fim da Parte 1 -->

    <!-- Parte 2: Outros Resultados -->

        <div class="container" id="d-outros-resultados">
            
            <!--Titulo Profissoes-->
                <h2 id="d-resultQV-prof-title">Profissões relacionadas a <text>Inteligência {{$resultado}}</text></h2>
            <!--Fim do Titulo Profissoes-->
            
            <!--Row - 2 Colunas-->
                <div class="row row-cols-2" id="d-resultQV-prof-row">
                
                    @if($resultado == 'Espacial')

                        <!--Inteligencia Espacial-->
                
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_espacial/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Artista</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_espacial/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Arquiteto</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_espacial/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Fotógrafo</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 4 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_espacial/4.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Designer</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 5 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_espacial/5.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Escultor</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - Referencias -->
                                <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Referencias-->
                                                <div id="d-resultQV-prof-cardRef">
                                                    <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                                    <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                                </div>
                                            <!--Fim das Referencias-->
                                            
                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->  

                                </div>
                            <!--Fim da Coluna Card-->  

                        <!--Fim da Inteligencia Espacial-->   

                </div>
            <!--Fim do Row-->

                    @elseif($resultado == 'Intrapessoal')
                    
                        <!--Inteligenciav Intrapessoal-->
                        
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_intrapessoal/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Administrador</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_intrapessoal/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Marketing</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   
                            
                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_intrapessoal/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Serviço Social</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 4 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_intrapessoal/4.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Publicitario</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                        <!--Inteligencia Intrapessoal-->

                </div>
            <!--Fim do Row-->

            <!--Row Card Impar-->
                <div class="row row-cols-1" id="Card-Impar">

                    <!--Coluna Card - Referencias -->
                        <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                            <!--Card-->
                                <div id="d-resultQV-prof-card">

                                    <!--Referencias-->
                                        <div id="d-resultQV-prof-cardRef">
                                            <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                            <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                        </div>
                                    <!--Fim das Referencias-->

                                    <!--Texto-->
                                        <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                    <!--Fim do Texto-->

                                </div>
                            <!--Fim do Card-->  

                        </div>
                    <!--Fim da Coluna Card-->  

                </div>
            <!--Fim do Row-->

                    @elseif($resultado == 'Linguística')

                        <!--Inteligencia Linguistica-->
                
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_linguistica/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Advogado</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_linguistica/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Poeta</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_linguistica/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Jornalista</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->  

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 4 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_linguistica/4.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Escritor</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 5 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_linguistica/5.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Relações Públicas</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - 6 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                <!--Card-->
                                    <div id="d-resultQV-prof-card">

                                        <!--Imagem-->
                                            <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_linguistica/6.jpg" id="img-resultQV-prof-cardImg">
                                        <!--Fim da Imagem-->

                                        <!--Texto-->
                                            <h2 id="txt-resultQV-prof-cardTitle">Redator</h2>
                                        <!--Fim do Texto-->

                                    </div>
                                <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                        <!--Inteligencia Linguistica-->

                </div>
            <!--Fim do Row-->

            <!--Row Card Impar-->
                <div class="row row-cols-1" id="Card-Impar">

                    <!--Coluna Card - Referencias -->
                        <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                            <!--Card-->
                                <div id="d-resultQV-prof-card">

                                    <!--Referencias-->
                                            <div id="d-resultQV-prof-cardRef">
                                                <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                                <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                            </div>
                                    <!--Fim das Referencias-->

                                    <!--Texto-->
                                        <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                    <!--Fim do Texto-->

                                </div>
                            <!--Fim do Card-->  

                        </div>
                    <!--Fim da Coluna Card-->  

                </div>
            <!--Fim do Row-->

                    @elseif($resultado == 'Corporal-cinestésica')

                        <!--Inteligencia Corporal-cinestésica-->
                        
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_corporal-cinestica/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Dançarino</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_corporal-cinestica/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Ator</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   
                            
                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_corporal-cinestica/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Esportista</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 4 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_corporal-cinestica/4.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Mergulhador</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 5 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_corporal-cinestica/5.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Bombeiro</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - 6 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_corporal-cinestica/6.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Motorista</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                        <!--Inteligencia Corporal-cinestésica-->

                </div>
            <!--Fim do Row-->

            <!--Row Card Impar-->
                <div class="row row-cols-1" id="Card-Impar">

                    <!--Coluna Card - Referencias -->
                        <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                            <!--Card-->
                                <div id="d-resultQV-prof-card">

                                    <!--Referencias-->
                                                <div id="d-resultQV-prof-cardRef">
                                                    <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                                    <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                                </div>
                                        <!--Fim das Referencias-->

                                    <!--Texto-->
                                        <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                    <!--Fim do Texto-->

                                </div>
                            <!--Fim do Card-->  

                        </div>
                    <!--Fim da Coluna Card-->  

                </div>
            <!--Fim do Row-->

                    @elseif($resultado == 'Interpessoal')
                
                        <!--Inteligencia Interpessoal-->
                        
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_interpessoal/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Terapeuta</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_interpessoal/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Professor</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   
                            
                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_interpessoal/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Psicólogo</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 4 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_interpessoal/4.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Médico</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 5 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_interpessoal/5.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Profissional de RH</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - 6 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_interpessoal/6.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Político</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                        <!--Inteligencia Interpessoal-->

                </div>
            <!--Fim do Row-->

            <!--Row Card Impar-->
                <div class="row row-cols-1" id="Card-Impar">

                    <!--Coluna Card - Referencias -->
                        <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                            <!--Card-->
                                <div id="d-resultQV-prof-card">

                                    <!--Referencias-->
                                            <div id="d-resultQV-prof-cardRef">
                                                <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                                <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                            </div>
                                        <!--Fim das Referencias-->

                                    <!--Texto-->
                                        <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                    <!--Fim do Texto-->

                                </div>
                            <!--Fim do Card-->  

                        </div>
                    <!--Fim da Coluna Card-->  

                </div>
            <!--Fim do Row-->

                    @elseif($resultado == 'Existencial')

                        <!--Inteligencia Existencial-->
                
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_existencial/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Filósofo</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_existencial/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Teólogo</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_existencial/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Sociólogo</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - Referencias -->
                                <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                           <!--Referencias-->
                                                <div id="d-resultQV-prof-cardRef">
                                                    <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                                    <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                                </div>
                                            <!--Fim das Referencias-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->  

                                </div>
                            <!--Fim da Coluna Card-->  

                        <!--Fim da Inteligencia Existencial-->

                </div>
            <!--Fim do Row-->
            
                    @elseif($resultado == 'Lógico-matemática')

                        <!--Inteligencia Lógico-matemática-->
                        
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_logico-matematica/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Analista</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_logico-matematica/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Cientista</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   
                            
                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_logico-matematica/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Contador</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 4 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_logico-matematica/4.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Engenheiro</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                        <!--Inteligencia Lógico-matemática-->

                </div>
            <!--Fim do Row-->

            <!--Row Card Impar-->
                <div class="row row-cols-1" id="Card-Impar">

                    <!--Coluna Card - Referencias -->
                        <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                            <!--Card-->
                                <div id="d-resultQV-prof-card">

                                    <!--Referencias-->
                                                <div id="d-resultQV-prof-cardRef">
                                                    <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                                    <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                                </div>
                                    <!--Fim das Referencias-->

                                    <!--Texto-->
                                        <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                    <!--Fim do Texto-->

                                </div>
                            <!--Fim do Card-->  

                        </div>
                    <!--Fim da Coluna Card-->  

                </div>
            <!--Fim do Row-->

                    @elseif($resultado == 'Musical')

                        <!--Inteligencia Musical-->
                        
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_musical/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Músico</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_musical/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Compositor</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   
                            
                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_musical/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">DJ</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 4 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_musical/4.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Cantor</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 5 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_musical/5.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Produtor Musical</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - 6 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_musical/6.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Engenheiro Acústico</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                        <!--Inteligencia Musical-->

                </div>
            <!--Fim do Row-->

            <!--Row Card Impar-->
                <div class="row row-cols-1" id="Card-Impar">

                    <!--Coluna Card - Referencias -->
                        <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                            <!--Card-->
                                <div id="d-resultQV-prof-card">

                                    <<!--Referencias-->
                                                <div id="d-resultQV-prof-cardRef">
                                                    <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                                    <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                                </div>
                                    <!--Fim das Referencias-->

                                    <!--Texto-->
                                        <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                    <!--Fim do Texto-->

                                </div>
                            <!--Fim do Card-->  

                        </div>
                    <!--Fim da Coluna Card-->  

                </div>
            <!--Fim do Row-->

                    @elseif($resultado == 'Naturalista') 
                    
                        <!--Inteligencia Naturalista-->
                        
                            <!--Coluna Card - 1 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_naturalista/1.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Biólogo</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 2 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_naturalista/2.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Geólogo</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   

                            <!--Coluna Card - 3 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_naturalista/3.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Engenheiro Climático</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 4 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_naturalista/4.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Jardineiro</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->

                            <!--Coluna Card - 5 -->
                                <div class="col" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Imagem-->
                                                <img src="/img/questionarios/questionarioVocacional/resultadoQuestionario/profissoes/inteligencia_naturalista/5.jpg" id="img-resultQV-prof-cardImg">
                                            <!--Fim da Imagem-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitle">Meteorologista</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->

                                </div>
                            <!--Fim da Coluna Card-->   


                            <!--Coluna Card - Referencias -->
                                <div class="col card-referencias" id="d-resultQV-prof-cardCol">

                                    <!--Card-->
                                        <div id="d-resultQV-prof-card">

                                            <!--Referencias-->
                                                <div id="d-resultQV-prof-cardRef">
                                                    <a href="https://portalderevistas.esags.edu.br/index.php/revista/article/view/46" id="txt-resultQV-prof-cardRef-link"> Artigo 1</a><br>
                                                    <a href="https://repository.maseno.ac.ke/handle/123456789/3922" id="txt-resultQV-prof-cardRef-link"> Artigo 2 </a>
                                                </div>
                                            <!--Fim das Referencias-->

                                            <!--Texto-->
                                                <h2 id="txt-resultQV-prof-cardTitleRef">Fontes</h2>
                                            <!--Fim do Texto-->

                                        </div>
                                    <!--Fim do Card-->  

                                </div>
                            <!--Fim da Coluna Card-->  

                        <!--Fim da Inteligencia Naturalista-->    
                        
                </div>
            <!--Fim do Row-->

                    @endif

            <!-- Div row para o texto motivador (Se sente confuso...) -->
                <div class="row" id="d-texto-motivador">
                    <p id="d-intelicencia-titulo"> Se sente confuso com o resultado? </p>

                    <p id="d-intelicencia-corpo">
                    Não se preocupe! a <b>Inteligência {{$resultado}}</b> é a mais presente em você, mas ela pode não ser a única.
                    Para obter mais explicações das outras inteligências, observe abaixo as explicações das 9 inteligências presentes neste questionário.
                    </p>
                </div>
            <!-- Fim da div row para o texto motivador -->

        </div>
    <!-- Fim da Parte 2 -->

    <!-- Parte 3: Explicação Inteligências -->
        <div class="container-fluid" id="d-inteligencias-expl-container">

            <center>
                <!-- Div row para o pequeno card perto do rodapé -->
                <div class="row" id="d-inteligencias-expl">
                    <!-- Coluna para imagem + título -->
                    <div class="col" id="d-inteligencias-expl-image-col">
                        <!-- Imagem -->
                        <img src="/img/questionarios/preptec-logo-quadrada.png" alt="Logo" id="d-inteligencias-expl-image">
                        <!-- Fim da Imagem -->

                        <!-- Título -->
                        <p> Inteligências Múltiplas</p>
                        <!-- Fim do Título -->
                    </div>
                    <!-- Fim da Coluna para imagem + título -->

                    <!-- Coluna para explicações das inteligências (Linguística) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Linguística </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p">A inteligência linguística pode se dividir na capacidade de convencer indivíduos, lembrar informações, explicar e analisar utilizando linguagens.</p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Linguística) -->

                    <!-- Coluna para explicações das inteligências (Corporal-Cinestésica) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Corporal-Cinestésica </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p">A inteligência corporal-cinestésica é identificada nos indivíduos que utilizam o próprio corpo ou partes dele para resolver problemas. </p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Corporal-Cinestésica) -->

                    <!-- Coluna para explicações das inteligências (Lógico-Matemática) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Lógico-Matemática </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p"> A inteligência lógico-matemática geralmente se relaciona aos números e algorítimos, mas o indivíduo também se torna apto a apreciar ações feitas em objetos. </p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Lógico-Matemática) -->

                    <!-- Coluna para explicações das inteligências (Interpessoal) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Interpessoal </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p"> A inteligência interpessoal permite entender os próximos de maneira mais clara. </p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Interpessoal) -->

                    <!-- Coluna para explicações das inteligências (Espacial) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Espacial </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p"> A inteligência espacial permitem que o indivíduo perceba o mundo visual de maneira precisa, podendo até recriar lugares com a experiência visual. </p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Espacial) -->

                    <!-- Coluna para explicações das inteligências (Intrapessoal) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Intrapessoal </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p"> A inteligência intrapessoal permite que o indivíduo tenha o conhecimento e compreensão de si mesmo.</p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Intrapessoal) -->

                    <!-- Coluna para explicações das inteligências (Musical) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Musical </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p"> A inteligência musical permite o discernimento de sons organizados ritmicamente, assim como a reprodução desses sons em instrumentos. </p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Musical) -->

                    <!-- Coluna para explicações das inteligências (Naturalista) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Naturalista </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p"> A inteligência natualista torna o indivíduo sensível ao mundo natural, facilitando a compreensão de paisagens ativas. </p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Naturalista) -->

                    <!-- Coluna para explicações das inteligências (Existencial) -->
                    <div class="col" id="d-inteligencias-expl-txt">
                        <!-- Título da Inteligência -->
                        <p id="d-intelicencia-titulo"> Inteligência Existencial </p>

                        <!-- Explicação da Inteligência -->
                        <p id="d-inteligencias-expl-txt-p"> A inteligência existencial faz com que o indivíduo se pergunte e responda perguntas sobre a natureza e a preocupação humana. </p>
                    </div>
                    <!-- Fim da Coluna de explicação da inteligência (Existencial) -->

                    <!-- Coluna de botões de navegação por inteligências -->
                    <div class="col" id="d-inteligecias-expl-btn">

                        <!-- Botão Anterior -->
                        <button class="btn" id="d-inteligecias-expl-btn-previous"> Anterior </button> &nbsp;

                        <!-- Botão Próximo -->
                        <button class="btn" id="d-inteligecias-expl-btn-next"> Próximo </button>
                    </div>
                    <!-- Fim da Coluna de Botões da Navegação por Inteligências -->
                    
                </div>
                <!-- Fim da div row para o pequeno card perto do rodapé -->
            </center>

        </div>
    <!-- Fim da Parte 3 -->

<!-- Import do JS para os botões da explicação das inteligências -->
<script src="/js/expl-intelig.js"></script>

@endsection
