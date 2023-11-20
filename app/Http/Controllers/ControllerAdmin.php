<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Questoes;
use App\Models\Alternativas;
use App\Models\PerguntasTestVoc;
use App\Models\TipoInteligencia;
use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
  
    /*Estudante*/

        /*Listar*/
            public function listarEstudante()
            {
                $Estudantes = Usuario::where('tipoUsuario', 'Estudante')
                ->orWhere('tipoUsuario', 'Suspenso')
                ->orWhere('tipoUsuario', 'Desativado')
                ->paginate(5);
        
                return view('admin.gerenciarAluno.listarAluno', compact('Estudantes'));
            }
            
        /*Listar Gerenciar*/
            public function listarEstudanteGerenciar()
            {
                $Estudantes = Usuario::where('tipoUsuario', 'Estudante')
                ->orWhere('tipoUsuario', 'Suspenso')
                ->orWhere('tipoUsuario', 'Desativado')
                ->paginate(5);
        
                return view('admin.gerenciarSistema', compact('Estudantes'));
            }

        /*Editar*/

            /*Mostra A View*/
                public function editarEstudante($id)
                {
                    $estudante = Usuario::query()->findOrFail($id);
                    return view ('admin.gerenciarAluno.editarAluno', compact('estudante'));
                }
        
            /*Faz a açao*/
                public function atualizarEstudante(Request $req, $id_estudante)
                {
                    $estudante = Usuario::query()->findOrFail($id_estudante);
                    $estudante->nome_usuario = $req->nome_usuario;
                    $estudante->email_usuario = $req->email_usuario;
                    $estudante->tipoUsuario = $req->tipoUsuario;

                    if ($req->hasFile('fotoUsuario')) {
                        $nomeFoto = $req->file('fotoUsuario')->getClientOriginalName();
                        $req->file('fotoUsuario')->storeAs('public/users/', $nomeFoto);
            
                        $estudante->fotoUsuario = $nomeFoto;
                    }
                    $estudante->save();
                    return redirect('/estudante/listar');
                }

    /*Fim do Estudante*/

    
    /* Simulado */

        // OBS.: As ações das questões também envolvem alternativas...

        /* Cadastrar Questões do Simulado */
        public function salvarSimu(Request $req)
        {
            $questao = new Questoes();
            $questao->id_simu = 1;
            $questao->txt_quest = $req->txt_quest;
            $questao->txt_perg = $req->txt_perg;
    
            $questao->save();
    
            if ($questao) {
    
                $txt_alter = $req->input('txt_alter');
                $alter_true = $req->input('alter_true');
                $cont = count($txt_alter);
    
                for ($i = 0; $i < $cont; $i++) {
                    $alternativas = new Alternativas();
                    $alternativas->id_quest = $questao->id_quest;
                    $alternativas->txt_alter = $txt_alter[$i];
    
                    if ($req->input('alter_true') == $i) {
                        $alternativas->alter_true = 1;
                    } else {
                        $alternativas->alter_true = 0;
                    }
    
                    $alternativas->save();
                }
            
                return redirect('/simulado/listar');
            }
            else
            {
                return redirect('/simulado/cadastar')->with('Erro', 'Não foi possível salvar a questão...');
            }
            
        }

        /* Listar Questões do Simulado */
        public function listarSimu(){

            $quests = Questoes::all();
    
            if($quests->isEmpty()){
    
                return view('admin.gerenciarSimulado.cadastrarSimulado');
    
            } else {
    
                $quests = Questoes::paginate(5);
                return view('admin.gerenciarSimulado.listarSimulado', compact('quests'));
    
            }
    
        }

        /* Editar Questões do Simulado */

        /* Mostra a View */
            public function editarSimu($id){

                $quest = Questoes::query()->findOrFail($id);
        
                $alternativas = Alternativas::where('id_quest', $quest->id_quest)->get();
        
                return view ('admin.gerenciarSimulado.editarSimulado', compact('quest', 'alternativas'));
        
            }

        /* Faz a ação */
        public function atualizarSimu(Request $req)
        {
            $questao = Questoes::where('id_quest', $req->id_quest)->first();
    
            //caso ache questão
            if ($questao) {
                $questao->id_simu = 1;
                $questao->txt_quest = $req->txt_quest;
                $questao->txt_perg = $req->txt_perg;
    
                $questao->save(); //salva questão
    
                $alternativa_question = Alternativas::where('id_quest', $questao->id_quest)->get();//Resposta da questão escolhida
                $total_questions = Alternativas::all()->count();//Questões do quiz escolhido
    
                // Resposta do usuário
                $user_questions = $req->input('alternativas');
    
                //percorre todas as respostas da pergunta
                foreach ($req->input('alternativas') as $answerData) {
    
                    //caso a resposta já exista no banco
                    if(isset($answerData['id_alternativa']) && $answerData['id_alternativa']){
    
                        //seleciona resposta no banco para atualizar
                        $update_answer = Alternativas::where('id_alternativa', $answerData['id_alternativa'])->first();
    
                        //atualiza resposta
                        $update_answer->update([
                            'txt_alter' => $answerData['text_alternativas'],
                            'alter_true' => isset($answerData['alternativas_certa']),
                        ]);
    
                    }
                }
    
                return redirect('/simulado/listar')->with('success', 'Questão atualizada com sucesso!');
            }
    
        }

        /* Excluir Questões do Simulado */
        public function excluirSimu($id_quest)
        {

            $questao = Questoes::find($id_quest);

            if ($questao) {
                // Exclua as alternativas relacionadas
                Alternativas::where('id_quest', $questao->id_quest)->delete();

                // Agora exclua a questão
                $questao->delete();


            }

            return redirect('/simulado/listar');

        }  

    /* Fim do Simulado */

    /* Questionário Vocacional */

        /* Cadastrar */
        public function criarQuestionario(Request $req){

            // Requisitando todas os dados
            $quest = PerguntasTestVoc::query()->create($req->all());
    
            if($quest){
    
                return redirect('/questionario/listar');
    
            }else{
                return back()->with('Falha', 'Falha ao salvar...');
            }
        
        }

        /* Listar */
        public function listarQuestionario(){

            $quests = PerguntasTestVoc::all();
    
            $inteligencias = TipoInteligencia::all(); 
    
            if($quests->isEmpty()){
    
                return view('admin.gerenciarQuestionarioVocacional.cadastrarQuestionarioVocacional', compact('inteligencias'));
    
            } else {
    
                $quests = PerguntasTestVoc::paginate(5);
                return view('admin.gerenciarQuestionarioVocacional.listarQuestionarioVocacional', compact('quests', 'inteligencias'));
    
            }
    
        }
        
        /* Editar */

            /* Mostra a View */
            public function editarQuestionario($id){

                $quest = PerguntasTestVoc::query()->findOrFail($id);
        
                $tipoInteligencia = TipoInteligencia::find($quest->id_TipoInteligencia);
        
                $inteligencias = TipoInteligencia::all(); 
        
                return view ('admin.gerenciarQuestionarioVocacional.editarQuestionarioVocacional', compact('quest', 'tipoInteligencia', 'inteligencias'));
        
            }

            /* Faz a ação */
            public function atualizarQuestionario(Request $req, $id_pergunta){

                $quest = PerguntasTestVoc::query()->findOrFail($id_pergunta);
        
                $quest->id_TipoInteligencia = $req->id_TipoInteligencia;
                $quest->txt_perg = $req->txt_perg;
                $quest->save();
        
                return redirect('/questionario/listar');
        
            }

        /* Excluir */
        public function excluirQuestionario($id_pergunta)
        {

            $quest = PerguntasTestVoc::query()->findOrFail($id_pergunta);

            $quest->delete();

            return back();

        }

    /* Fim do Questionário Vocacional */

    /* Pesquisas */

        /* Pesquisa - Estudante */
        public function pesquisarEstudante(Request $req){
            $query = $req->input('query');
        
            // Lista de tipos de usuário permitidos
            $tiposUsuariosPermitidos = ['Estudante', 'Suspenso', 'Desativado'];
        
            // Execute a pesquisa no banco de dados usando o Eloquent
            $resultados = Usuario::where('nome_usuario', 'like', '%' . $query . '%')
                                ->whereIn('tipoUsuario', $tiposUsuariosPermitidos) // Filtra por tipos de usuário permitidos
                                ->paginate(5);
        
            return view('admin.gerenciarAluno.pesquisaAluno', ['resultadoAluno' => $resultados, 'query' => $query]);
        }

        /* Pesquisa - Questões do Simulado */
        public function pesquisarSimu(Request $req){

            $query = $req->input('query');
            // Execute a pesquisa no banco de dados usando o Eloquent
            $resultados = Questoes::where('txt_quest', 'like', '%' . $query . '%')->paginate(5);
            return view('admin.gerenciarSimulado.pesquisaSimulado', ['resultadoSimulado' => $resultados, 'query' => $query]);
    
        }

        /* Pesquisa - Perguntas do Questionário Vocacional */
        public function pesquisarQuestionario(Request $req){

            $query = $req->input('query');
            // Execute a pesquisa no banco de dados usando o Eloquent
            $resultados = PerguntasTestVoc::where('txt_perg', 'like', '%' . $query . '%')->paginate(5);
            return view('admin.gerenciarQuestionarioVocacional.pesquisaQuestionarioVocacional', ['resultadoQuestionarioVocacional' => $resultados, 'query' => $query]);
    
        }
    
    /* Fim das Pesquisas */
    

}
