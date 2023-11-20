<html>
    <!-- Home Nova -->
    <head>
        <!--Configuração da Página-->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title> PrepTEC - Boas vindas! </title>
        <!--Fim da Configuração da Página-->

        <!--Importação do Bootstrap-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <!--Fim da Importação do Bootstrap-->

        <!--Importação CSS e JS-->
            <link rel="stylesheet" href="/css/home.css">
            <link rel="stylesheet" href="/css/layouts/login-createAccount.css">
            <link rel="stylesheet" href="/css/layouts/footer.css">
        <!--Fim da Importação CSS e JS-->

        <!-- Ícone na barra de endereço do site -->
            <link rel="shortcut icon" type="imagex/png" href="/img/layouts/logo-icon.ico">
        
        
    </head>

    <body id="home-body">

        <!-- parte: navbar -->
        <nav class="navbar navbar-dark fixed-top" id="navbar-preptec" style="background-color: transparent;"> <!-- Background não pega no CSS -->
            
            <!-- logo -->
                <img src="/img/layouts/navbar/logo-preptec.png" class="img-fluid" alt="Logo PrepTec" id="logo-home">
            
                    @php
                    use Illuminate\Support\Facades\Session;
                    use App\Models\Usuario;

                    $conta = array();
                    if(Session::has('loginId')){

                        $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

                    }

                    @endphp

                    <!--Imagem de Perfil-->
                        @if(!empty($conta->fotoUsuario))
                                    
                            <img src="{{ asset('../users/'. $conta->fotoUsuario) }}" class="img-fluid" alt="Foto do perfil" onclick="window.location='/minhaconta'" id="img-profile">
                        
                        @endif
                    
                    <!-- Botão para ativar o menu lateral -->
                        <button class="navbar-toggler" id="btn-hamburguer" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-preptec" aria-controls="menu-preptec" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <!-- Fim do botão para ativar o menu lateral -->

                    <!-- menu lateral -->
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="menu-preptec" aria-labelledby="offcanvasDarkNavbarLabel">
                            
                            <!-- header -->
                                <div class="offcanvas-header" id="menu-header">
                                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PrepTEC</h5>

                                    <!-- botão de fechar o menu lateral -->
                                    <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                            <!-- fim do header -->

                            <!-- body -->
                                <div class="offcanvas-body" id="menu-body" style="margin-top: 0.5vh">
                                    
                                    <!-- animação -->
                                        <div id="background-animation">

                                            <!-- esferas da animação -->
                                                <div class="circles" id="circle1"></div>
                                
                                                <div class="circles" id="circle2"></div>
                                            
                                                <div class="circles" id="circle3"></div>
                                
                                                <div class="circles" id="circle4"></div>                
                                
                                                <div class="circles" id="circle5"></div>
                                
                                                <div class="circles" id="circle6"></div>
                                
                                                <div class="circles" id="circle7"></div>
                                
                                                <div class="circles" id="circle8"></div>
                                
                                                <div class="circles" id="circle9"></div> 
                                            <!-- fim das esferas -->

                                            <!-- itens do menu -->
                                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="menu-itens">

                                                    <!-- home -->
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav-link" href="/">
                                                            <img src="/img/layouts/navbar/iconesMenu/home_icon.png" id="icon-menu"/> &nbsp;
                                                            Home
                                                        </a>
                                                    </li>

                                                    @if(!empty($conta))
                                                    <!-- área do estudante -->
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav-link" href="/areadoaluno"><img src="/img/layouts/navbar/iconesMenu/hat_icon.png" id="icon-menu"/> &nbsp;Área de Estudo</a>
                                                    </li>
                                                    @else
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav-link" href="#popup-log-template-bg"><img src="/img/layouts/navbar/iconesMenu/hat_icon.png" id="icon-menu"/> &nbsp;Área de Estudo</a>
                                                    </li>
                                                    @endif
                                                    
                                                    <!-- questionário vocacional -->
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="nav-link" href="/questionario"><img src="/img/layouts/navbar/iconesMenu/lamp_icon.png" id="icon-menu"/> &nbsp;Questionário Vocacional</a>
                                                        </li>

                                                    <!-- informações do vestibulinho -->
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="nav-link" href="/vestibulinho">
                                                                <img src="/img/layouts/navbar/iconesMenu/info_icon.png" id="icon-menu"/> &nbsp;
                                                                Informações do Vestibulinho
                                                            </a>
                                                        </li>

                                                    @if(!empty($conta))
                                                    <!-- Minha Conta -->
                                                        <li class="nav-item">                
                                                            <a class="nav-link" id="nav-link" href="/minhaconta"><img src="/img/layouts/navbar/iconesMenu/perfil_icon.png" id="icon-menu"/> &nbsp; Minha Conta</a>
                                                        </li>
                                                    @endif              
                                                </ul>    
                                            <!-- fim do itens  -->    

                                        </div>
                                    <!-- fim da animação -->

                                </div>
                            <!-- fim do body -->

                        </div>
                    <!-- fim do menu -->
        </nav>
    <!-- Fim da navbar -->

        <!-- banner -->
            <div class="container" id="banner-home">


            <div class="row">

                <!-- lado esquerdo do banner -->
                    <div class="col" id="col-text-banner">
                        <h5>Bem Vindo a</h5>

                        <h2>PrepTEC</h2>
                        
                        <p>Conquiste sua vaga na Etec acessando nossos materiais de apoio!</p>

                        <div id="btn-login">
                            @if(!empty($conta))
                            <button type="button" class="btn btn-warning" onclick="window.location='/minhaconta'"><a href="/minhaconta">Minha Conta</a></button>
                            @else
                            <button type="button" class="btn btn-warning" onclick="window.location='#popup-log-template-bg'"><a href="#popup-log-template-bg">Fazer Login</a></button>
                            @endif
                        </div>
                    </div>
                <!-- fim do lado esquerdo -->

                
                <!-- lado esquerdo do banner mobile-->
                <div class="col" id="col-text-banner-mobile">

                        <h2>Bem Vindo!</h2>
                        <hr>
                        <p>Conquiste sua vaga na Etec acessando nossos materiais de apoio!</p>

                        <div id="btn-login">
                            @if(!empty($conta))
                            <button type="button" class="btn btn-warning" onclick="window.location='/minhaconta'"><a href="/minhaconta">Minha Conta</a></button>
                            @else
                            <button type="button" class="btn btn-warning" onclick="window.location='#popup-log-template-bg'"><a href="#popup-log-template-bg">Fazer Login</a></button>
                            @endif
                        </div>
                    </div>
                <!-- fim do lado esquerdo -->

                <!-- img banner (lado direito) -->
                    <div class="col" id="col-img-banner">           
                        <img src="/img/home/home_banner-livro-direita.png" alt="">           
                    </div>
                <!-- fim da img banner (lado direito) -->
                
            </div>

            </div>
        <!-- fim do banner -->

            <!-- O que é PrepTEC - Parte 2 -->

                <!--Div Pai PrepTEC-->
                <div id="d-part2-preptec-father-desktop">

                <!-- Título da parte 2 -->
                    <h1 id="d-preptec-title"> O que é PrepTEC? </h1>
                <!--Fim do Titulo da Parte 2-->

                <!--Quadrado Degradee Amarelo-->
                    <div id="d-preptec">
                        
                            <!-- Personagens A - Container Amarelo -->
                                <div id="d-preptec-character-shadow">
                                    <img src="/img/home/personagens/pc/home-personage-pc-1.png"  id="img-part2-character01">
                                    <img src="/img/home/personagens/pc/home-personage-pc-2.png"  id="img-part2-character02">
                                    <img src="/img/home/personagens/pc/home-personage-pc-3.png"  id="img-part2-character03">
                                </div>
                            <!--Fim dos Personagens A-->

                            <!--Container Texto Parte 2-->
                                <div id="d-preptec-txt-column">
                                    <!-- Texto da parte 2 (O que é PrepTEC) -->
                                        <p id="d-yc-text"> 
                                            A PrepTEC tem como finalidade auxiliar os candidatos que prestarão o exame do Vestibulinho Etec. 
                                            Este website oferece simulado, questionário vocacional e 
                                            informações adicionais sobre o Vestibulinho para fornecer apoio nos estudos e aumentar as chances de aprovação. 
                                        </p>
                                    <!--Fim do texto da parte 2-->
                                </div>
                            <!--Fim Do Container Texto Parte 2-->

                    </div>
                <!--Fim do Quadrado Degradee Amarelo-->

                <!-- Colunas das Post-Its -->
                    <div class="row" id="d-preptec-row">
                        
                        <!-- Coluna 1 -->
                            <div class="col" id="post-it-col-left" style="pointer-events: none;">
                                <center>

                                    <!-- Post-it 1 - Simulado -->
                                        <div id="div-post-it-yc">
                                            <div id="div-post-it-durex-blue"></div>
                                            @if(!empty($conta))
                                            
                                            <a href="/simulado/realizar" id="post-it-text-1">Realize o <br>simulado!</a> 
                                            
                                            @else

                                            <a href="#popup-log-template-bg" id="post-it-text-1">Realize o <br>simulado!</a> 

                                            @endif
                                        </div>
                                    <!-- Fim do Post-it 1 -->

                                </center>
                            </div>
                        <!-- Fim da coluna 1 -->

                         <!-- Coluna 2 -->
                            <div class="col" id="post-it-col-right">
                                <center>

                                    <!-- Post-it 2 - Questionario Vocacional -->
                                        <div id="div-post-it-yc">
                                            <div id="div-post-it-durex-blue"></div>
                                            <a href="/questionario" id="post-it-text"> Realize o questionário vocacional! </a> 
                                        </div>
                                    <!-- Fim do Post-it 2 -->
                                </center>
                            </div>
                        <!-- Fim da coluna 2 -->

                    </div>
                <!-- Fim das colunas de Post Its -->

                </div>
                <!--Fim da Div Pai PrepTec-->

            <!-- Fim da parte 2 (O que é PrepTEC) -->

            <!-- O que é Etec - Parte 3 -->
                <div id="d-part3-father-desktop">

                <!--Titulo Parte 3-->
                <h2 id="d-etec-title"> O que é Etec? </h2>
                <!--Fim do Titulo Parte 3-->

                <!--Quadrado Degrade Azul-->
                <div id="d-etec">

                    <!--Container Texto parte 3-->
                        <div id="d-blue-container">

                            <!-- Personagens B - Container Azul-->
                            <div id="d-preptec-character-shadow-1">
                                    <img src="/img/home/personagens/pc/home-personage-pc-4.png"  id="img-part2-character04">
                                    <img src="/img/home/personagens/pc/home-personage-pc-5.png"  id="img-part2-character05">
                                </div>
                            <!--Fim dos Personagens B-->

                            <!--Container Texto Parte 2-->
                            <div id="d-etec-txt-column">
                            <!--Texto Parte 3-->
                                <p id="d-bc-text"> 
                                    As Escolas Técnicas Estaduais, 
                                    conhecidas pela sigla Etec, 
                                    são instituições de nível médio que oferecem cursos 
                                    técnicos no estado de São Paulo. 
                                    <br><br>
                                    Saiba tudo sobre elas pela nossa pagína abaixo!
                                </p>
                            <!--Fim do Texto Parte 3-->

                        </div>
                    <!--Fim do Container Texto parte 3-->

                </div>
                <!--Fim do Quadrado Degrade Azul-->


                    <!--Post It Parte 3-->
                        <div class="col" id="post-it-bc-column">
                            <div id="div-post-it-bc">
                                <div id="div-post-it-durex-yellow" class="d-template-center-hori"></div>
                                <a href="/vestibulinho" id="post-it-text-bc"><center> Acessar informações do vestibulinho! </center></a> 
                            </div>
                        </div>
                    <!--Fim do Post It Parte 3-->

                </div>
                <!--Fim do Quadrado Degrade Azul-->

                </div>
            <!-- Fim da parte 3 (O que é Etec) -->

            <!--Parte 4 - Criar Conta-->

                <!--Div Pai A - Parte 4 - Desktop-->
                <div id="d-part4-father-desktop">

                <!--Titulo Parte 4-->
                <center><h2 id="txt-part4-title">COMECE SUA JORNADA!</h2></center>
                <!--Fim do Titulo Parte 4-->

                <!--SVG - Quadrados Azuis "Chão"-->
                <svg viewBox="1.982 -1.2 1918.018 231.062" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="xMidYMid meet" id="svg-part4-bluesquares">
                    <path d="M -0.314 -0.312 L 186.632 -0.312 L 186.632 171.3 L 323.434 171.3 L 323.434 65.364 L 501.032 65.364 L 501.032 171.3 L 543.095 171.3 L 543.095 233.615 L 184.783 233.615 L 184.783 233.37 L -0.314 233.37 L -0.314 -0.312 Z M 681.747 35.764 L 892.061 35.764 L 892.061 94.963 L 934.123 94.963 L 934.123 79.385 L 1121.069 79.385 L 1121.069 143.418 L 1286.205 143.418 L 1286.205 31.251 L 1485.613 31.251 L 1485.613 143.418 L 1575.394 143.418 L 1575.394 -0.237 L 1919.686 -0.237 L 1919.686 230.499 L 1580.644 230.499 L 1580.644 231.32 L 1121.069 231.32 L 1121.069 236.731 L 681.747 236.731 L 681.747 35.764 Z" fill="#326CB4" style=""/>
                    <path d="M 120.186 -0.812 L 120.186 109.345 L 206.999 109.345 L 206.999 41.345 L 321.999 41.345 L 321.999 109.345 L 348.999 109.345 L 348.999 150.345 L 117.999 150.345 L 117.999 150.188 L -0.814 150.188 L -0.814 -0.812 Z M 0.186 149.188 L 118.999 149.188 L 118.999 149.345 L 347.999 149.345 L 347.999 110.345 L 320.999 110.345 L 320.999 42.345 L 207.999 42.345 L 207.999 110.345 L 119.186 110.345 L 119.186 0.188 L 0.186 0.188 Z M 572.999 22.345 L 572.999 60.345 L 598.999 60.345 L 598.999 50.345 L 719.999 50.345 L 719.999 91.448 L 824.999 91.448 L 824.999 19.448 L 953.999 19.448 L 953.999 91.448 L 1010.629 91.448 L 1010.629 -0.764 L 1232.629 -0.764 L 1232.629 148.345 L 1014.999 148.345 L 1014.999 148.872 L 719.999 148.872 L 719.999 152.345 L 436.999 152.345 L 436.999 22.345 Z M 437.999 151.345 L 718.999 151.345 L 718.999 147.872 L 1013.999 147.872 L 1013.999 147.345 L 1231.629 147.345 L 1231.629 0.236 L 1011.629 0.236 L 1011.629 92.448 L 952.999 92.448 L 952.999 20.448 L 825.999 20.448 L 825.999 92.448 L 718.999 92.448 L 718.999 51.345 L 599.999 51.345 L 599.999 61.345 L 571.999 61.345 L 571.999 23.345 L 437.999 23.345 Z" style="fill: none;"/>
                    <path d="M 120.186 -0.812 L 120.186 109.345 L 206.999 109.345 L 206.999 41.345 L 321.999 41.345 L 321.999 109.345 L 348.999 109.345 L 348.999 150.345 L 117.999 150.345 L 117.999 150.188 L -0.814 150.188 L -0.814 -0.812 Z M 0.186 149.188 L 118.999 149.188 L 118.999 149.345 L 347.999 149.345 L 347.999 110.345 L 320.999 110.345 L 320.999 42.345 L 207.999 42.345 L 207.999 110.345 L 119.186 110.345 L 119.186 0.188 L 0.186 0.188 Z M 572.999 22.345 L 572.999 60.345 L 598.999 60.345 L 598.999 50.345 L 719.999 50.345 L 719.999 91.448 L 824.999 91.448 L 824.999 19.448 L 953.999 19.448 L 953.999 91.448 L 1010.629 91.448 L 1010.629 -0.764 L 1232.629 -0.764 L 1232.629 148.345 L 1014.999 148.345 L 1014.999 148.872 L 719.999 148.872 L 719.999 152.345 L 436.999 152.345 L 436.999 22.345 Z M 437.999 151.345 L 718.999 151.345 L 718.999 147.872 L 1013.999 147.872 L 1013.999 147.345 L 1231.629 147.345 L 1231.629 0.236 L 1011.629 0.236 L 1011.629 92.448 L 952.999 92.448 L 952.999 20.448 L 825.999 20.448 L 825.999 92.448 L 718.999 92.448 L 718.999 51.345 L 599.999 51.345 L 599.999 61.345 L 571.999 61.345 L 571.999 23.345 L 437.999 23.345 Z" style="fill: none;"/>
                </svg>
                <!--Fim do SVG-->

                <!--Personagens-->
                <img src="/img/home/personagens/pc/home-personage-pc-1.png"  id="img-part4-character01">
                <img src="/img/home/personagens/pc/home-personage-pc-2.png"  id="img-part4-character02">
                <img src="/img/home/personagens/pc/home-personage-pc-3.png"  id="img-part4-character03">
                <img src="/img/home/personagens/pc/home-personage-pc-4.png"  id="img-part4-character04">
                <img src="/img/home/personagens/pc/home-personage-pc-5.png"  id="img-part4-character05">
                <!--Fim dos Personagens-->

                <!--Quadrado Azul Grande - Quadrado Azul Embaixo do SVG-->
                <div id="d-part4-bbs">

                    <!--Centralizador - Bootstrap Container-->
                        <div class="container">

                            <!--Alinhamento - Bootstrap Row, 2 colunas-->
                                <div class="row row-cols-2 justify-content-md-center" id="d-part4-bbs-row">

                                    <!--Coluna Texto-->
                                        <div class="col" id="d-part4-bbs-column">
                                            <p id="txt-part4-bbs">Junte-se a nós e faça do seu sonho de aprovação uma realidade!</p>
                                        </div>
                                    <!--Fim da Coluna Texto-->

                                    <!--Coluna Botão-->
                                        <div class="col" id="d-part4-bbs-column">
                                            @if(!empty($conta))
                                            <button class="btn-templeate-appearance" id="btn-part4-bbs-createaccount" onclick="window.location='/minhaconta'"><a href="/minhaconta">Minha Conta</a></button>
                                            @else
                                            <button class="btn-templeate-appearance" id="btn-part4-bbs-createaccount" onclick="window.location='#popup-CA-template-bg'"><a href="#popup-CA-template-bg">Criar Conta</a></button>
                                            @endif
                                        </div>
                                    <!--Fim da Coluna Botão-->

                                </div>
                            <!--Fim do Alinhamento-->

                        </div>
                    <!--Fim do Centralizador-->

                </div>
                <!--Fim do Quadrado Azul Grande-->

                </div>
                <!--Fim da Div Pai A-->

            <!--Fim da Parte 4-->

        <!--Fim do Desktop-->

            <!--Mobile-->
                <!--Parte 2-->
                <div class="container" id="d-part2-preptec-father-mobile">

                <!--Alinhamento A - 2 Colunas-->
                    <div class="row row-cols-2">
                        <!--Personagem A1-->
                            <div class="col" id="d-part2M-col-pA1">
                                <img src="/img/home/personagens/mobile/home-personage-mobile-1.png" id="img-part2M-pA1">
                            </div>
                        <!--Fim do Personagem A1-->

                        <!--Titulo PrepTec-->
                            <div class="col" id="d-part2M-col-title">
                                <h2 class="txt-partM-title-template d-template-center-vertAndHori" id="txt-part2-title-preptec">O que é <br>PrepTEC?</h2>
                            </div>
                        <!--Fim do Titulo PrepTec-->
                    </div>
                <!--Fim do Alinhamento A-->

                <!--Coluna Amarela-->
                    <div class="d-partM-colTemplate" id="d-part2M-colAmarela">
                        <p class="txt-template-jusify-text">
                            A PrepTEC é um site que oferece simulado, 
                            questionário vocacional e informações adicionais sobre o 
                            Vestibulinho Etec para fornecer auxílio aos 
                            candidatos e possivelmente aumentar o 
                            desempenho para a prova!
                        </p>
                    </div>
                <!--Fim da Coluna Amarela-->

                <!--Alinhamento B - 2 Colunas-->
                    <div class="row row-cols-2">
                        <!--Coluna Botões-->
                            <div class="col d-partM-col-botaos-templates">

                                <!--Botão Realize o Simulado-->
                                    @if(!empty($conta))
                                        <button class="btn-partM-btnTemplate" id="btn-part2M-btnAzul"><a href="/simulado/realizar">Realize o Simulado</a></button>
                                    @else
                                        <button class="btn-partM-btnTemplate" id="btn-part2M-btnAzul"><a href="#popup-CA-template-bg">Realize o Simulado</a></button>
                                    @endif
                                <!--Fim do Botão Realize o Simulado-->
                                    <br><br>
                                <!--Botão Realize o Questionario Vocacional-->
                                    <button class="btn-partM-btnTemplate" id="btn-part2M-btnAzul"><a href="/questionario">Realize um questionário <br>vocacional</a></button>
                                <!--Fim do Botão o Questionario Vocacional-->
                            
                            </div>
                        <!--Fim da Coluna Botões-->

                        <!--Personagem A2-->
                            <div class="col d-partM-col-personagem-template">
                                <img src="/img/home/personagens/mobile/home-personage-mobile-2.png" class="d-template-center-vertAndHori" id="img-part2M-pA2">
                            </div>
                        <!--Fim do Personagem A2--> 

                    </div>
                <!--Fim do Alinhamento B-->

                </div>
                <!--Fim da Parte 2-->

                <!--Parte 3-->
                <div id="d-part3-father-mobile" class="container">

                <!--Titulo PrepTec-->
                    <h2 class="txt-partM-title-template" id="txt-part3M-title-etec">O que é Etec?</h2>
                <!--Fim do Titulo PrepTec-->

                <!--Coluna Azul-->
                    <div class="d-partM-colTemplate" id="d-part3M-colAzul">
                        <p class="txt-template-jusify-text">
                            As Escolas Técnicas Estaduais, 
                            conhecidas pela sigla Etec, 
                            são instituições de nivel medio 
                            que oferecem cursos tecnicos 
                            no estado de São Paulo.
                            <br><br>Saiba tudo sobre elas pela nossa pagína:
                        </p>
                    </div>
                <!--Fim da Coluna Azul-->

                <!--Alinhamento B - 2 Colunas-->
                    <div class="row row-cols-2">
                        <!--Coluna Botões-->
                            <div class="col d-partM-col-botaos-templates">

                                <!--Botão Realize o Simulado-->
                                    <button class="btn-partM-btnTemplate" id="btn-part3M-btnAmarelo">Acessar Informações do Vestibulinho</button>
                                <!--Fim do Botão Realize o Simulado-->
                            </div>
                        <!--Fim da Coluna Botões-->

                        <!--Personagem A2-->
                            <div class="col d-partM-col-personagem-template">
                                <img src="/img/home/personagens/mobile/home-personage-mobile-4.png" id="img-part3M-pA3">
                            </div>
                        <!--Fim do Personagem A2--> 

                    </div>
                <!--Fim do Alinhamento B-->
                </div>
                <!--Fim da Parte 3-->

                <!--Parte 4-->
                <div class="container text-center" id="d-part4-father-mobile">

                <!--Titulo Comece Sua Jornada-->
                    <h2 id="txt-part4M-title">COMECE SUA <br>JORNADA!</h2>
                <!--Fim do Titulo Comece Sua Jornada-->

                <!--Texto Subtitulo-->
                    <p class="txt-template-main-text" id="txt-part4M-subtitle">
                        Junte-se <br>
                        e faça do seu sonho de aprovação <br>
                        uma realidade!
                    </p>

                <!--Fim do Texto Subtitulo-->

                <!--Botão Criar Conta-->
                    <button class="btn-templeate-appearance" id="btn-part4M-criarConta" onclick="window.location='#popup-CA-template-bg'">Criar Conta</button>
                <!--Fim do Botão Criar Conta-->

                <!--Personagem B1-->
                    <img src="/img/home/personagens/mobile/home-personage-mobile-1.png" id="img-part4M-pB1">
                <!--Fim do Personagem B1-->

                <!--Personagem B2-->
                    <img src="/img/home/personagens/mobile/home-personage-mobile-2.png" id="img-part4M-pB2">
                <!--Fim do Personagem B2-->

                <!--Personagem B3-->
                    <img src="/img/home/personagens/mobile/home-personage-mobile-3.png" id="img-part4M-pB3">
                <!--Fim do Personagem B3-->

                <!--Personagem B4-->
                    <img src="/img/home/personagens/mobile/home-personage-mobile-4.png" id="img-part4M-pB4">
                <!--Fim do Personagem B4-->

                <!--Quadrados Azuis-->
                    <div class="d-partM-quadrado-template" id="d-part4M-qua1"></div>
                    <div class="d-partM-quadrado-template" id="d-part4M-qua2"></div>
                    <div class="d-partM-quadrado-template" id="d-part4M-qua3"></div>
                    <div class="d-partM-quadrado-template" id="d-part4M-qua4"></div>

                <!--Fim dos Quadrados Azuis-->
                </div>
                <!--Fim da Parte 4-->
            <!--Fim do Mobile-->

        <!-- Footer -->
            <footer>

                <!--Container Principal-->
                    <div class="container-fluid" id="d-footer-container">

                        <!--Row - 3 Col-->
                            <div class="row row-cols-3">

                                <!--Coluna Desenvolvedores-->
                                    <div class="col" id="d-footer-devs-col">

                                        <!--Titulo-->
                                            <h2 id="txt-footer-title">Desenvolvedores</h2>
                                        <!--Fim do Titulo-->

                                        <!--Fotos Desenvolvedores - Carrosel Bootstrap-->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" id="d-footer-dev-carrousel">

                                                <div class="carousel-inner" id="d-footer-dev-carrousel-carrouselInner">

                                                    <div class="carousel-item active">
                                                        
                                                        <!--Imagem Desenvolvedor-->
                                                            <img src="/img/layouts/footer/ana.png" class="d-block img-footer-dev-devPic" alt="...">
                                                        <!--Imagem Desenvolvedor-->

                                                        <!--Nome Desenvolvedor-->
                                                            <p id="txt-footer-dev-devName">Ana Luísa A. do Val</p>
                                                        <!--Fim do Nome Desenvolvedor-->

                                                        <!--Icones-->
                                                            <div id="d-footer-dev-carrosel-divIcon">

                                                                <a href="https://github.com/AnaLuisaAugusto">
                                                                    <img src="/img/layouts/footer/github_icon.png" alt="">
                                                                </a>

                                                                    &nbsp;&nbsp;

                                                                <a href="http://www.linkedin.com/in/ana-luisa-augusto-">
                                                                    <img src="/img/layouts/footer/linkedin_icon.png" alt="">
                                                                </a>

                                                            </div>
                                                        <!--Fim do Icones-->

                                                    </div>

                                                    <div class="carousel-item">

                                                        <!--Imagem Desenvolvedor-->
                                                            <img src="/img/layouts/footer/erick.jpg" class="d-block img-footer-dev-devPic" alt="...">
                                                        <!--Imagem Desenvolvedor-->

                                                        <!--Nome Desenvolvedor-->
                                                            <p id="txt-footer-dev-devName">Erick Bastos</p>
                                                        <!--Fim do Nome Desenvolvedor-->

                                                        <!--Icones-->
                                                            <div id="d-footer-dev-carrosel-divIcon">
                                                                
                                                                <a href="https://github.com/RPSIOErick">
                                                                    <img src="/img/layouts/footer/github_icon.png" alt="">
                                                                </a>

                                                                    &nbsp;&nbsp;

                                                                <a href="https://www.linkedin.com/in/erickpereirabastos/">
                                                                    <img src="/img/layouts/footer/linkedin_icon.png" alt="">
                                                                </a>

                                                            </div>
                                                        <!--Fim dos Icones-->

                                                    </div>

                                                    <div class="carousel-item">

                                                        <!--Imagem Desenvolvedor-->                
                                                            <img src="/img/layouts/footer/giovana.jpg" class="d-block img-footer-dev-devPic" alt="...">
                                                        <!--Imagem Desenvolvedor-->

                                                        <!--Nome Desenvolvedor-->
                                                            <p id="txt-footer-dev-devName">Giovana S. de França</p>
                                                        <!--Fim do Nome Desenvolvedor-->

                                                        <!--Icones-->
                                                            <div id="d-footer-dev-carrosel-divIcon">

                                                                <a href="https://github.com/gsfranca">
                                                                    <img src="/img/layouts/footer/github_icon.png" alt="">
                                                                </a>

                                                                    &nbsp;&nbsp;

                                                                <a href="https://www.linkedin.com/in/giovanasantosdefranca/">
                                                                    <img src="/img/layouts/footer/linkedin_icon.png" alt="">
                                                                </a>

                                                            </div>
                                                        <!--Fim do Icones-->
                                                    </div>

                                                </div>

                                            </div>
                                        <!--Fim das Fotos Desenvolvedores-->

                                    </div>
                                <!--Coluna Desenvolvedores-->

                                <!--Coluna PrepTec-->
                                    <div class="col" id="d-footer-preptec-col">

                                        <!--Titulo-->
                                            <h2 id="txt-footer-title">PrepTEC</h2>
                                        <!--Fim do Titulo-->

                                        <!--Texto PrepTec-->
                                            <p id="txt-footer-prepT-explanation">
                                                PrepTEC é um website que oferece recursos gratuitos que 
                                                auxiliam na preparação do Vestibulinho da ETEC. 
                                            </p>
                                        <!--Fim do Texto PrepTec-->

                                        <!--Copyright-->
                                            <p id="txt-footer-prepT-copyright">© 2023 Copyright: PrepTEC</p>
                                        <!--Fim do Copyright-->
                                    </div>
                                <!--Fim da Coluna PrepTec-->

                                <!--Coluna Projeto-->
                                    <div class="col" id="d-footer-projeto-col">

                                        <!--Titulo-->
                                            <h2 id="txt-footer-title">Projeto</h2>
                                        <!--Fim do Titulo-->


                                        <!--Icone PrepTEC-->
                                        <a href="https://github.com/RPSIOErick/PrepTEC"> <img src="/img/layouts/footer/preptec-logo-github.png" alt="" id="img-footer-proj-preptecGit"></a>
                                        <!--Fim do Icone PrepTEC-->

                                        <!--Explicação Projeto-->
                                            <p id="txt-footer-proj-explanation">
                                                Acesse esse projeto no GitHub e saiba 
                                                mais sobre a construção do site.
                                            </p>
                                        <!--Fim da Explicação Projeto-->

                                    </div>
                                <!--Fim da Coluna Projeto-->
                            </div>
                        <!--Fim do Row-->

                    </div>
                <!--Fim do Container Principal-->

            </footer>
        <!-- Fim do Footer -->

        <!--Popup Cadastro-->
        <div id="popup-CA-template-bg" class="overlay">

            <!--Popup-->
                <div class="d-template-center-vertAndHori" id="popup-logCA-template">

                    <!--Botão Fechar-->
                        <a class="close" id="btn-popup-logCA-template-close" href="#">&times;</a>
                    <!--Fim do Botão Fechar-->

                    <!--Row-->
                        <div class="row row-cols-2">
                                
                            <!--Criar Conta A - Parte esquerda (Banner)-->
                                <div class="col" id="d-popup-logCA-template-col-banner">
                                    <img src="/img/layouts/login-createAccount/banner-CA.png" alt="" id="img-popup-logCA-template-banner">
                                </div>
                            <!--Fim do Criar Conta A-->

                            <!--Criar Conta B - Parte Direita (Formulário)-->
                                <div class="col" id="d-popup-logCA-template-col">

                                    <!--Titulo Login-->
                                        <div class="row row-cols-1" id="d-popup-logCA-template-row-title">

                                            <div class="col d-template-center-vert" id="d-popup-logCA-template-col-icon">
                                                <ion-icon name="person-circle-outline" id="icon-popup-logCA-template-personIcon"></ion-icon>
                                            </div>

                                            <div class="col d-template-center-vert" id="d-popup-logCA-template-col-title">
                                                <h1 class="d-template-center-hori" id="txt-popup-logCA-template-title">
                                                    CADASTRE-SE
                                                </h1>
                                            </div>

                                        </div>
                                    <!--Fim do Titulo Login-->

                                    <!--Formulario de Cadastro-->
                                    
                                        <form id="d-popup-logCA-template-form" method="POST" action="{{'/usuario/salvar'}}" enctype="multipart/form-data">
                                            @if(Session::has('Sucesso'))
                                                <div class="alert alert-success" style="width: 95%; text-align: center;">{{Session::get('Sucesso')}}</div>
                                            @endif
                                            @if(Session::has('Falha'))
                                                <div class="alert alert-danger" style="width: 95%; text-align: center;">{{ Session::get('Falha') }}</div>
                                            @endif

                                            @csrf

                                            <!--Primeira Etapa-->
                                                <div id="prim-etapa">
                                                    <!--Input Usuário-->
                                                        <div class="mb-3">
                                                            <label for="usuario" class="form-label"> Nome: </label>
                                                            <input required type="text" class="form-control" id="usuario" name="nome_usuario" value="{{old('nome_usuario')}}">
            
                                                            <span class="text-danger"> @error('nome_usuario') {{$message}} @enderror</span>
                                                        </div>
                                                    <!--Fim do Input Usuário-->

                                                    <!--Inpu Email-->
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label"> Email: </label>
                                                            <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email_usuario" value="{{old('email_usuario')}}" pattern=".*@.*\.com">
                                                            <div id="d-popup-logCA-template-warning">
                                                                <p>Certifique-se que seu email contenha:</p>
                                                                <ul>
                                                                    <li>@</li>
                                                                    <li>.com</li>
                                                                </ul>
                                                            </div>
                                                            <span class="text-danger"> @error('email_usuario') {{$message}} @enderror</span>
                                                        </div>
                                                    <!--Fim do Input Email-->

                                                    <!--Input Senha-->
                                                        <div class="mb-3">
                                                            <label for="senha" class="form-label"> Senha: </label>
                                                            <input type="password" class="form-control" id="password" placeholder="********" name="senha_usuario" value="{{old('senha_usuario')}}" minlength="8">
                                                            <div id="d-popup-logCA-template-warning">
                                                                <p>Certifique-se que sua senha contenha:</p>
                                                                <ul>
                                                                    <li>No minimo 8 caracteres</li>
                                                                    <li>1 Número</li>
                                                                    <li>1 Letra Maiscula</li>
                                                                    <li>1 Caracter Especial</li>
                                                                </ul>
                                                            </div>
                                                            <span class="text-danger"> @error('senha_usuario') {{$message}} @enderror</span>
                                                        </div>
                                                    <!--Fim do Input Senha-->

                                                    <!--Botão proxima parte-->
                                                        <center>
                                                            <button class="btn-templeate-appearance d-template-center-hori" id="btn-popup-logCA-template" type="button" onclick="ProxFase()"> Próxima Etapa </button>
                                                            <p id="txt-popup-logCA-template-text-2">
                                                                Já possui uma conta?
                                                                <a href="#popup-log-template-bg" id="txt-popup-CA-login"> Faça login!</a>
                                                            </p>
                                                        </center>
                                                    <!--Fim do Botão proxima parte-->
                                                </div>
                                            <!--Fim da Primeira Etapa-->

                                            <!-- Segunda Etapa do Formulário -->
                                                <div id="segun-etapa" style="display: none;">

                                                    <center>
                                                        <!-- Input: Imagem -->
                                                        <div class="mb-3" id="d-home-mb3Perfil">
                                                            <img src="/img/layouts/login-createAccount/user-Img.png"> <br>
                                                            <label for="foto" class="form-label"> Envie uma foto! </label>
                                                            <input type="file" name="fotoUsuario" class="form-control" accept="image/*">
                                                        </div>


                                                        <button type="button" onclick="FaseAnterior()" id="btn-popup-CA-backForm"> Voltar a etapa anterior </button>
                                                    </center>

                                                    <!--Confirmar Criar Conta-->
                                                        <center>
                                                            <button class="btn btn-templeate-appearance d-template-center-hori" id="btn-popup-logCA-template" type="submit"> 
                                                                    Cria conta
                                                            </button>
                                                            <p id="txt-popup-logCA-template-text-2">
                                                                Já possui uma conta?
                                                                <a href="#popup-log-template-bg" id="txt-popup-CA-login"> Faça login!</a>
                                                            </p>                                
                                                        </center>
                                                    <!--Fim do Confirmar Criar Conta-->

                                                </div>
                                            <!--Fim da Segunda Etapa-->

                                        </form>
                                    <!--Fim do Formulario de Cadastro-->

                                </div>
                            <!--Fim do Criar Conta B-->

                        </div>
                    <!--Fim do Row-->

                </div>
            <!--Fim do Popup-->

            </div>
            <!--Fim do Popup Cadastro-->

            <!--Popup Login-->
            <div id="popup-log-template-bg" class="overlay">

            <!--Popup-->
                <div class="d-template-center-vertAndHori" id="popup-logCA-template">

                    <!--Botão Fechar-->
                        <a class="close" id="btn-popup-logCA-template-close" href="#">&times;</a>
                    <!--Fim do Botão Fechar-->

                    <!--Row-->
                        <div class="row">

                            <!--Login A - Parte Esquerda (Banner)-->
                                <div class="col" id="d-popup-logCA-template-col-banner">
                                    <img src="/img/layouts/login-createAccount/banner-LOG.png" alt="" id="img-popup-logCA-template-banner">
                                </div>
                            <!--Fim do Login A-->

                            <!--Login B - Parte Direira (Formulário)-->
                                <div class="col" id="d-popup-logCA-template-col">

                                        <!--Titulo Login-->
                                            <div class="row row-cols-1" id="d-popup-logCA-template-row-title">

                                                <div class="col d-template-center-vert" id="d-popup-logCA-template-col-icon">
                                                    <ion-icon name="person-circle-outline" id="icon-popup-logCA-template-personIcon"></ion-icon>
                                                </div>

                                                <div class="col d-template-center-vert" id="d-popup-logCA-template-col-title">
                                                    <h1 class="d-template-center-hori" id="txt-popup-logCA-template-title">
                                                        LOGIN
                                                    </h1>
                                                </div>

                                            </div>
                                    <!--Fim do Titulo Login-->

                                        @if(Session::has('Sucesso'))
                                                <div class="alert alert-success" style="width: 95%; text-align: center;">{{Session::get('Sucesso')}}</div>
                                            @endif
                                            @if(Session::has('Falha'))
                                                <div class="alert alert-danger" style="width: 95%; text-align: center;">{{Session::get('Falha')}}</div>
                                            @endif
                                    
                                        <!--Formulario de Login-->
                                            <form id="d-popup-logCA-template-form" action="{{'/usuario/minha_conta'}}" method="POST">
                                                @csrf

                                                <!--Input Email-->
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">&nbsp;&nbsp;Email:</label>
                                                        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email_usuario" pattern=".*@.*\.com">
                                                        <div id="d-popup-logCA-template-warning">
                                                            <p>Certifique-se que seu email contenha:</p>
                                                            <ul>
                                                                <li>@</li>
                                                                <li>.com</li>
                                                            </ul>
                                                        </div>
                                                        <span class="text-danger"> @error('email_usuario') {{$message}} @enderror</span>
                                                    </div>
                                                <!--Fim do Input Email-->

                                                <!--Input Senha-->
                                                    <div class="mb-3">
                                                        <label for="senha" class="form-label">&nbsp;&nbsp;Senha:</label>
                                                        <input type="password" class="form-control" id="password" placeholder="********" name="senha_usuario" minlength="8" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&*!])[A-Za-z\d@#$%^&*!]+$">
                                                        <div id="d-popup-logCA-template-warning">
                                                            <p>Certifique-se que sua senha contenha:</p>
                                                            <ul>
                                                                <li>No minimo 8 caracteres</li>
                                                                <li>1 Número</li>
                                                                <li>1 Letra Maiscula</li>
                                                                <li>1 Caracter Especial</li>
                                                            </ul>
                                                        </div>
                                                        <span class="text-danger"> @error('senha_usuario') {{$message}} @enderror</span>
                                                    </div>
                                                <!--Fim do Input Senha-->

                                                <p id="txt-popup-logCA-template-text">
                                                    Ainda não possui uma conta?
                                                    <a href="#popup-CA-template-bg" id="txt-popup-CA-login"> Criar Conta!</a>
                                                </p>

                                                <!--Confirmar Login-->
                                                    <center>   
                                                        <button class="btn btn-templeate-appearance d-template-center-hori" id="btn-popup-logCA-template" type="submit">
                                                                Entrar
                                                        </button>
                                                    </center>
                                                <!--Fim do Confirmar Login-->

                                            </form>
                                        <!--Fim do Formulario de Login-->

                                </div>
                            <!--Fim do Login B-->

                        </div>
                    <!--Fim do Row-->

                </div>
            <!--Fim do Popup-->

            </div>
            <!--Fim do Popup Login-->

        <!-- Import do Ion Icons -->
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!-- Fim do Import do Ion Icons -->
        <script src="/js/multi-form.js"></script>
        <script>
            window.addEventListener('scroll', function() 
            {
                var navbar = document.getElementById('navbar-preptec')
                
                if (window.scrollY > 30) {
                    navbar.style.backgroundColor = '#224a7d';
                } 
                else {
                    navbar.style.backgroundColor = 'transparent';
                }

            }
            );

         </script>
        </body>
    </html>