@extends('layouts.login')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a class="navbar-brand" href="{{ url('/') }}">
      <i class="fas fa-lightbulb "></i> <b> {{ config('app.name', 'Laravel') }} </b><br>
      <small><i class="fas fa-chevron-left"></i>   Voltar</small>
    </a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Cadastre um novo usuário.</p><br>
    <div class="row justify-content-center">
        <div class="col-md-12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                                <input id="name" type="text" placeholder="Nome" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                                <input id="email" type="email" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                                <input id="type" type="type" placeholder="Tipo de Usuário" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ old('type') }}" required>

                                @if ($errors->has('type'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                                <input id="adm_unit" type="type" placeholder="Unidade Adm." class="form-control{{ $errors->has('adm_unit') ? ' is-invalid' : '' }}" name="adm_unit" value="{{ old('adm_unit') }}" required>

                                @if ($errors->has('adm_unit'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('adm_unit') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                              <input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                                <input id="password-confirm" type="password" placeholder="Confirme a senha" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary  pull-right">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
          </div>
      </div>
    </div
  </div>
</div>
@endsection
