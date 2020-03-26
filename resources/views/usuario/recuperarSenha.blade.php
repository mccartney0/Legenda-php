@extends('layout')

@section('tituloPagina')
  Legendas - Recuperar Senha
@endsection

@section('conteudo')

    @if(!empty($mensagem))
        <div class="alert alert-danger">
            {{ $mensagem }}
        </div>
    @endif

    <div class="ps-section--offer row">
        <div class="ps-column col">
            <div class="ps-home-contact">
                <div class="ps-home-contact__form">
                    <header>
                        <h3>Recuperar Senha</h3>
                    </header>
                    <article>
                        <form action="/login/RecuperarSenha" method="post">
                            @csrf
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="text" name="email" placeholder="Insira seu email" autofocus>
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Enviar" class="btn login_btn btn-dark">
                          </div>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
