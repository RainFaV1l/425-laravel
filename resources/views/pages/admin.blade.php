@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex flex-col gap-24">
                <div class="flex flex-col gap-4 border-b border-white border-opacity-25 pb-7">
                    <h1 class="text-5xl">Панель администратора</h1>
                    <p>В данной панели вы можете создавать, удалять и редактировать категории и товары</p>
                </div>
                <div class="flex flex-col gap-7 border-b border-white border-opacity-25 pb-12">
                    <div class="flex flex-wrap items-center justify-between gap-7">
                        <h2 class="text-2xl">Категории</h2>
                        <a href="{{ route('category.create') }}" class="button-fill">Добавить</a>
                    </div>
                    <ul class="flex items-center gap-7">
                        @if($categories->count() > 0)
                            @foreach($categories as $category)
                                {{-- {{ $category->products }} --}}
                                {{-- @dd($category['name']) --}}
                                {{-- @dd($category->name)--}}
                                <li class="flex items-center gap-4 border border-white transition border-opacity-25 hover:border-opacity-100 py-4 px-6 rounded">
                                    {{ $category->name }}
                                    <a href="{{ route('category.edit', $category->id) }}">✍️</a>
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
                <div class="flex flex-col gap-7">
                    <div class="flex flex-wrap items-center justify-between gap-7">
                        <h2 class="text-2xl">Товары</h2>
                        <a href="{{ route('product.create') }}" class="button-fill">Добавить</a>
                    </div>
                    <ul class="flex flex-col items-center gap-7">
                        @if($products->count() > 0)
                            @foreach($products as $product)
                                <li class="flex items-center justify-between w-full gap-4 border border-white transition border-opacity-25 hover:border-opacity-100 py-4 px-6 rounded">
                                    <p class="w-[20%]">{{ $product->name }}</p>
                                    <p class="w-[20%]">{{ $product->description }}</p>
                                    <p class="w-[20%]">{{ $product->category->name }}</p>
                                    <p class="w-[20%]">{{ $product->price }}</p>
                                    <div class="w-[10%]">
                                        <div class="h-[70px] w-[70px] border border-white border-opacity-25 rounded">
                                            <img src="{{ $product->getImageUrl() }}" class="h-full w-full object-cover" alt="Изображение">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end gap-7 w-[10%]">
                                        <a href="{{ route('product.edit', $product->id) }}">✍️</a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">❌</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            Нет товаров :(
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
