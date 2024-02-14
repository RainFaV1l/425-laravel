@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24 ">
            <div class="flex flex-col items-center gap-12 justify-center">
                <div class="flex flex-col gap-4 text-center items-center">
                    <h1 class="text-5xl">Регистрация</h1>
                    <p>Есть аккаунт? <a class="text-white font-medium" href="{{ route('auth.loginPage') }}">Авторизуйся!</a></p>
                </div>
                @foreach($errors->all() as $error)
                    <p class="text-red-500">{{ $error }}</p>
                @endforeach
                <form class="flex flex-col items-center gap-7" action="{{ route('auth.register') }}" method="post">
                    @csrf
                    <input class="input" type="text" name="name" placeholder="Имя" value="{{ old('name') }}">
                    @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="text" name="surname" placeholder="Фамилия" value="{{ old('surname') }}">
                    @error('surname') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="text" name="patronymic" placeholder="Отчество" value="{{ old('patronymic') }}">
                    @error('patronymic') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="password" name="password" placeholder="Пароль">
                    @error('password') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="password" name="password_r" placeholder="Подтвердите пароль">
                    <button class="button-fill" type="submit">Создать</button>
                </form>
            </div>
        </div>
    </div>
@endsection
