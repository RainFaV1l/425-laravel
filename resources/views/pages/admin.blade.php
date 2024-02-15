@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex flex-col gap-14">
                <div class="flex flex-col gap-4">
                    <h1 class="text-5xl">Панель администратора</h1>
                    <p>В данной панели вы можете создавать, удалять и редактировать категории и товары</p>
                </div>
                <div class="flex flex-col gap-7">
                    <h2 class="text-2xl">Категории</h2>
                    <ul class="flex flex-col gap-7">
                        <li class="flex items-center gap-4">
                            Название категории
                            <form action="" method="post">
                                @csrf
                                <button type="submit">❌</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
