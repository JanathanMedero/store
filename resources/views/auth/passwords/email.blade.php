@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">email</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@include('partials.errors')
<div class="container mx-auto flex pt-16">
    <div class="card w-1/3 rounded shadow-lg mx-auto px-4 py-2">
        <h2 class="font-sans font-semibold text-2xl text-center border-b-2 pb-2">Ingresa el correo electrónico asociado a tu cuenta</h2>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="my-4">
                <input type="email" name="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Correo electrónico" value="{{ old('email') }}" required>
            </div>
            <div class="my-4">
                <button type="submit" class="w-full bg-gray-700 px-4 py-2 text-white rounded-lg font-sans text-center hover:bg-gray-600">Solicitar contraseña</button>
            </div>
            <div class="flex justify-center">
                <div class="account">
                    <span class="text-sm text-gray-500">No tienes cuenta? Crea una gratis <a href="{{ route('register') }}" class="text-gray-900">aqui</a></span>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
