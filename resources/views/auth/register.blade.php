@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 10px">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="container">
                <h5 class="titulo2-register">Que tipo de turismo você tem interesse?</h5>
                <div class="form-group ">
                    <ul class="list-group list-group-horizontal ">
                        <li class="list-group-item">
                            Frio
                            <label class="checkbox">
                                <input value="1" name="id_zona[]" type="checkbox" />
                                <span class="default"></span>
                            </label>
                        </li>
                        <li class="list-group-item">
                            Sol/Praia
                            <label class="checkbox">
                                <input value="2" name="id_zona[]" type="checkbox" />
                                <span class="default"></span>
                            </label>
                        </li>
                        <li class="list-group-item">
                            Saúde
                            <label class="checkbox">
                                <input value="3" name="id_zona[]" type="checkbox" />
                                <span class="default"></span>
                            </label>
                        </li>
                        <li class="list-group-item">
                            Aventura
                            <label class="checkbox">
                                <input value="4" name="id_zona[]" type="checkbox" />
                                <span class="default"></span>
                            </label>
                        </li>
                        <li class="list-group-item">
                            Rural
                            <label class="checkbox">
                                <input value="5" name="id_zona[]" type="checkbox" />
                                <span class="default"></span>
                            </label>
                        </li>
                        <li class="list-group-item">
                            Ecoturismo
                            <label class="checkbox">
                                <input value="6" name="id_zona[]" type="checkbox" />
                                <span class="danger"></span>
                            </label>
                        </li>
                        <li class="list-group-item">
                            Cultural
                            <label class="checkbox">
                                <input value="7" name="id_zona[]" type="checkbox" />
                                <span class="danger"></span>
                            </label>
                        </li>
                        <li class="list-group-item">
                            Esporte
                            <label class="checkbox">
                                <input value="8" name="id_zona[]" type="checkbox" />
                                <span class="danger"></span>
                            </label>
                        </li>
                        <li class="list-group-item">
                            Urbanismo
                            <label class="checkbox">
                                <input value="9" name="id_zona[]" type="checkbox" />
                                <span class="danger"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
        </form>
    </div>
@endsection