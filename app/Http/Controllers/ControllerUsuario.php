<?php

namespace App\Http\Controllers;

use App\Models\ResultSimu;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class ControllerUsuario extends Controller
{

    /* Login */
    public function fazerLogin(Request $request){

        $request->validate([
            'email_usuario' => 'required|email',
            'senha_usuario' => 'required'
        ], [
            'email_usuario.required' => 'O campo email é obrigatório.',
            'email_usuario.email' => 'O email fornecido não é válido.',
            'senha_usuario.required' => 'O campo senha é obrigatório.'
        ]);

        $user = Usuario::where('email_usuario', '=', $request->email_usuario)->first();

        if($user){
            if(Hash::check($request->senha_usuario, $user->senha_usuario)){
                $request->session()->put('loginId', $user->id_usuario);
                $conta = $user;

                if($user->tipoUsuario == "Estudante"){

                    return view('contas.minhaConta-Estudante', ['conta' => $conta]);

                }
                else if($user->tipoUsuario == "Admin"){

                    return view('contas.minhaConta-Adm', compact('conta'));

                }
                
            }else{
                return redirect('/#popup-log-template-bg')->with('Falha', 'Senha incorreta...');
            }
        }else{
            return redirect('/#popup-log-template-bg')->with('Falha', 'E-mail incorreto...');
        }

        if(Session::has('loginId')){

            $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

        }
        
        return view('minhaconta', compact('conta'));

    }

    /* Cadastro */
    public function criarConta(Request $request){
        
        try {
            // Validação dos dados: nome, email e senha
            $request->validate([
                'nome_usuario' => 'required',
                'email_usuario' => 'required|email|unique:usuario',
                'senha_usuario' => [
                    'required',
                    'regex:/^(?=.*[A-Z])(?=.*[!@#$%^&*]).*$/',
                ],
                'fotoUsuario' => 'nullable|image|not_in:gif,webp|dimensions:min_width=500,min_height=500'
            ], [
                'nome_usuario.required' => 'O campo nome é obrigatório.',
                'email_usuario.required' => 'O campo email é obrigatório.',
                'email_usuario.email' => 'O email fornecido não é válido.',
                'email_usuario.unique' => 'O email já está em uso.',
                'senha_usuario.required' => 'O campo senha é obrigatório.',
                'senha_usuario.regex' => 'A senha deve conter pelo menos 8 caracteres, uma letra maiúscula e um caractere especial.',
                'fotoUsuario.image' => 'O arquivo de imagem não é válido.',
                'fotoUsuario.not_in' => 'A extensão .gif não é permitida.',
                'fotoUsuario.dimensions' => 'A imagem deve ter pelo menos 500x500 pixels.',
            ]);

        // Instância do Model "Usuário", requisitando todos os dados
        $user = new Usuario();
        $user->nome_usuario = $request->nome_usuario;
        $user->email_usuario = $request->email_usuario;
        $user->senha_usuario = Hash::make($request->senha_usuario);
        $user->tipoUsuario = 'Estudante';

        // Nome da foto que foi enviada pelo usuário, requisitando o arquivo "fotoUsuario"
        $nomeFoto = $user->fotoUsuario = $request->file('fotoUsuario')?->getClientOriginalName();

        if ($nomeFoto){
            // Caminho para salvar a imagem
            $path = public_path('../public/users');
            // Salvando a imagem no diretório público "users"
            $request->file('fotoUsuario')->move($path, $nomeFoto);

        }

        // Salvando todos os dados requisitados
        $res = $user->save();

        if ($res) {
            $conta = $user;
            $request->session()->put('loginId', $conta->id_usuario);

            if ($conta->tipoUsuario == "Estudante") {
                return view('contas.minhaConta-Estudante', ['conta' => $conta]);
            } else if ($conta->tipoUsuario == "Admin") {
                return view('contas.minhaConta-Adm', compact('conta'));
            }
        } 

        } catch (\Exception $e) {
            // Redirecione para /vestibulinho em caso de falha na validação
            return redirect('/#popup-CA-template-bg')->with('Falha', 'A conta não foi criada, verifique possíveis erros.');
            
            // return redirect('/#popup-CA-template-bg')->with('Falha', 'A conta não foi criada, verifique possíveis erros. <br> Senha com caracteres especiais, letra maiúscula e número (!)');
        }
                
    }

    /* Visualizar Conta (View) */
    public function visualizarConta(Request $request){

        // return view('minhaconta', compact('conta'));

        $conta = array();
        if(Session::has('loginId')){

            $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

            if($conta->tipoUsuario == "Estudante"){

                return view('contas.minhaConta-Estudante', ['conta' => $conta]);

            }
            else if($conta->tipoUsuario == "Admin"){

                return view('contas.minhaConta-Adm', compact('conta'));

            }
        }   

    }

    /* Logout */
    public function Logout(){

        if(Session::has('loginId')){
            
            Session::pull('loginId');
            return redirect('/');
        }
        
    }

    public function EditarConta(Request $req, $id_usuario){

        $usuario = Usuario::findOrFail($id_usuario);
        $usuario->nome_usuario = $req->nome_usuario;
        $usuario->email_usuario = $req->email_usuario;

        try{

            $req->validate([
                'senha_usuario' => [
                    'required',
                    'regex:/^(?=.*[A-Z])(?=.*[!@#$%^&*]).*$/',
                ],
            ], [
                'senha_usuario.regex' => 'A senha deve conter pelo menos 8 caracteres, uma letra maiúscula e um caractere especial.',
            ]);

            if (!empty($req->senha_usuario)) {
                $usuario->senha_usuario = Hash::make($req->senha_usuario);
            }

            $usuario->save();

            return redirect('/minhaconta')->with('Sucesso', 'A conta foi editada com êxito!');

        } catch (\Exception $e) {
            
            return redirect('/minhaconta')->with('Falha', 'A senha não foi editada, tente novamente...');
            
        }

    }


    /* Editar Imagem de Perfil */
    public function editarFotoPerfil(Request $req, $id_usuario)
    {

        $usuario = Usuario::findOrFail($id_usuario);

        if ($req->hasFile('fotoUsuario')) {
            $path = public_path('../public/users');

            $nomeFoto = $req->file('fotoUsuario')?->getClientOriginalName();

            $req->file('fotoUsuario')->move($path, $nomeFoto);

            $usuario->fotoUsuario = $nomeFoto;

            $usuario->save();

            return redirect('/minhaconta')->with('Sucesso', 'A conta foi editada com êxito!');
        }

    }

    /* Excluir Conta */
    public function ExcluirConta(Request $req, $id_usuario){

        $usuario = Usuario::query()->findOrFail($id_usuario);

        if ($usuario) {
            ResultSimu::where('id_usuario', $usuario->id_usuario)->delete();

            $usuario->delete();
        }

        $usuario->delete();

        return redirect('/');

    }
    
}
