@extends('layout')
@section('tituloPagina')
   Legendas - Página Principal
@endsection
@section('series')
    active
@endsection
    <!-- DIFERENTE (conteudo) ABAIXO -->
@section('conteudo')
    <h1>Series cadastradas:</h1>
    <ul class="list-group row ">
        @foreach($series as $series)
            <li class="list-group-item d-flex justify-content-between align-items-center " >
                {{$series->titulo}}
                <a href="#" target="_blank" class="badge badge-dark">Link do video</a>
                <form action="/series/excluir/{{$series->id}}" method="post" onsubmit="return confirm('Tem certeza?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-dark btn-sm ">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>

    <form method="post" action="/series/criar" >
        @csrf
        <div class="row mt-2">
            <div class="form-group col-sm">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" aria-describedby="emailHelp" name="titulo">
            </div>

            <div class="form-group col-sm">
                <label for="data">Quantidade de temporadas</label>
                <input type="number" class="form-control" id="data" name="qtd_temporadas">
            </div>
            <div class="form-group col-sm">
                <label for="data">Quantidade de episódios por temporada</label>
                <input type="number" class="form-control" id="data" name="ep_por_temporada">
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Cadastrar</button>
    </form>
@endsection
