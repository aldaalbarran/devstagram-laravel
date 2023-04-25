@extends('layouts.app')

@section('title')
    Inicia Sesión en devstagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-4/12 p-5">
            <img src="{{ asset('img/login.svg') }}" alt="Login" class="w-full">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login') }}" method="POST" novalidate >
                @csrf

                @if (session('mensaje'))
                    <p class="text-red-500 text-sm p-2">{{ session('mensaje') }}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo electrónico</label>
                    <input type="text" id="email" name="email" placeholder="Introducir correo electrónico" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Introducir contraseña" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember"> <label for="" class="text-gray-500 text-sm">Mantener sesión abierta</label>
                </div>

                <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection