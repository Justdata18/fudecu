@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="menu">
        <li><a href="/home">Home</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
    </ul>
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Onthoud mij') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 login-button">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Wachtwoord vergeten?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <div class="row justify-content-center">
                        <h3>Registreer je nu!</h3>
                    </div>

                    <div class="row justify-content-center">
                        <ul>
                            <li style="list-style: none; margin-bottom: 10px;"><b>De voordelen van dit programma:</b></li>
                            <li>Voor €75,- kun je fuck you zeggen tegen de curator.</li>
                            <li>Een maandbedrag van €15,- houd jij je spullen veilig voor beslaglegging.</li>
                            <li>Laat de rust terugkeren door niet meer bang te hoeven zijn voor de deurwaarders.</li>
                        </ul>
                    </div>

                    <div class="form-group row mb-0 login-button">
                        <div class="col-md-8 offset-md-4">

                            <button onclick="window.location='{{ url("register") }}'" class="btn btn-primary" type="submit" href="{{ route('register') }}">
                                {{ __('Registreer je hier!') }}
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
