<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerUsuario;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerSimulado;
use App\Http\Controllers\ControllerQuestionarioVoc;
use App\Models\TipoInteligencia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home

    Route::get('/', function () {return view('home');});

// Contas

    // Cadastrar

        Route::post('/usuario/salvar', [ControllerUsuario::class, 'criarConta']);

    // Fim do Cadastrar

    // Login
        
        // Executa o Login e Redireciona ao Minha Conta
            Route::post('/usuario/minha_conta', [ControllerUsuario::class, 'fazerLogin'])->middleware('LoginExistente');

        // Logout
            Route::get('/usuario/logout', [ControllerUsuario::class, 'logout']);

    // Fim do Login

    // Minha Conta
        Route::get('/minhaconta', [ControllerUsuario::class, 'visualizarConta']);
        
        // Editar - Dados
            Route::put('/usuario/editar/{id_usuario}', [ControllerUsuario::class, 'editarConta']);

        // Editar - Foto
            Route::put('/usuario/editar-perfil/{id_usuario}', [ControllerUsuario::class, 'editarFotoPerfil']);

        // Excluir
            Route::delete('/usuario/excluir/{id_usuario}', [ControllerUsuario::class, 'excluirConta']);
    
    // Fim do Minha Conta

// Fim das Contas


// Explicações

    // Explição Questionario Vocacional

    Route::get('/questionario', function () {return view('explicacoes.questionarioExplicacao');});

    // Explicação ETEC

        Route::get('/vestibulinho', function () {return view('explicacoes.etecExplicacao');});

// Fim das Explicações

// Questionarios - Geral

    // Questionario Vocacional

        // Mostra as Perguntas (View)
            Route::get('/questionario/realizar', [ControllerQuestionarioVoc::class, 'listarQuestoesQuestionario']);

        // Salva as respostas do usuario continuamente
            Route::post('/questionario-vocacional/responder', [ControllerQuestionarioVoc::class, 'responderQuestoesQuestionario']);

        // Mostra o Resultado
            Route::get('/questionario/resultado', [ControllerQuestionarioVoc::class,'visualizarResultadoQuestionario']);

    // Fim do Questionario Vocacional

    // Simulado

        // Mostra as Perguntas (View)
            Route::get('/simulado/realizar', [ControllerSimulado::class, 'listarQuestoesSimulado']);

        // Salva as respostas do usuario continuamente
            Route::post('/simulado/responder', [ControllerSimulado::class, 'responderSimulado']);

        // Salva as respostas finais (todas)    
            Route::post('/simulado/salvar-resposta', [ControllerSimulado::class, 'salvarSimulado']);

        // Mostrar Grafico no area do aluno
            Route::get('/areadoaluno', [ControllerSimulado::class, 'visualizarGraficos']);

    // Fim do Simulado

// Fim dos Questionarios

// Rotas CRUD

    // Gerenciar Sistema

        Route::get('/sistema', [ControllerAdmin::class, 'listarEstudanteGerenciar']);

    // CRUD - Estudante

        // Listar

            Route::get('/estudante/listar', [ControllerAdmin::class, 'listarEstudante']);

        // Editar

            // Exibe a View
                Route::get('/estudante/editar/{id_usuario}', [ControllerAdmin::class, 'editarEstudante']);
            
            // Faz a ação
                Route::put('/estudante/atualizar/{id_usuario}', [ControllerAdmin::class, 'atualizarEstudante']);

        // Pesquisar

            Route::get('/estudante/pesquisar', [ControllerAdmin::class, 'pesquisarEstudante']); 

    // Fim do CRUD - Estudante

    // CRUD - Questionario Vocacional

        // Cadatrar

            // Exibe a View e Puxa os tipos de inteligencia
                Route::get('/questionario/cadastrar', function () {$inteligencias = TipoInteligencia::query()->get();
                    return view('admin.gerenciarQuestionarioVocacional.cadastrarQuestionarioVocacional', compact('inteligencias'));});

            // Faz a ação
                Route::post('/questionario/salvar', [ControllerAdmin::class, 'criarQuestionario']);

        // Listar

            Route::get('/questionario/listar', [ControllerAdmin::class, 'listarQuestionario']);

        // Editar

            // Exibe a View
                Route::get('/questionario/editar/{id_pergunta}', [ControllerAdmin::class, 'editarQuestionario']);

            // Faz a ação
                Route::put('/questionario/atualizar/{id_pergunta}', [ControllerAdmin::class, 'atualizarQuestionario']);

        // Excluir

            Route::delete('questionario/excluir/{id_pergunta}', [ControllerAdmin::class, 'excluirQuestionario']);

        // Pesquisar

            Route::get('/questionario/pesquisar', [ControllerAdmin::class, 'pesquisarQuestionario']);

    // Fim do CRUD - Questionario Vocacional

    // CRUD - Simulado

        // Cadatrar

            // Exibe a View
                Route::get('/simulado/cadastrar', function () {return view('admin/gerenciarSimulado/cadastrarSimulado');});

            // Faz a ação
                Route::post('/simulado/salvar', [ControllerAdmin::class, 'salvarSimu']); 

        // Listar

            Route::get('/simulado/listar', [ControllerAdmin::class, 'listarSimu']);

        // Editar
            
            // Exibe a View
                Route::get('/simulado/editar/{id_quest}', [ControllerAdmin::class, 'editarSimu']);

            // Faz a ação
                Route::put('/simulado/atualizar/{id_quest}', [ControllerAdmin::class, 'atualizarSimu']);

        // Excluir

            Route::delete('/simulado/excluir/{id_quest}', [ControllerAdmin::class, 'excluirSimu'])->name('excluir_questao');

        // Pesquisar

            Route::get('/simulado/pesquisar', [ControllerAdmin::class, 'pesquisarSimu']);

    // Fim do CRUD - Simulado   

// Fim das Rotas CRUD

// Route::get('/simulado/editar', function () {return view('admin/gerenciarSimulado/editarSimulado');});