@extends('layout')

@section('tituloPagina')
  Legendas - Login
@endsection
@section('acessoConta')
    active
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
                        <h3>Entrar</h3>
                    </header>
                    <article>

                        <form action="/login/Autenticacao" method="get">
                            @csrf
                          <div class="form-group">
                            <label for="usuario">Usuário</label>
                            <input class="form-control" id="usuario" type="text" name="login" placeholder="Nome de usuario" autofocus>
                          </div>
                          <div class="form-group">
                            <label for="senha">Senha</label>
                            <input class="form-control" id="senha" type="password" name="senha" placeholder="senha">
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Login" class="btn login_btn btn-dark">
                              <a class="badge badge-dark" href="/login/RecuperarSenha">Esqueceu sua senha?</a>
                          </div>
                        </form>
                    </article>
        </div>
      </div>
        </div>
           <div class="ps-column col">
               <div class="ps-home-contact">
                <div class="ps-home-contact__form">
                  <header>
                    <h3>Cadastre-se</h3>
                  </header>
                  <article>

                    <form method="post">
                        @csrf
                      <div class="form-group">
                          <label for="nome">Nome:</label>
                          <input type="text" id="nome" class="form-control" name="nome" placeholder="Insira seu nome" required/>
                      </div>
                        <div class="form-group">
                            <label for="login">Usuario:</label>
                            <input type="text" id="funcao" class="form-control" name="login" placeholder="Insira seu nome de usuario" required/>
                        </div>
                      <div class="form-group">
                            <label for="emailCriar">Email:</label>
                            <input type="email" id="emailCriar" class="form-control" name="email" placeholder="Insira seu email" required/>
                      </div>
                        <div class="form-group">
                            <label for="senhaCriar">Senha:</label>
                            <input type="password" id="senhaCriar" class="form-control password1" name="senha" placeholder="Insira sua senha" required/>
                      </div>
                        <div class="form-group">
                            <label for="confirm_senha">Confirmar senha:</label>
                            <input type="password"  id="confirm_senha" class="form-control password2" name="confirm_Senha" placeholder="Confirme sua senha" required/>
                      </div>
                        <div class="form-group">
                                <input type="submit" value="Criar conta" class="btn login_btn btn-dark">
                            </div>
                    </form>
                  </article>
           </div>
               </div>
           </div>
       </div>
@endsection
