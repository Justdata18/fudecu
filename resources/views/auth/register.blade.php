@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="menu">
        <li><a href="/home">Home</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
    </ul>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">

                        <form method="POST" action="{{ route('register') }}" class="formreg2">
                            @csrf

                            <div class="form-group row">
                                <label for="initials" class="col-md-4 col-form-label text-md-right">{{ __('Initialen') }}</label>

                                <div class="col-md-6">
                                    <input id="initials" type="text" class="form-control{{ $errors->has('initials') ? ' is-invalid' : '' }}" name="initials" value="{{ old('initials') }}" required autofocus>

                                    @if ($errors->has('initials'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('initials') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Tussenvoegsel + Achternaam') }}</label>

                                <div class="col-md-2">
                                    <input id="insertion" type="text" class="form-control{{ $errors->has('insertion') ? ' is-invalid' : '' }}" name="insertion" value="{{ old('insertion') }}" required autofocus>

                                    @if ($errors->has('insertion'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('insertion') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Geboortedatum') }}</label>

                                <div class="col-md-6">
                                    <input id="birthdate" type="text" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                    @if ($errors->has('birthdate'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="postalhouse" class="col-md-4 col-form-label text-md-right">{{ __('Postcode + Huisnummer') }}</label>

                                <div class="col-md-3">
                                    <input id="postal" type="text" class="form-control{{ $errors->has('postal') ? ' is-invalid' : '' }}" name="postal" value="{{ old('postal') }}" required autofocus>

                                    @if ($errors->has('postal'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postal') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <input id="house" type="text" class="form-control{{ $errors->has('house') ? ' is-invalid' : '' }}" name="house" value="{{ old('house') }}" required autofocus>

                                    @if ($errors->has('house'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('house') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="companyname" class="col-md-4 col-form-label text-md-right">{{ __('Bedrijfsnaam*') }}</label>

                                <div class="col-md-6">
                                    <input id="companyname" type="text" class="form-control{{ $errors->has('companyname') ? ' is-invalid' : '' }}" name="companyname" value="{{ old('companyname') }}" required autofocus>

                                    @if ($errors->has('companyname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('companyname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="companynumber" class="col-md-4 col-form-label text-md-right">{{ __('KvK Nummer*') }}</label>

                                <div class="col-md-6">
                                    <input id="birthdate" type="text" class="form-control{{ $errors->has('companynumber') ? ' is-invalid' : '' }}" name="companynumber" value="{{ old('companynumber') }}" required autofocus>

                                    @if ($errors->has('companynumber'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('companynumber') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="idnumber" class="col-md-4 col-form-label text-md-right">{{ __('BSN Nummer') }}</label>

                                <div class="col-md-6">
                                    <input id="idnumber" type="text" class="form-control{{ $errors->has('idnumber') ? ' is-invalid' : '' }}" name="idnumber" value="{{ old('idnumber') }}" required autofocus>

                                    @if ($errors->has('idnumber'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('idnumber') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <hr style="border-top: 2px solid rgba(0,0,0,.1);">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord nogmaals') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <label for="termsconfirm"><input type="checkbox" name="termsconfirm" class="checkbox">{{ __('Ik ga akkoord met de voorwaarden') }}</label>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registreer') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row extra">
                                    <span>* Deze velden zijn optioneel, dienen ingevuld te worden wanneer je een eigen bedrijf hebt</span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
