@extends('layout')

@section('tituloPagina')
  Legendas - Dados do usuario
@endsection
@section('informacoes')
    active
@endsection
@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-danger">
            {{ $mensagem }}
        </div>
    @endif
    <label for="nome">Nome: {{session()->get('nome')}}</label><br>
    <label for="login">Login: {{session()->get('login')}}</label><br>
    <label for="email">Email: {{session()->get('email')}}</label>

    @if(!empty($mensagem))
        <div class="alert alert-danger">
            {{ $mensagem }}
        </div>
    @endif
    <form action="/login/AlterarSenha" method="post">
        @csrf
        <div class="form-group ">
            <label for="">Alterar Senha</label>
            <div class="row">
                <input type="password" class="form-control col" name="senha" placeholder="Insira a nova senha" required>
                <input type="password" class="form-control col" name="confirm_senha" placeholder="Insira novamente"  required>
            </div>

        </div>

        <input type="submit" class="btn btn-dark btn-sm" value="Alterar">
    </form>
@endsection
