@extends('layouts.app')

@section('content')
@include('partials.errors')
<div class="container mx-auto flex pt-10">
    <div class="card w-1/3 rounded shadow-lg mx-auto px-4 py-2">
        <h2 class="font-sans font-semibold text-2xl text-center border-b-2 pb-2">Ingresa tus datos</h2>
        <form action="{{ route('login') }}" method="POST">
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
            <div class="flex justify-between my-2">
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
