@extends('layouts.mane')

@section('title')
    {{ $header }}
@endsection
<body>
    <!-- <h1>привет мир</h1> -->
@section('header')
    <!-- <div class="container">
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
                    <a href="#" class="btn btn-blue ml-40 header-right-item">
                        Войти
                    </a>
                </div>


            </div>
        </div>
    </div> -->
    @parent
    @endsection

    @section('content')
    <section id="home" class="home">
        <div class="container">
            <div class="row">
                <div class="main-page-links">
                    <div class="main-top">
                        <a href="#" class="block-card green">
                            <div class="card-head">
                                <div class="icon-block"></div>
                                <h3>
                                    Поиск врача или клиники
                                </h3>
                            </div>
                            <div class="card-body">
                                <p>Зарегистрируйтесь на сайте и запишитесь бесплатно к врачу</p>
                            </div>
                            <div class="go-over"></div>
                        </a>
                        <a href="#" class="block-card orange">
                            <div class="card-head">
                                <div class="icon-block">
                                </div>
                                <h3>
                                    Для <br> клиник
                                </h3>
                            </div>
                            <div class="card-body">
                                <p>It looks like you are on
                                    track. Please continue to follow your daily plan</p>
                            </div>

                            <div class="go-over">
                            </div>
                        </a>
                    </div>


                    <a href="#" class="block-card blue">
                        <div class="card-head">
                            <div class="icon-block">
                            </div>
                            <h3>
                                Для <br> партнеров
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>It looks like you are on
                                track. Please continue to follow your daily plan</p>
                        </div>

                        <div class="go-over">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('overlay')
@parent
@endsection
@section('footer')
    <div class="container">
        <div class="row ">
            <div class="c-7 mobile-w100 desktop-w100">
                <ul class="footer-nav">
                    <li><a href="#">О сервисе</a></li>
                    <li><a href="#">Условия использования</a></li>
                    <li><a href="#">Партнерам</a></li>
                    <li><a href="#">Клиентам</a></li>
                </ul>
            </div>
            <div class="c-5 mobile-w100 desktop-w100">
                <div class="footer-right footer-btns">
                    <div class="form-select-block border-r">
                        <button class="button-open-pp">
                            Казахский
                        </button>
                    </div>
                    <div class="form-select-block border-r">
                        <button class="button-open-pp">
                            <span>Тенге</span>
                        </button>
                    </div>
                    <div class="form-select-block">
                        <button class="button-open-pp bg-white">
                            <span>Казахстан</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="c-6 mt-40 mobile-w100 desktop-w100">
                <ul class="footer-nav">
                    <li class="socials">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>

                    <li><a href="#">Riiix inc. 2021</a></li>
                </ul>
            </div>
            <div class="c-6 mt-40 mobile-w100 desktop-w100">
                <div class="footer-right no-m">
                    <ul class="footer-apps">
                        <li><a href="#"><img src="assests/img/icons/appstore.png" alt=""></a></li>
                        <li><a href="#"><img src="assests/img/icons/g-play.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="assests/js/jquery-3.6.0.min.js"></script>
<script src="assests/js/main.js"></script>
<script src="assests/js/main.js"></script>
@endsection


