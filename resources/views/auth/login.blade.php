@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@include('partials.errors')
<div class="container mx-auto flex pt-10">
    <div class="card w-1/3 rounded shadow-lg mx-auto px-4 py-2">
        <h2 class="font-sans font-semibold text-2xl text-center border-b-2 pb-2">Ingresa tus datos</h2>
        <form a ction="{{ route('login') }}" method="POST">
            @csrf
            <div class="my-4">
                <input type="email" name="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Correo electrónico">
            </div>
            <div class="my-4">
                <input type="password" name="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Contraseña">
            </div>
            <div class="my-4">
                <button type="submit" class="w-full bg-gray-700 px-4 py-2 text-white rounded-lg font-sans text-center hover:bg-gray-600">Iniciar Sesión</button>
            </div>
            <div class="flex justify-between">
                <label class="flex items-center">
                    <input class="mr-2 leading-tight" type="checkbox">
                    <span class="text-sm text-gray-500">Recuerdame</span>
                </label>
                <span class="text-sm text-gray-500">Olvidaste tu contraseña? Recuperala <a href="#" class="text-gray-900">aqui</a></span>
            </div>
        </form>
    </div>
</div>
@endsection
