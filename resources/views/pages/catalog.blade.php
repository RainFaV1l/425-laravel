@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <div>
        <div class="container py-24 flex flex-col gap-12">
            <div class="flex flex-col gap-7">
                <div class="flex flex-col gap-4 border-b border-white border-opacity-25 pb-8">
                    <h1 class="text-5xl">Каталог товаров</h1>
                    <p>Лучшие товары только у нас</p>
                </div>
                <div class="flex items-center gap-7">
                    @foreach($categories as $category)
                        <a href="#" class="button">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-3 gap-7">
                <div class="flex flex-col gap-7 border border-white border-opacity-25">
                    <div class="h-[300px] w-full">
                        <img src="" alt="Изображение" class="h-full w-full object-cover">
                    </div>
                    <div>
                        <h3>{{  }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
