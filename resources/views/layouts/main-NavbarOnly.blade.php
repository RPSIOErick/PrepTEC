<html>
    <head>
         <!--Configuração da Página-->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>@yield('title')</title>
        <!--Fim da Configuração da Página-->

        <!--Importação do Bootstrap-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <!--Fim da Importação do Bootstrap-->
        
        <!--Importação CSS e JS-->
            <link rel="stylesheet" href="/css/layouts/main.css">
            <link rel="stylesheet" href="/css/layouts/login-createAccount.css">
        <!--Fim da Importação CSS e JS-->

        <!-- Ícone na barra de endereço do site -->
            <link rel="shortcut icon" type="imagex/png" href="/img/layouts/logo-icon.ico">

    </head>
 
    <body>

        <!-- parte: navbar -->
        <nav class="navbar navbar-dark" id="navbar-preptec">

            <!-- logo -->
            <a class="navbar-brand" href="/"> <img src="/img/layouts/navbar/logo-preptec.png" alt="Logo PrepTec" id="logo" width="160"></a>

            <div id="div_group-prof-picture-menu">
                @php
                use Illuminate\Support\Facades\Session;
                use App\Models\Usuario;

                $conta = array();
                if(Session::has('loginId')){

                    $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

                }

                @endphp

                @if($conta && !empty($conta->fotoUsuario))
                    <img src="{{ asset('../users/'. $conta->fotoUsuario) }}" class="img-fluid" alt="Foto do perfil" onclick="window.location='/minhaconta'" id="img-profile">
                @elseif($conta && empty($conta->fotoUsuario))
                    <img src="/img/contas/minhaConta/img-profile-default.png" class="img-fluid" alt="Foto do perfil" onclick="window.location='/minhaconta'" id="img-profile">
                @else
                    <a href="#popup-CA-template-bg">
                        <button type="button" id="btn-cadastrar" class="btn btn-info" onclick="window.location='#popup-CA-template-bg'">Cadastre-se</button>
                    </a>
                @endif                

                <!-- Fim do Botão de Login -->                
                
                <!-- button hamburguer -->
                <button class="navbar-toggler" id="btn-hamburguer" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-preptec" aria-controls="menu-preptec" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- fim do botão hamburguer -->
            </div>

            <!-- menu lateral -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="menu-preptec" aria-labelledby="offcanvasDarkNavbarLabel">
                    
                    <!-- header -->
                        <div class="offcanvas-header" id="menu-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PrepTec</h5>

                            <!-- botão de fechar o menu lateral -->
                            <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    <!-- fim do header -->

                    <!-- body -->
                        <div class="offcanvas-body" id="menu-body">
                            
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

        <main id="PrepTEC-Content">

            @yield('content')

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
        </main>
        
        <script src="/js/multi-form.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    </body>

</html>

