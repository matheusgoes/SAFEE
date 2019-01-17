@extends('layouts.login')


@section('content')
<div class="login-box">
  <div class="login-logo">
    <a class="navbar-brand" href="{{ url('/') }}">
      <i class="fas fa-lightbulb "></i> <b> SAFEE </b><br>
      <small>Login</small>
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Faça login para iniciar sua sessão</p><br>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group has-feedback">
            <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback"">
            <input id="password"  placeholder="Senha" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembre-se de mim') }}
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button><br>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Esqueceu sua senha?') }}
        </a>
      </div>
        <!-- <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembre-se de mim') }}
                    </label>
                </div>
            </div>
        </div> -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
