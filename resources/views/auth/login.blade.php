@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="login-box">
                <div class="login-logo">
                    <a href="/"><b>SIS</b>COMPRAS</a>
                </div>
                <!-- /.login-logo -->
                <div class="login-box-body">
                    <p class="login-box-msg">Faça Login para acessar o sistema</p>
                    {{-- iniciando o login --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} " placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Permanecer Conectado') }}
                                
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                
                    {{-- <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                            Facebook</a>
                        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                            Google+</a>
                    </div> --}}
                    <!-- /.social-auth-links -->
                
                    <a href="{{ route('password.request') }}">Recuperar senha</a><br>
                    <a href="{{ route('register') }}" class="text-center">Cadastrar-se no Sistema</a>
                
                </div>
                <!-- /.login-box-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
