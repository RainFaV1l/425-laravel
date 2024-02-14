@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex justify-between items-center gap-7">
                <div class="flex items-start flex-col gap-12 w-1/2">
                    <div class="flex flex-col gap-7">
                        <h1 class="text-5xl">Валенки на любой вкус и цвет. Только у нас!</h1>
                        <p>Валеник - молодая и перспективная компания с многолетним опытом. Мы предлагаем самые низкие
                            цены на рынке при сохранении качества.</p>
                    </div>
                    <a class="button" href="#">Купить</a>
                </div>
                <div class="w-1/2">
                    <img src="{{ asset('public/assets/images/banner.png') }}" alt="Изображение">
                </div>
            </div>
        </div>
    </div>
@endsection
