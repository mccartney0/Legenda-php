@extends('layout')

@section('tituloPagina')
  Legendas - Recuperar senha
@endsection

@section('conteudo')
    <h1>Recuperar Senha</h1>
    <form action="">
        <label for="">Insira seu email: </label>
        <input type="text" name="email">
        <input type="submit" value="Enviar">
    </form>
@endsection
