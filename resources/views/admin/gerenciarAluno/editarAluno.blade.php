@extends('layouts.main-NavbarOnly')

@section('title', 'Editar Estudantes - PrepTEC')

@section('content')

<link rel="stylesheet" href="/css/admin/crud.css">
<!-- Container de Criação de Questões -->
    <div class="container-fluid">

        <!--Row-->
            <div class="row row-cols-1">

                <!--Coluna Titulo-->
                    <div class="col" id="d-CRUD-title-template">
                        <h1 id="txt-CRUD-title-template">Editar Usuario</h1>
                    </div>
                <!--Fim da Coluna Titulo-->
                
                <!--Formulario-->
                    <form action="/estudante/atualizar/{{$estudante->id_usuario}}" method="POST" id="d-CRUD-CU-col-template" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <!--Cabeçario do CRUD-->
                            <div class="col" id="d-CRUD-CU-col-header-template">

                                <!--Row-->
                                    <div class="row row-cols-2">

                                        <!--Titulo do CRUD-->
                                            <div class="col" id="d-CRUD-CU-col-header-title-template">
                                                <h2 id="txt-CRUD-CU-col-header-title-template">Dados do Estudante</h2>
                                            </div>
                                        <!--Fim do Titulo do CRUD-->

                                    </div>
                                <!--Fim do Row-->                            

                            </div>
                        <!--Fim do Cabeçario do CRUD-->

                        <!--Body CRUD-->
                            <div class="col" id="d-CRUD-CU-usu-col-body">

                                <!--Campos Foto, Id e Tipo Usuario-->
                                    <div class="col">
                                        <div class="row row-cols-2">

                                            <!--Campo Imagem-->                               
                                                <div class="col" id="d-CRUD-U-usu-colProfilePicture">
                                                    @if(!empty($estudante->fotoUsuario))
                                                        <img src="{{ asset('../users/'. $estudante->fotoUsuario) }}" alt="Foto do perfil" id="img-CRUD-U-usu-profilePicture">
                                                    @else
                                                        <img src="/img/contas/minhaConta/img-profile-default.png" alt="Foto do perfil" id="img-CRUD-U-usu-profilePicture">
                                                    @endif
                                                </div>
                                            <!--Fim do Campo Imagem-->

                                            <!--Campos ID e Tipo Usuario-->
                                                <div class="col" id="d-CRUD-U-usu-colIdAndTipoUsu">

                                                    <!--Id Usuario-->
                                                        <label id="txt-CRUD-CU-label-template">ID: {{$estudante->id_usuario}}</label>
                                                        <input type="text" name="id_usuario" value="{{$estudante->id_usuario}}" hidden required>
                                                    <!--Fim do Id Usuario-->
                                                        <br>
                                                    <!--Tipo Usuario-->
                                                        <label id="txt-CRUD-CU-label-template">Status da conta:</label><br>
                                                        
                                                        <select name="tipoUsuario" class="input-CRUD-CU-usu-dropdown-arrow" id="input-CRUD-CU-usu-dropdown">
                                                            <option value="{{$estudante->tipoUsuario}}" selected hidden> {{$estudante->tipoUsuario}} </option>
                                                            <option value="Estudante"> Estudante </option>
                                                            <option value="Suspenso"> Suspenso </option>
                                                            <option value="Desativado"> Desativado </option>
                                                            <option value="Admin"> Administrador (!) </option>
                                                        </select>

                                                        <div id="d-CRUD-CU-usu-iconCol"><ion-icon name="pencil-outline" class="d-template-center-vertAndHori"></ion-icon></div>
                                                    <!--Fim do Tipo Usuario-->

                                                    <!--Input Imagem-->
                                                        <input type="file" name="fotoUsuario" class="form-control" accept="image/*" id="input-imagem-user" value="{{$estudante->fotoUsuario}}">

                                                </div>
                                            <!--Fim dos Campos ID e Tipo Usuario-->
                                        </div>
                                    </div>
                                <!--Fim dos Campos Foto, Id e Tipo Usuario-->

                                <!--Campo Usuario-->
                                    <div class="col">
                                        <label id="txt-CRUD-CU-label-template">Usuario</label><br>
                                        <input id="input-CRUD-CU-shortInp-template" name="nome_usuario" value="{{$estudante->nome_usuario}}" required>
                                        <div id="d-CRUD-CU-usu-iconCol"><ion-icon name="pencil-outline" class="d-template-center-vertAndHori"></ion-icon></div>
                                    </div>
                                <!--Fim do Campo Usuario-->
                                    <br><br>
                                
                                <!--Campo Email-->
                                    <div class="col">
                                        <label id="txt-CRUD-CU-label-template">Email</label><br>
                                        <input id="input-CRUD-CU-shortInp-template" name="email_usuario" value="{{$estudante->email_usuario}}" readonly>
                                        <div id="d-CRUD-CU-usu-iconCol"><ion-icon name="ban-outline" class="d-template-center-vertAndHori"></ion-icon></div>
                                    </div>
                                <!--Fim do Campo Email-->
                                    <br><br>

                                <!--Botões-->
                                    <div class="col">
                                        <button id="btn-CRUD-CU-usu-Voltar" type="button" onclick="window.location='/estudante/listar'">Voltar</button>
                                        <button id="btn-CRUD-CU-usu-Salvar" type="submit">Salvar</button>
                                    </div>
                                <!--Fim dos Botões-->

                            </div>
                        <!--Fim do Body CRUD-->
                
                    </form>
                <!--Fim do Formulario-->

            </div>
        <!--Fim do Row-->

    </div>
<!-- Fim do Container de Criação de Questões -->


@endsection