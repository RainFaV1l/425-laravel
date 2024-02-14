@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24 ">
            <div class="flex flex-col items-center gap-12 justify-center">
                <div class="flex flex-col gap-4 text-center items-center">
                    <h1 class="text-5xl">Авторизация</h1>
                    <p>Нет аккаунта? <a class="text-white font-medium" href="{{ route('auth.registerPage') }}">Зарегистрируйся!</a></p>
                </div>
                <form class="flex flex-col items-center gap-7" action="" method="post">
                    <input class="input" type="email" name="email" placeholder="Email">
                    <input class="input" type="password" name="password" placeholder="Пароль">
                    <button class="button-fill" type="submit">Создать</button>
                </form>
            </div>
        </div>
    </div>
@endsection
