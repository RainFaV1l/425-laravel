<footer class="border-t border-white border-opacity-25">
    <div class="container py-5 flex flex-wrap items-center justify-between gap-7">
        <a href="{{ route('index.index') }}" class="text-2xl text-white">Валенки</a>
        <ul class="flex flex-wrap items-center gap-14">
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="{{ route('index.index') }}">Главная</a></li>
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="{{ route('index.catalog') }}">Каталог</a></li>
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="#">О нас</a></li>
        </ul>
        <div class="flex flex-wrap items-center gap-7">
            <a href="{{ route('auth.loginPage') }}" class="button">Войти</a>
            <a href="{{ route('auth.registerPage') }}" class="button-fill">Регистрация</a>
        </div>
    </div>
</footer>
