<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minha Conta - PrepTEC</title>
        <!-- Links Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="/css/contas/minhaConta-Estudante.css">

        <!-- Ícone na barra de endereço do site -->
            <link rel="shortcut icon" type="imagex/png" href="/img/layouts/logo-icon.ico">
    </head>

    <body>
    <div class="container-fluid">

    
    @php
    use Illuminate\Support\Facades\Session;
    use App\Models\ResultSimu;

    $resultados = array();
    if(Session::has('loginId')){

        $resultados = ResultSimu::where('id_usuario', '=', Session::get('loginId'))->first();

    }

    @endphp


            <!-- Sidebar esquerdo -->
                <div id="sidebar">

                    <!-- Dados do Usuário -->

                        <!-- Nome -->
                        <h2 id="username"> {{$conta->nome_usuario}} </h2>

                        <!-- Foto de Perfil  -->
                        <div id="profile-picture">
                            @if(!empty($conta->fotoUsuario))
                            
                                <img src="{{ asset('../users/'. $conta->fotoUsuario) }}" alt="Foto do perfil">
                            
                            @else

                                <img src="/img/contas/minhaConta/img-profile-default.png" alt="Foto do perfil">
                            
                            @endif

                            <div id="icon">
                                    <form method="POST" action="/usuario/editar-perfil/{{$conta->id_usuario}}" enctype="multipart/form-data" id="form-editar-imagem">
                                        @csrf
                                        @method('put')
                                        <input type="text" name="id_usuario" value="{{$conta->id_usuario}}" hidden>
                                        <input type="file" name="fotoUsuario" class="form-control" accept="image/*" id="input-imagem-user">
                                        <img src="/img/contas/minhaConta/minha-conta_edit.png" alt="Editar ícone" id="img-iconProfilePicture">
                                    </form>
                                </div>
                            </div>

                        <!-- Email -->  
                        <p id="email">
                            <span> {{$conta->email_usuario}} </span>
                        </p> 

                        <!-- Tipo de Acesso -->
                        <p id="tipoAcesso"> Tipo de acesso: 
                            <span> {{$conta->tipoUsuario}}</span>
                        </p> 
                    <!-- Fim dos Dados do Usuário -->

                    <!-- Menu -->
                    <div id="row-menu">
        
                        <hr>
                        <!-- Sair da Conta -->
                        <a href="/usuario/logout"><img src="/img/contas/minhaConta/exit_icon.png"/>Sair da Conta</a>
                    </div>
                    <!-- Fim do menu sidebar -->
                         
                </div>
            <!-- Fim do Sidebar esquerdo -->

            <!-- Conteúdo Principal -->
                <div id="content">

                    <!-- navbar (parte que fica acima do formulário) -->
                        <div id="navbar-a">

                            <h4>Minha Conta</h4>

                            <!-- navbar menor (onde fica o perfil e menu) -->
                                <nav class="navbar navbar-dark fixed-top" id="sidebar-right">
                                    
                                    <!--Imagem de Perfil-->
                                    @if(!empty($conta->fotoUsuario))
                            
                                        <img src="{{ asset('users/'. $conta->fotoUsuario) }}" alt="Foto do perfil" id="img-profile" onclick="window.location='/'">                                                                             

                                    
                                    @else

                                        <img src="/img/layouts/login-createAccount/user-Img.png" alt="Foto do perfil" id="img-profile">
                                    
                                    @endif
                                    <!-- botão que abre o menu lateral -->
                                        <button class="navbar-toggler" id="btn-hamburguer" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-preptec" aria-controls="menu-preptec" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    <!-- fim do botão que abre o menu lateral -->


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
                                                <div class="offcanvas-body" id="body-nav">
                                                    
                                                    <!-- animação -->
                                                        <div id="background-animation">

                                                            <!-- circulos da animação -->
                                                                <div class="circles" id="circle1"></div>
                                                
                                                                <div class="circles" id="circle2"></div>
                                                            
                                                                <div class="circles" id="circle3"></div>
                                                
                                                                <div class="circles" id="circle4"></div>                
                                                
                                                                <div class="circles" id="circle5"></div>
                                                
                                                                <div class="circles" id="circle6"></div>
                                                
                                                                <div class="circles" id="circle7"></div>
                                                
                                                                <div class="circles" id="circle8"></div>
                                                
                                                                <div class="circles" id="circle9"></div> 
                                                            <!-- fim das circulos -->

                                                            <!-- itens do menu -->
                                                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="menu-itens">

                                                                    <!-- home -->
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="nav-link" href="/">
                                                                            <img src="/img/layouts/navbar/iconesMenu/home_icon.png" id="icon-menu"/> &nbsp;
                                                                            Home
                                                                        </a>
                                                                    </li>

                                                                    <!-- área do estudante -->
                                                                    <li class="nav-item">
                                                                        @if(!empty($resultados))
                                                                        <a class="nav-link" id="nav-link" href="/areadoaluno"><img src="/img/layouts/navbar/iconesMenu/hat_icon.png" id="icon-menu"/> &nbsp;Área de Estudo</a>
                                                                        @else
                                                                        <a class="nav-link" id="nav-link" href="/simulado/realizar"><img src="/img/layouts/navbar/iconesMenu/hat_icon.png" id="icon-menu"/> &nbsp;Simulado</a>
                                                                        @endif
                                                                    </li>
                                                                    
                                                                    <!-- questionário vocacional -->
                                                                    <li class="nav-item">
                                                                  <a class="nav-link" id="nav-link" href="/questionario"><img src="/img/layouts/navbar/iconesMenu/lamp_icon.png" id="icon-menu"/> &nbsp;Questionário Vocacional</a>
                                                                    </li>

                                                                    <!-- informações do vestibulinho -->
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="nav-link" href="/vestibulinho">
                                                                            <img src="/img/layouts/navbar/iconesMenu/info_icon.png" id="icon-menu"/> &nbsp; Informações do Vestibulinho</a>
                                                                    </li>

                                                                    <!-- Minha Conta -->
                                                                    <li class="nav-item">                
                                                                        <a class="nav-link" id="nav-link" href="/minhaconta"><img src="/img/layouts/navbar/iconesMenu/perfil_icon.png" id="icon-menu"/> &nbsp; Minha Conta</a>
                                                                    </li>                            
                                                                </ul>    
                                                            <!-- fim do itens  -->     
                                                        </div>
                                                    <!-- fim da animação -->
                                                </div>
                                            <!-- fim do body -->
                                        </div>
                                    <!-- fim do menu -->
                                                    
                                                  
                                </nav>
                            <!-- fim da navbar menor-->
                        </div>
                    <!-- Fim da navbar -->

                    <div class="row" id="row-form">

                        <!-- formulário para alterar os dados do estudante -->
                            <form id="form" action="/usuario/editar/{{$conta->id_usuario}}" method="POST">
                                @csrf
                                @method('put')

                                <input type="text" value="{{$conta->id_usuario}}" hidden>
            
                                <h5>DADOS DA CONTA</h5>            
            
                                <!-- nome do usuário -->
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <input name="nome_usuario" type="text" class="form-control" id="inputUser" value="{{$conta->nome_usuario}}">

                                        <button type="submit" class="btn btn-primary" id="btn-user">
                                            <img src="/img/contas/minhaConta/pencil_icon.png" id="icon_pencil" alt="Editar">
                                        </button>
                                    </div>
                                </div>
                                <!-- fim do nome do usuário -->
                                    
                                <!-- email do usuário -->
                                <div class="row">
                                    <div class="col">
                                        <input name="email_usuario" type="email" class="form-control" id="inputEmail" value="{{$conta->email_usuario}}" readonly>
                                    </div>
                                </div>
                                <!-- fim do email do usuário -->
                                
                                <!-- senha do usuário -->
                                <div class="row">                               
                                    <div class="col d-flex align-items-center">
                                        <input name="senha_usuario" type="password" class="form-control" id="inputpassword" placeholder="*********" minlength="8" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&*!])[A-Za-z\d@#$%^&*!]+$">
                                        <button type="submit" class="btn btn-primary" id="btn-password">
                                            <img src="/img/contas/minhaConta/pencil_icon.png" id="icon_pencil" alt="Editar">
                                        </button>
                                    </div>
                                </div>
                                <!-- fim da senha do usuário -->

                            </form>
                        <!-- Fim do formulário -->

                        @if(Session::has('Sucesso'))
                            <div class="alert alert-success" style="width: 53vw; margin-bottom: 2vw; text-align: center;">{{Session::get('Sucesso')}}</div>
                        @endif

                        <!-- Parte Área do Aluno -->
                            <div class="col" id="col-areaAluno">

                                <div id="areaAluno">   
                                    <div class="col" id="col-texto">
                                        <h5>VEJA SEU PROGRESSO!</h5> 
                                    
                                        <p>Acesse a área do aluno e fique por dentro do seu crescimento pessoal:</p>                                                                                                           

                                        @if(!empty($resultados))

                                            <a href="/areadoaluno">Clique aqui para acessar a área do aluno</a>

                                        @else

                                            <a href="/simulado/realizar">Você ainda não possui simulado, realize um!</a>

                                        @endif
                                        
                                    </div>                 
                                    <div class="col" id="col-img">
                                        <img src="/img/contas/minhaConta/img_menino-estudante.png"/>
                                    </div>
                                </div>

                            </div>      
                        <!-- Fim da Parte Área do Aluno -->
                    </div> 

                    <!-- Parte exluir conta -->
                        <div class="row" id="row-excluirConta">

                            <h4>Excluir Conta</h4>
                            
                            <!-- texto do excluir conta -->
                            <div class="col" id="col-textoExcluirConta">                                
                                <p>Se vc excluir sua conta, todas as suas informações e dados associados serão removidos permanentemente. </p>
                            </div>
                            <!-- fim do texto do excluir conta -->

                            <!-- botão excluir conta -->
                            <div class="col" id="col-buttonExcluirConta"> 

                                <form action="/usuario/excluir/{{$conta->id_usuario}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="text" name="id_usuario" value="{{$conta->id_usuario}}" hidden>
                                    <button type="submit" class="btn btn-secondary">Excluir sua conta</button>
                                </form>
                            </div>                       
                        </div> 
                    <!-- Fim da parte exluir conta -->

                </div>
            <!-- Fim do Conteúdo Principal -->
        </div>
        <script src="/js/edit-perfil.js"></script>
    </body>
</html>