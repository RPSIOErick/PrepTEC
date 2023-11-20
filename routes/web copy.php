<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerUsuario;
use App\Http\Controllers\ControllerAdministrador;
use App\Http\Controllers\ControllerQuestionVoc;
use App\Http\Controllers\ControllerSimulado;
use App\Http\Controllers\ControllerQuestionario;
use App\Http\Controllers\ControllerAreaAluno;
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

Route::get('/', function () {
    return view('Home');
});

Route::get('/areadoaluno', [ControllerAreaAluno::class, 'VisualizarGraficos']);

Route::get('/cursos', function () {
    return view('CursosEtec');
});

Route::get('/materias', function () {
    return view('Materias');
});

Route::get('/nossamissao', function () {
    return view('NossaMissao');
});

Route::get('/simulado', [ControllerSimulado::class, 'VisualizarSimulado']);


Route::get('/questionariovocacional', function () {
    return view('TesteVocacional');
});

Route::get('/vestibulinho', function () {
    return view('VestibulinhoInfo');
});

// Admin Aluno

Route::get('/aluno/listar', [ControllerAdministrador::class, 'ListarEstudante']);

Route::get('/aluno/desativar', function () {
    return view('admin/gerenciarAluno/desativarAluno');
});

// Responder simulado
Route::post('/simulado/responder', [ControllerSimulado::class, 'responderSimulado']);

// Admin Simulado


// Admin Questionário Vocacional


// FUNÇÕES DO CRUD


// Usuário
Route::post('/usuario/salvar', [ControllerUsuario::class, 'CriarConta']);
Route::post('/usuario/minha_conta', [ControllerUsuario::class, 'Login'])->middleware('LoginExistente');
Route::get('/minhaconta', [ControllerUsuario::class, 'VisualizarConta']);
Route::get('/usuario/logout', [ControllerUsuario::class, 'Logout']);
Route::put('/usuario/editar/{id_usuario}', [ControllerUsuario::class, 'EditarConta']);
Route::delete('/usuario/excluir/{id_usuario}', [ControllerUsuario::class, 'ExcluirConta']);

//Questionário Vocacional

Route::get('/questionariovocacional/listar', [ControllerQuestionVoc::class, 'ListarQuestsVoc']);
Route::get('/questionariovocacional/pesquisar', [ControllerQuestionVoc::class, 'PesquisarQuestionarioVoc']);
Route::post('/questionario-vocacional/responder', [ControllerQuestionVoc::class, 'ResponderQuestsVoc']);

Route::get('/questionariovocacional/cadastrar', function () {
    $inteligencias = TipoInteligencia::query()->get();
    return view('admin/gerenciarquestionarioVocacional/cadastrarquestionarioVocacional', compact('inteligencias'));
});
Route::post('/quest/salvar', [ControllerQuestionVoc::class, 'CriarQuestionVoc']);
Route::get('/quest/editar/{id_pergunta}', [ControllerQuestionVoc::class, 'EditarQuestionVoc']);
Route::put('/atualizar/{id_pergunta}', [ControllerQuestionVoc::class, 'AtualizarQuest']);
Route::delete('/excluir/{id_pergunta}', [ControllerQuestionVoc::class, 'ExcluirQuestionVoc']);

// Realização do Questionário

Route::get('/questionario/realizar', [ControllerQuestionario::class, 'VisualizarQuestionario']);
Route::get('/questionario/resultado', [ControllerQuestionario::class,'VisualizarResultadoQuestionario']);


// Salvar Resposta Simulado (Estudante)
Route::post('/simulado/salvar_resposta', [ControllerSimulado::class, 'salvarSimulado']);


// Administrador - Estudante
Route::get('/estudante/editar/{id_usuario}', [ControllerAdministrador::class, 'EditarEstudante']);
Route::put('/estudante/atualizar/{id_usuario}', [ControllerAdministrador::class, 'AtualizarEstudante']);
Route::get('/estudante/pesquisar', [ControllerAdministrador::class, 'PesquisarEstudante']);

// Administrador - Simulado







//Admin Sistema




// Rotas CRUD

// Gerenciar Sistema
Route::get('/sistema', [ControllerAdministrador::class, 'ListarEstudanteGerenciar']);

// CRUD - Estudante
// Cadatrar
// Listar
// Editar
// Pesquisar

// CRUD - Questionario Vocacional
// Cadatrar
// Listar
// Editar
// Excluir
// Pesquisar






// CRUD - Simulado
// Cadatrar

    // Exibe a View
        Route::get('/simulado/cadastrar', function () {return view('admin/gerenciarSimulado/cadastrarSimulado');});

    // Faz a ação
        Route::post('/simulado/salvar', [ControllerAdministrador::class, 'SalvarSimulado']); // Route::post('/questoes_sim/salvar', [ControllerAdministrador::class, 'SalvarQuestoes']);

// Listar

        Route::get('/simulado/listar', [ControllerAdministrador::class, 'ListarSimulado']); // Route::get('/simulado/listar', [ControllerAdministrador::class, 'ListarQuestoesSimu']);

// Editar
    
    // Exibe a View
        Route::get('/simulado/editar/{id_quest}', [ControllerAdministrador::class, 'EditarSimulado']);

    // Faz a ação
        Route::put('/simulado/atualizar/{id_quest}', [ControllerAdministrador::class, 'AtualizarSimulado']);

// Excluir

        Route::delete('/simulado/excluir/{id_quest}', [ControllerAdministrador::class, 'ExcluirQuestoes'])->name('excluir_questao');

// Pesquisar

        Route::get('/simulado/pesquisar', [ControllerAdministrador::class, 'PesquisarQuestoes']);

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Route::get('/simulado/editar', function () {return view('admin/gerenciarSimulado/editarSimulado');});