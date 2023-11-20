<?php

namespace App\Http\Controllers;

use App\Models\Alternativas;
use App\Models\Questoes;
use App\Models\ResultSimu;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ControllerSimulado extends Controller
{

    /* Realizar Simulado (View) */
    public function listarQuestoesSimulado(){
        
        $quest_sim = Questoes::paginate(1);

        $total_quest = Questoes::count();

        $alter_sim = Alternativas::query()->get();

        return view ('questionarios.simulado.simulado', compact('quest_sim', 'total_quest', 'alter_sim'));

    }

    /* Guardar respostas do usuário */
    public function responderSimulado(Request $request){
        $acerto_usuario = 0; //Quantidade de acertos do usuário

        $chave_resposta = 'alternativas'; //chave para sessão

        //Cria sessao para salvar resposta anterior
        $respostas = $request->session()->get($chave_resposta, []);
        $respostas[] = $request->input('alternativa');

        // return dd($respostas);
        $request->session()->put('alternativas', $respostas);

        //Caso botão seja de avançar
        if ($request->input('action') == 'next') {
            $request->session()->put('ultima_resposta', $request->input('alternativa'));

            $next_page = $request->input('page') + 1; //avanca contador
            return redirect("/simulado/realizar/?page=$next_page"); //redireciona para proxima pagina
        }

        //Caso botão seja de voltar
        if ($request->input('action') == 'previous') {
            $next_page = $request->input('page') - 1; //retrocede contador
            
            array_pop($respostas);// Remover o último item
            // Atualizar a sessão com o array modificado
            $request->session()->put('alternativas', $respostas);

            return redirect("/simulado/realizar/?page=$next_page")->with('value-resposta', session()->get('ultima_resposta')); //redireciona para página anterior com última resposta
        }

        // foreach nas respostas do usuário
        foreach($respostas as $resposta){
            $alter_sim = Alternativas::where('id_alternativa', $resposta)->where('alter_true', 1)->get()->first();

            if($alter_sim){
                $acerto_usuario += 1; //soma das respostas corretas
            }
        }        

        
        // Calculo de Erros
        $total_quest = Questoes::count();

        // return $acerto_usuario;

        $erros_total = $total_quest - $acerto_usuario;

        // Calculo da porcentagem de acertos
        $porcentagem_acertos = ($acerto_usuario / $total_quest ) * 100;

        // Exclui a sessão de respostas aqui
        $request->session()->forget($chave_resposta);

        return $this->resultSimu($acerto_usuario, $erros_total, $porcentagem_acertos); //função com tela de resultado

    }

    /* Resultado do Simulado */
    public function resultSimu($acerto_usuario, $erros_total, $porcentagem_acertos){
        return view('questionarios.simulado.resultadoSimulado', compact('acerto_usuario', 'erros_total', 'porcentagem_acertos'));
    }
    
    /* Salvar Resultado */
    public function salvarSimulado(Request $request){

        $resultado = new ResultSimu();
        $resultado->id_usuario = $request->id_usuario;
        $resultado->id_simu = $request->id_simu;
        $resultado->qntd_acertos = $request->qntd_acertos;
        $resultado->data_conclusao = $request->data_conclusao;
        $resultado->save();

        return redirect('/areadoaluno');

    }

    /* Visualizar gráficos de estudante */
    public function visualizarGraficos()
    {

        $acertos = array();
        if (Session::has('loginId')) {
            $result_Semanal = ResultSimu::select('data_conclusao as data_rend', 'qntd_acertos as qntd_rend')
                ->take(7)
                ->orderBy('data_conclusao', 'asc')
                ->where('id_usuario', '=', Session::get('loginId'))
                ->get();

                

            $dados_Semanal = [['Data', '']];

            if ($result_Semanal->count() > 0) {
                foreach ($result_Semanal as $rendimento) {
                    $dados_Semanal[] = ['Dia ' . date('d', strtotime($rendimento->data_rend)), (float) $rendimento->qntd_rend];
                }
            }

            $result_Mensal = ResultSimu::select('data_conclusao as data_rend', 'qntd_acertos as qntd_rend')
                ->whereRaw('DAY(data_conclusao) % 2 != 0')
                ->take(30)
                ->orderBy('data_conclusao', 'asc')
                ->where('id_usuario', '=', Session::get('loginId'))
                ->get();

            $dados_Mensal = [['Data', '']];

            if ($result_Mensal->count() > 0) {
                foreach ($result_Mensal as $rendimento) {
                    $dados_Mensal[] = ['Dia ' . date('d', strtotime($rendimento->data_rend)), (float) $rendimento->qntd_rend];
                }
            }

            $simu_totais = ResultSimu::where('id_usuario', '=', Session::get('loginId'))->count();

            // $taxa_acertos = ResultSimu::select('qntd_acertos')
            // ->where('id_usuario', '=', Session::get('loginId')) / Questoes::count() * 100;

            $taxa_acertos = 0; // Valor padrão

            $alter_certas = ResultSimu::select('qntd_acertos')
                ->where('id_usuario', '=', Session::get('loginId'))
                ->first();

            if ($alter_certas) {
                $qntd_acertos = $alter_certas->qntd_acertos;
                $quest_totais = Questoes::count();
                
                $taxa_acertos = ($qntd_acertos / max(1, $quest_totais)) * 100;

            }

            $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();    

            return view('contas.areaAluno', compact('result_Semanal', 'dados_Semanal', 'result_Mensal', 'dados_Mensal', 'simu_totais', 'conta', 'taxa_acertos'));

        }
    }
    
}
