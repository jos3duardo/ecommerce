@extends('layouts.app')

@section('content')

<div class="hold-transition register-page">
<div class="register-box">
        <div class="login-logo">
            <a href="/"><b>SIS</b>COMPRAS</a>
        </div>
        <div class="register-box-body">
          <p class="login-box-msg">Cadastro de novo Usuario</p>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group has-feedback">
                <input 
                  id="name"
                  type="text" 
                  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                  name="name" 
                  value="{{ old('name') }}" 
                  required 
                  autofocus
                  placeholder="Nome de Usuario"
                >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
            </div>
            <div class="form-group has-feedback">
              <input 
                id="email" 
                type="email" 
                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" 
                name="email"
                required 
                placeholder="Email"  
              >
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group has-feedback">
              <input 
                id="password" 
                type="password" 
                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                name="password" 
                required 
                placeholder="Password"
              >
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input 
                id="password-confirm" 
                type="password"  
                class="form-control" 
                name="password_confirmation" 
                placeholder="Retype password"
                >
              <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
      
          {{-- <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
              Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
              Google+</a>
          </div> --}}
      
          {{-- <a href="login.html" class="text-center">I already have a membership</a> --}}
        </div>
        <!-- /.form-box -->
      </div>
      <!-- /.register-box -->
    </div>


@endsection
