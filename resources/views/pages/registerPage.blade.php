@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24 ">
            <div class="flex flex-col items-center gap-12 justify-center">
                <div class="flex flex-col gap-4 text-center items-center">
                    <h1 class="text-5xl">Регистрация</h1>
                    <p>Есть аккаунт? <a class="text-white font-medium" href="{{ route('auth.loginPage') }}">Авторизуйся!</a></p>
                </div>
                <form class="flex flex-col items-center gap-7" action="" method="post">
                    <input class="input" type="text" name="name" placeholder="Имя">
                    <input class="input" type="text" name="surname" placeholder="Фамилия">
                    <input class="input" type="text" name="patronymic" placeholder="Отчество">
                    <input class="input" type="email" name="email" placeholder="Email">
                    <input class="input" type="password" name="password" placeholder="Пароль">
                    <input class="input" type="password" name="password_r" placeholder="Подтвердите пароль">
                    <button class="button-fill" type="submit">Создать</button>
                </form>
            </div>
        </div>
    </div>
@endsection
