<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Email;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $mensagem = $request->session()->get('mensagem');

        return view('usuario.login', compact('mensagem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create(Request $request)
    {
        $usuario = new Usuario();
        $senha = $request->senha;
        $confirm_senha = $request->confirm_Senha;
        $nome = $request->nome;
        $email = $request->email;
        $login = $request->login;

        $usuario->senha = $senha;
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->login = $login;

        $confirmEmail = Usuario::query()->where('email','=', $email)->first();
        $confirmLogin = Usuario::query()->where('login', '=', $login)->first();

        if($senha === $confirm_senha){

            if($confirmEmail == true) {
                return "Email já cadastrado!";
            } else if ($confirmLogin == true){
                return "Usuario já cadastrado!";
            } else{
                $envioEmail = new EmailController();
                $envioEmail->enviar('mail.confirmacaoEmail', ['nome' => $nome, 'email' => $email, 'senha'=>$senha], $email);

                $usuario->save();
                return view('index', compact('nome'));
            }
        }
        return "Senhas não conferem!";
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return string
     */
    public function show(Request $request)
    {
        $login = $request->login;
        $senha = $request->senha;

        $conf_login = Usuario::query()->where('login','=',$login)->first();
        $conf_senha = Usuario::query()->where('senha','=',$senha)->first();

        if($conf_login != null && $conf_senha != null){
            session(['nome' => $conf_login["nome"], 'id' => $conf_login['id'], 'email'=>$conf_login['email'], 'login'=>$conf_login['login']]);
            return view('index');
        }
        $request->session()
            ->flash(
                'mensagem',
                "Login incorreto!"
            );

        return redirect()->route('login');
    }

    public function recuperarSenha(Request $request, EmailController $emailResponse){
        $email = $request->email;

        $confirmEmail = Usuario::query()->where('email','=', $email)->first();
        if($confirmEmail == true){
            $senha = rand();

            DB::table('usuarios')
                ->where('email', $email)
                ->update(['senha' => $senha]);

            $emailResponse->enviar('mail.esqueciSenhaEmail', ['email' => $email, 'senha'=>$senha], $email);
            $request->session()
                ->flash(
                    'mensagem',
                    "Email Enviado!"
                );
            return redirect()->route('login');
        }

        $request->session()
            ->flash(
                'mensagem',
                "Email não cadastrado!"
            );
        return redirect()->route('recuperarSenha');

    }

    public function informacoes(Request $request){
        $mensagem = $request->session()->get('mensagem');
        return view('usuario.informacoesUsuario', compact('mensagem'));
    }

    public function sair(){
       session()->flush();
       return redirect()->route('index');
    }

    public function alterarSenha(Request $request){
        $senha = $request->senha;
        $confirm_senha = $request->confirm_senha;

        if($senha != $confirm_senha){
            $request->session()->flash(
                'mensagem',
                'Senhas diferentes!'
            );
            return redirect()->route('informacoes');
        }

        DB::table('usuarios')
            ->where('id', session()->get('id'))
            ->update(['senha' => $senha]);
        return redirect()->route('informacoes');
    }

}
