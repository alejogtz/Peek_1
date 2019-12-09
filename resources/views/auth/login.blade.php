@extends('layouts.app')

@section('content')
<div class="container">

        <div class="col-md-8">

            <div class="card izquierda">
               <img src="peeklogo.png" class="user-logo">


                <div class="card-body contenido-login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="forma form-control @error('email') is-invalid @enderror" placeholder="usuario o email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="forma form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">

                            </div>
                        </div>

                        <div class="form-group row mb-0">

                                <button type="submit" class="btn boton-login">
                                    {{ __('Iniciar Sesión') }}
                                </button>



                        </div>


                        <p class="parrafo-claro">Or login with</p>



                          <div class="row">
                              <a href="{{url('/redirect')}}" class="col-lg-6 col-sm-6 a-facebook">
                                <img src="facebook.png" class="facebook-logo">
                              </a>
                              <a href="{{url('/redirect')}}" class="col-lg-6 col-sm-6 a-google">
                                <img src="google.png" class="google-logo">
                              </a>
                          </div>

                            <a class="nav-link registrarse" href="/register">{{ __('Registrarse') }}</a>
                    </form>

            </div>
            <img src="huellas.png" class="fondomovil">
        </div>

    </div>


@endsection
