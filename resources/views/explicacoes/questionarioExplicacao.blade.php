@extends('layouts.main-Completo')

@section('title', 'Questionário Vocacional - PrepTEC')

@section('content')


<!-- CSS da página -->
<link rel="stylesheet" href="/css/explicacoes/questionarioExplicacao.css">


<!-- Banner inicial -->
<div class="container" id="container-banner">

    <div id="banner-fundo">

        <div class="row" id="row-banner">

            <!-- Parte Mobile -->
            <div id="mobile-banner">
                <div class="col" id="col-img-mobile"> 
                    <img alt="img" src="/img/explicacoes/questionarioExplicacao/lampada-qv.png"/>
                </div> 

                <h1> Questionário Vocacional</h1>
                <p> Realize um questionário vocacional e descubra a sua vocação com a ajuda das inteligências múltiplas! </p>
                <div class="col" id="col-btn-mobile">
                    <button class="btn btn-primary border-0" id="btn-tv" onclick="window.location.href = '/questionario/realizar'">Começar Questionário</button>
                </div>
            </div>
                
            <!-- fim da img para mobile -->

            <!-- coluna texto do banner-->
                <div class="col col-9" id="col-one">
                    <h1> Questionário Vocacional</h1>
                    
                    <p> Realize um questionário vocacional e descubra a sua vocação com a ajuda das inteligências múltiplas! </p>

                </div>
            <!-- fim da coluna texto do banner-->

            <!-- img para desktop -->
            <div class="col col-4" id="col-two"> 
                    <img id="img-banner" alt="img" src="/img/explicacoes/questionarioExplicacao/cerebro-qv.png"/>
                </div>
            <!-- fim da img para desktop -->

            <div class="col col-12" id="col-three-btn">
                <button class="btn btn-primary border-0" id="btn-tv" onclick="window.location.href = '/questionario/realizar'">Começar Questionário</button>
            </div>
            
            
        </div>
    </div>

    <!-- svg da onda -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path id="wave" fill="#132050" fill-opacity="1" 
                d="M0,32L40,80C80,128,160,224,240,240C320,256,400,192,480,160C560,128,640,128,720,160C800,192,880,256,960,256C1040,256,1120,192,1200,154.7C1280,117,1360,107,1400,101.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
            </path>
        </svg> 
    <!-- fim da svg da onda -->

</div>

<!--Parte: Explicação das Inteligencias Multiplas -->
<div class="container" id="container-intelMult">

    <div class="row" id="row-IM">
        <!-- texto da inteligencia multipla -->
            <div class="col" id="col-one-IM">

                <h1>Inteligências Múltiplas</h1>

                <p>As inteligências múltiplas, conceito proposto pelo psicólogo Howard Gardner, redefinem a maneira como entendemos a capacidade cognitiva humana. Em vez de se limitarem a uma única medida de inteligência, as inteligências múltiplas reconhecem a diversidade de habilidades que os indivíduos podem possuir. Cada pessoa pode se destacar em diferentes áreas, como linguística, lógico-matemática, musicalidade, habilidades interpessoais e intrapessoais, entre outras. Essa abordagem ampla valoriza a singularidade de cada indivíduo e encoraja uma educação mais personalizada, permitindo o desenvolvimento integral de suas potencialidades.</p>

            </div>
        <!-- fim do texto da inteligencia multipla -->

        <!-- img das inteligencias -->
            <div class="col" id="col-two-IM">
                <img src="/img/explicacoes/questionarioExplicacao/inteligencias-multiplas-qv.png"/>
            </div>
        <!-- fim das img das inteligencias -->

        <!-- Parte Mobile -->
            <div class="col" id="IM-mobile">
                <h1>Inteligências Múltiplas</h1>

                <img src="/img/explicacoes/questionarioExplicacao/inteligencias-multiplas-qv.png"/>

                <p>As inteligências múltiplas, conceito proposto pelo psicólogo Howard Gardner, redefinem a maneira como entendemos a capacidade cognitiva humana. Em vez de se limitarem a uma única medida de inteligência, as inteligências múltiplas reconhecem a diversidade de habilidades que os indivíduos podem possuir. Cada pessoa pode se destacar em diferentes áreas, como linguística, lógico-matemática, musicalidade, habilidades interpessoais e intrapessoais, entre outras. Essa abordagem ampla valoriza a singularidade de cada indivíduo e encoraja uma educação mais personalizada, permitindo o desenvolvimento integral de suas potencialidades.</p>

            </div>
        <!-- fim da parte mobile -->
    </div>

</div>
<!-- fim da parte da explicação das inteligências -->

<!-- Parte: tipo das inteligências (accordion) -->
    <div class="row" id="row-accordion">

        <div id="texto-accordion">
            <h5>Tipos de Inteligências Múltiplas</h5>
            <p>O psicólogo Howard Gardner relata em seu livro "Inteligências Múltiplas ao Redor do Mundo" que existem 9 tipos de inteligências múltiplas. Para uma melhor compreensão, a seguir será explicado o conceito de cada uma delas.</p>
        </div>
   
        <!-- accordion -->
        <div class="accordion" id="accordion">

            <!-- Inteligência Linguística -->
            <div class="accordion-item" id="accordion-item">

                <!-- Header Inteligência linguística -->
                    <h2 class="accordion-header" id="accordion-header">
                        <button id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Linguística
                        </button>
                    </h2>
                <!-- Fim do header Inteligência linguística -->

                <!-- Body Inteligência linguística (explicação) -->
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        Conforme explica Gardner (1994), a Inteligência Linguística envolve a capacidade de se expressar através da linguagem, seja por meio da fala, da escrita ou até mesmo da leitura. As pessoas que possui essa inteligência conseguem se comunicar com clareza e expressar os seus pensamentos e emoções. 
                    </div>
                </div>
                <!-- Fim do body Inteligência linguística -->
            </div>

            <!-- Inteligência lógico-Matemática -->
            <div class="accordion-item" id="accordion-item">

                <!-- Header Inteligência lógico-Matemática -->
                    <h2 class="accordion-header" id="accordion-header">
                        <button id="titulo_tipoIM" id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lógico-Matemática
                        </button>
                    </h2>
                <!-- Fim do header Inteligência lógico-Matemática -->

                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        Um artigo publicado pelo site Hayala Consultoria (2017) cita que essa inteligência envolve a capacidade de pensar pelo lado da razão, utilizando números e padrões lógicos. As pessoas que possui essa inteligência conseguem compreender e resolver cálculos complexos de matemática e possui raciocínio lógico. 
                    </div>
                </div>
            </div>

            <!-- Inteligência Espacial -->
            <div class="accordion-item" id="accordion-item">
                <h2 class="accordion-header" id="accordion-header">
                    <button id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Espacial
                    </button>
                </h2>

                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        Centrais à inteligência espacial, estão as capacidades de perceber o mundo visual com precisão, efetuar transformações e modificações sobre as percepções iniciais e ser capaz de recriar aspectos da experiência visual. (GARDNER, 1994, p. 76). Pessoas associadas a essa inteligência possui percepções visuais, conseguem se localizar facilmente em lugares desconhecidos e até mesmo possuir habilidades artísticas.
                    </div>
                </div>
            </div>

            <!-- Inteligência Musical -->
            <div class="accordion-item" id="accordion-item">
                <h2 class="accordion-header" id="accordion-header">
                    <button id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Musical
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        Segundo GARDER (ano, p. 76) a inteligência musical é as capacidades de indivíduos de discernir significado e importância em conjuntos de sons ritmicamente organizados e também de produzir tais sequências de sons metricamente organizadas. As pessoas com essa inteligência podem ter facilidade em tocar instrumentos, compor músicas, além de compreender e aplicar a teoria musical.
                    </div>
                </div>
            </div>

            <!-- Inteligência Intrapessoal -->
            <div class="accordion-item" id="accordion-item">
                <h2 class="accordion-header" id="accordion-header">
                    <button id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Intrapessoal
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        Como indicado por Gardner (et al., 2010), a inteligência intrapessoal é quando o indivíduo é capaz de entender a si mesmo, como as suas emoções, sentimentos, qualidades, defeitos, valores dentre outros. As principais características que compõe essa inteligência são: o autoconhecimento, autorregulação emocional, auto-controle dentre outros.
                    </div>
                </div>
            </div>

            <!-- Inteligência Interpessoal -->
            <div class="accordion-item" id="accordion-item">
                <h2 class="accordion-header" id="accordion-header">
                    <button id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Interpessoal
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        A inteligência interpessoal com base nas palavras de Gardner (et al., 2010), essa inteligência permite entender os outros. As pessoas que possui essa inteligência demostram características como: habilidade em solucionar conflitos externos; saber lidar com público, e consequentemente possuir habilidades de comunicação; possui empatia buscando entender os sentimentos e emoções das pessoas, dentre outros.
                    </div>
                </div>
            </div>

            <!-- Inteligência Corporal-Cinestésica -->
            <div class="accordion-item" id="accordion-item">
                <h2 class="accordion-header" id="accordion-header">
                    <button id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Corporal-Cinestésica
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        A inteligência corporal-cinestésica é explicado por Gardner (et al. 2010) que usa o próprio corpo ou partes dele para resolver problemas ou fazer algo. As pessoas que possui essas características, tem facilidade em se expressar através do movimento corporal, como: dança, yoga, meditação, praticar esportes dentre outros.
                    </div>
                </div>
            </div>

            <!-- Inteligência Naturalista -->
            <div class="accordion-item" id="accordion-item">
                <h2 class="accordion-header" id="accordion-header">
                    <button id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Naturalista
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        É lembrado por Antunes (1998) que a inteligência naturalista é o que torna o homem sensível ao mundo natural, com facilidade em entender paisagens ativas. As pessoas com essa inteligência possui características como: conexão com o meio ambiente; facilidade em identificar plantas, animais e insetos; reconhecer padrões, relações e diferenças no meio ambiente que passam despercebidos pela sociedade.
                    </div>
                </div>
            </div>

            <!-- Inteligência Existencial -->
            <div class="accordion-item" id="accordion-item">
                <h2 class="accordion-header" id="accordion-header">
                    <button id="titulo_tipoIM" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Existencial
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body" id="text-tipoInteli">
                        A inteligência existencial, a que gera e tenta responder às maiores perguntas sobre a natureza e preocupações humanas. (GARDNER ET AL, 2010, p. 19). As características dessa inteligência envolve o interesse pela filosofia e espiritualidade; autoconhecimento e reflexão; questionamentos sobre a existência, dentre outros.
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim do accordion -->
    </div>
<!-- (Fim) Parte: tipo das inteligências (accordion) -->

<!-- Parte: dúvidas frequentes -->  
<div class="container" id="container-duvidas">

    <div class="row" id="row-duvidas">
        <h5>Dúvidas Frequentes</h5>

        <!-- pergunta 1 -->
        <div class="row" id="col-perguntas">

            <h6><img src="/img/explicacoes/questionarioExplicacao/perguntas-frequentes-qv.png" width="40" alt="">&nbsp; O que é um Questionário Vocacional?</h6>  
        
            <p>O questionário vocacional pode ser definido como um questionário de orientação que lhe ajuda a identificar sua carreira ideal a partir da sua afinidade com cada carreira.</p>    

        </div> 

        <!-- pergunta 2 -->
        <div class="row" id="col-perguntas-azul">

            <h6><img src="/img/explicacoes/questionarioExplicacao/perguntas-frequentes-qv.png" width="40" alt="">&nbsp; Por que devo fazer o Questionário Vocacional?</h6>  
            <p>Fazer um questionário vocacional te garante mais chances de escolher sua carreia sem que você se arrependa depois!</p> 

        </div> 

        <!-- pergunta 3 -->
        <div class="row" id="col-perguntas">

            <h6><img src="/img/explicacoes/questionarioExplicacao/perguntas-frequentes-qv.png" width="40" alt="">&nbsp; Como o Questionário Vocacional pode me ajudar?</h6>  
            <p>O questionário vocacional pode te ajudar esclarecendo dúvidas sobre qual carreira seguir, além de abrir novas possibilidades para você!</p> 
                        
        </div> 

        <!-- colunas para versão mobile -->

            <!-- pergunta 1 -->
            <div class="row" id="col-perguntas-mobile">

                <div class="col" id="text-perguntas">
                <h6><img src="/img/explicacoes/questionarioExplicacao/perguntas-frequentes-qv.png" width="40" alt="">&nbsp; O que é um Questionário Vocacional?</h6>  

                <p>O questionário vocacional pode ser definido como um questionário de orientação que lhe ajuda a identificar sua carreira ideal a partir da sua afinidade com cada carreira.</p>    
                </div>
            </div> 

            <!-- pergunta 2 -->
            <div class="row" id="col-perguntas-azul-mobile">

            <div class="col" id="text-perguntas">
                <h6><img src="/img/explicacoes/questionarioExplicacao/perguntas-frequentes-qv.png" width="40" alt="">&nbsp; Por que devo fazer o Questionário Vocacional?</h6>  
                <p>Fazer um questionário vocacional te garante mais chances de escolher sua carreia sem que você se arrependa depois!</p> 
                </div>
            </div> 

            <!-- pergunta 3 -->
            <div class="row" id="col-perguntas-mobile">

                <div class="col" id="text-perguntas">

                    <h6><img src="/img/explicacoes/questionarioExplicacao/perguntas-frequentes-qv.png" width="40" alt="">&nbsp; Como o Questionário Vocacional pode me ajudar?</h6>  
                    <p>O questionário vocacional pode te ajudar esclarecendo dúvidas sobre qual carreira seguir, além de abrir novas possibilidades para você!</p>                      
                    
                </div>

                      
            </div> 
        <!-- (Fim) colunas para versão mobile -->

    </div>
    
</div>
<!-- (Fim) Parte: dúvidas frequentes -->

@endsection