@extends('../master')

@section('main')
  <header class="header-login row">
     <nav class="cont-logo col-lg-7 col-md-6">
       <img src="img/logo-verde-g.png" alt="">
       <h1 class="titulo"><a href="home.php">Booky</a></h1>
      </nav>
     <p class="col-lg-5 col-md-6">¿No estás registrado? <a href="/register"> Creá una cuenta</a></p>
  </header>
  <div class="container">
    <div class="row cont-form">
        <div class="col-lg-12  col-md-12 col-sm-12 panel-cont">
            <div class="panel panel-defaut offset-lg-6">

                <div class="panel-body">
                    <form class="form-horizontal form-login col-md-12" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                          <h2>Login</h2>

                        <div class="datos form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                            <label for="email" class="col-lg-1 col-md-1 col-sm-1 control-label"><i class="fas fa-user"></i></label>

                            <div class="col-lg-11 col-md-11 col-sm-11">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="ingresa tu email" required autofocus>

                                @if ($errors->has('email'))
                                  <p>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  </p>
                                @endif
                            </div>
                        </div>

                        <div class="datos form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                            <label for="password" class="col-lg-1 col-md-1 col-sm-1 control-label"><i class="fas fa-lock"></i></label>

                            <div class="col-lg-11 col-md-11 col-sm-11">
                                <input id="password" type="password" class="form-control" name="password" placeholder="ingresa tu contraseña"required>

                                @if ($errors->has('password'))
                                  <p class="">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 mx-auto">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group recover">
                            <div class="col-md-8 mx-auto">
                                <button type="submit" class="btn btn-primary btn-login w-75">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
