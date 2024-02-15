@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex flex-col gap-14">
                <div class="flex flex-col gap-4 border-b border-white border-opacity-25 pb-7">
                    <h1 class="text-5xl">Панель администратора</h1>
                    <p>В данной панели вы можете создавать, удалять и редактировать категории и товары</p>
                </div>
                <div class="flex flex-col gap-7">
                    <div class="flex flex-wrap items-center justify-between gap-7">
                        <h2 class="text-2xl">Категории</h2>
                        <a href="{{ route('category.create') }}" class="button-fill">Добавить</a>
                    </div>
                    <ul class="flex items-center gap-7">
                        @if($categories->count() > 0)
                            @foreach($categories as $category)
                                {{-- @dd($category['name']) --}}
                                {{-- @dd($category->name)--}}
                                <li class="flex items-center gap-4 border border-white transition border-opacity-25 hover:border-opacity-100 py-4 px-6 rounded">
                                    {{ $category->name }}
                                    <a href="">✍️</a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">❌</button>
                                    </form>
                                </li>
                            @endforeach
                        @else
                            Нет категорий :(
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
