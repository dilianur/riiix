<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assests/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/fontawesome/css/all.css') }}">
</head>

<body>
@section('header')
<header class="header">
<div class="container">
        <div class="row ">
            <div class="c-6">
                <div class="header-left">
                    <a href="#" class="logo">
                        <img src="assests/img/logo.png" alt="">
                    </a>
                    <dl class="dropdown form-select-block mobile-none">
                        <dt><a><span>Бишкек</span></a></dt>
                        <dd>
                            <ul>
                                <li><a class="default">Бишкек</a></li>
                                <li><a>Нарын</a></li>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="c-6 header-right-position">
                <a id="hamburger-icon" href="#" class="open-close-btn"><span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <div class="header-right">
                    <dl class="dropdown form-select-block desktop-none header-right-item">
                        <dt><a><span>Бишкек</span></a></dt>
                        <dd>
                            <ul>
                                <li><a class="default">Бишкек</a></li>
                                <li><a>Нарын</a></li>
                            </ul>
                        </dd>
                    </dl>
                    <a href="#" class="btn btn-gray header-right-item">
                        Самодиагностика
                    </a>
                    <a href="#" class="btn btn-gray ml-40 header-right-item">
                        Поддержка
                    </a>
                    <a href="/public/register" class="btn btn-blue ml-40 header-right-item">
                        Войти
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
@show


<main>
    <a href="/public/"><p>Главная</p></a> | <a href="/public/about">про дили</a>
    @yield('content')
</main>

@section('overlay')
<div class="overlay">
    <div class="popup">
        <form action="">
            <div class="form-control">
                <label for="country">Страна</label>
                <div class="form-select-block">
                    <select class="form-select" id="country">
                        <option>Бишкек</option>
                        <option>Нарын</option>
                        <option>Ош</option>
                    </select>
                </div>
            </div>
            <div class="form-control">
                <label for="lang">Язык</label>
                <div class="form-select-block">
                    <select class="form-select" id="lang">
                        <option>Бишкек</option>
                        <option>Нарын</option>
                        <option>Ош</option>
                    </select>
                </div>
            </div>
            <div class="form-control">
                <label for="currency">Валюта</label>
                <div class="form-select-block">
                    <select class="form-select" id="currency">
                        <option>Бишкек</option>
                        <option>Нарын</option>
                        <option>Ош</option>
                    </select>
                </div>
            </div>
            <div class="form-control-btns">
                <button class="btn-pp btn-submit">Сохранить</button>
                <button class="btn-pp btn-close">Отменить</button>

            </div>
        </form>
        <div class="close-popup"></div>
    </div>
</div>
@show

<footer>
    @yield('footer', 'default_content')
</footer>

@yield('scripts')
</body>
</html>
