@extends('../master')

@section('main')
  <header class="header-login row">
     <nav class="cont-logo col-lg-7 col-md-6">
       <img src="img/logo-verde-g.png" alt="">
       <h1 class="titulo"><a href="/home">Booky</a></h1>
      </nav>
     <p class="col-lg-5 col-md-6">¿Estás registrado? <a href="/login"> Ingresa</a></p>
  </header>
<div class="container">
    <div class="row cont-form-reg">
        <div class="col-sm-12 panel-cont">
            <div class="panel panel-default offset-lg-6">
                <div class="panel-body">
                    <form class="form-horizontal form-login col-md-12" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <h2>Crea una cuenta</h2>
                        <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-form-label d-none d-md-block"><i class="fas fa-user"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0 ml-2">
                                <input id="name" type="text" class="form-control input-register" name="name" value="{{ old('name') }}" placeholder="ingresa tu nombre" required autofocus>

                                @if ($errors->has('name'))
                                  <p>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-form-label d-none d-md-block"><i class="far fa-envelope-open"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0 ml-2">
                                <input id="email" type="email" class="form-control input-register" name="email" value="{{ old('email') }}" placeholder="ingresa tu email" required>

                                @if ($errors->has('email'))
                                  <p>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-form-label d-none d-md-block"><i class="fas fa-lock"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0 ml-2">
                                <input id="password" type="password" class="form-control input-register" name="password" placeholder="ingresa tu contraseña"required>

                                @if ($errors->has('password'))
                                  <p>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                  </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-form-label d-none d-md-block"><i class="fas fa-lock"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0 ml-2">
                                <input id="password-confirm" type="password" class="form-control input-register" name="password-confirm" placeholder="confirma tu contraseña" required>
                            </div>
                        </div>
                        <div class="politica">
                          <p>Al hacer clic en "Registrarte", aceptas nuestras Condiciones, la política de datos y la política de cookies.</p>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 mx-auto">
                                <button type="submit" class="btn-login btn-register w-100">
                                 <a href="/register/agregarUsuario"> Registrate </a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
