@extends('layout')
@section('tituloPagina')
   Legendas - Página Principal
@endsection
@section('filmes')
    active
@endsection
    <!-- DIFERENTE (conteudo) ABAIXO -->
@section('conteudo')
    <h1>Filmes cadastrados:</h1>
    <ul class="list-group">
        @foreach($filmes as $filmes)
            <li class="list-group-item">{{$filmes->titulo}}

                <form action="/filmes/excluir/{{$filmes->id}}" method="post" onsubmit="return confirm('Tem certeza?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark btn-sm ">Excluir</button>
                </form>
                <a href="#" target="_blank">Link do video</a>
            </li>
        @endforeach
    </ul>

    <form method="post" action="/filmes/cadastro" style="border-top: 1px black solid; margin-top: 10px" >
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" aria-describedby="emailHelp" name="titulo">
        </div>
        <div class="form-group">
            <label for="data">Data de lançamento</label>
            <input type="date" class="form-control" id="data" name="data_lancamento">
        </div>
        <button type="submit" class="btn btn-dark">Cadastrar</button>
    </form>
@endsection
