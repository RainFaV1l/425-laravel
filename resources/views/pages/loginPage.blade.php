@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24 ">
            <div class="flex flex-col items-center gap-12 justify-center">
                <div class="flex flex-col gap-4 text-center items-center">
                    <h1 class="text-5xl">Авторизация</h1>
                    <p>Нет аккаунта? <a class="text-white font-medium" href="{{ route('auth.registerPage') }}">Зарегистрируйся!</a></p>
                </div>
                @error('invalid_credentials') <p class="text-red-500">{{ $message }}</p> @enderror
                <form class="flex flex-col items-center gap-7" action="{{ route('auth.login') }}" method="post">
                    @csrf
                    <input class="input" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="password" name="password" placeholder="Пароль">
                    @error('password') <p class="text-red-500">{{ $message }}</p> @enderror
                    <button class="button-fill" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </div>
@endsection
