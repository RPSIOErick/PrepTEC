<?php

namespace App\Http\Controllers;

use App\Models\PerguntasTestVoc;
use App\Models\TipoInteligencia;
use Illuminate\Http\Request;

class ControllerQuestionarioVoc extends Controller
{
    
    /* Realizar o Simulado (View) */
    public function listarQuestoesQuestionario(Request $request){
        
        $quest_voc = PerguntasTestVoc::paginate(1);
        $total_perg = PerguntasTestVoc::count();


        return view ('questionarios.questionarioVocacional.questionario', compact('quest_voc', 'total_perg'));

    }

    /* Guardar respostas do usuário */
    public function responderQuestoesQuestionario(Request $request){
        $pergunta = PerguntasTestVoc::where('id_pergunta', $request->id_pergunta)->first();

        $tipo_inteligencia = TipoInteligencia::where('id_TipoInteligencia', $pergunta->id_TipoInteligencia)->first();
        $resposta_user = $request->opcao;

        // Defina o nome da sessão com base no tipo de inteligência
        $nome_sessao = 'media_inteligencia_' . $tipo_inteligencia;

        // Inicialize a média e o contador de respostas na sessão se ainda não estiverem definidos
        if (!session()->has($nome_sessao . '_soma')) {
            session([$nome_sessao . '_soma' => 0, $nome_sessao . '_contador' => 0]);
        }

        // Obtenha a soma e o contador de respostas da sessão
        $soma_inteligencia = session($nome_sessao . '_soma');
        $contador_respostas = session($nome_sessao . '_contador');

        // Adicione a pontuação da resposta do usuário à soma atual da inteligência
        $soma_inteligencia += $resposta_user;

        // Atualize o contador de respostas
        $contador_respostas++;

        // Calcule a nova média da inteligência
        $media_inteligencia = $soma_inteligencia / $contador_respostas;

        // Atualize a soma e o contador de respostas na sessão
        session([$nome_sessao . '_soma' => $soma_inteligencia, $nome_sessao . '_contador' => $contador_respostas]);

        // A variável $media_inteligencia agora contém a média atual


        //Caso botão seja de avançar
        if ($request->input('action') == 'next') {
            $request->session()->put('ultima_resposta', $request->input('alternativa'));

            $next_page = $request->input('page') + 1; //avanca contador
            return redirect("/questionario/realizar?page=$next_page"); //redireciona para proxima pagina
        }

        //Caso botão seja de voltar
        if ($request->input('action') == 'previous') {
            $next_page = $request->input('page') - 1; // Retrocede o contador
        
            // Certifique-se de que $respostas seja um array antes de usar array_pop
            if (is_array($resposta_user)) {
                array_pop($resposta_user); // Remove o último item
            } else {
                $resposta_user = []; // Inicializa como um array vazio se for null
            }
        
            // Atualizar a sessão com o array modificado
            $request->session()->put('alternativas', $resposta_user);
        
            return redirect("/questionario/realizar?page=$next_page")->with('value-resposta', session()->get('ultima_resposta')); // Redireciona para a página anterior com a última resposta
        }
        

        // Recupera todas as chaves de sessão
        $chaves_sessao = array_keys(session()->all());

        // Filtra as chaves para encontrar aquelas que começam com 'media_inteligencia_'
        $chaves_inteligencia = array_filter($chaves_sessao, function ($chave) {
            return strpos($chave, 'media_inteligencia_') === 0;
        });

        $maiorMedia = null;
        $inteligenciaComMaiorMedia = '';
        
        // Percorre as chaves e encontra a inteligência com a maior média
        foreach ($chaves_inteligencia as $chave) {
            $tipo_inteligencia = str_replace('media_inteligencia_', '', $chave);
            $media_inteligencia = session($chave);
        
            // Faça algo com $tipo_inteligencia e $media_inteligencia
            // echo "Tipo de inteligência: $tipo_inteligencia, Média: $media_inteligencia <br>";
        
            // Verifica se a média atual é maior que a maior média encontrada até agora
            if ($maiorMedia === null || $media_inteligencia > $maiorMedia) {
                $maiorMedia = $media_inteligencia;
                $inteligenciaComMaiorMedia = $tipo_inteligencia;
            }

            
            session()->forget($chave);
        }

        return $this->visualizarResultadoQuestionario($this->extrairNomeInteligencia($inteligenciaComMaiorMedia));
    }

    /* Extração do resultado */
    public function extrairNomeInteligencia($chave) {
        // Procura pelo padrão de "nome_inteligencia" dentro da chave
        if (preg_match('/"nome_inteligencia":"([^"]+)"/', $chave, $matches)) {
            $texto = json_decode('"' . $matches[1] . '"', true, 512, JSON_UNESCAPED_UNICODE);
            return $texto;
        }
    
        // Se não conseguir extrair, retorna a própria chave
        return $chave;
    }

    /* Resultado do Questionário (View) */
    public function visualizarResultadoQuestionario($maior_inteligencia){

        $resultado = $maior_inteligencia;
        return view('questionarios.questionarioVocacional.resultadoQuestionario', compact('resultado'));

    }

}
