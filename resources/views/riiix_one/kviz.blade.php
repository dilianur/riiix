@extends('layouts.mane')

@section('title')
RIIIX
@endsection

<body class="body-content">
<div class="bg-gray-d"></div>
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
@endsection

    @section('content')
    <section id="" class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="c-12">
                    <ul class="breadcrumbs">
                        <li><a href="#"> Главная</a></li>
                        <li><a href="#" class="active">Квиз</a></li>
                    </ul>
                </div>
                <div class="leftbar">
                    <div class="checked-item">
                        <span>
                            Квиз 1
                        </span>
                    </div>

                    <div class="accordion">
                        <div class="close-lb"></div>
                        <h3 class="title-lb">Квизы</h3>
                        <ul>
                            <li class="pagenav">
                                <h4>Квиз 1</h4>
                                <ul>
                                    <li class="page_item"><a href="#">под квиз 1</a></li>
                                    <li class="page_item"><a href="#">под квиз 1</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li class="pagenav">
                                <h4>Квиз 2</h4>
                                <ul>
                                    <li class="page_item"><a href="#">под квиз 2</a></li>
                                    <li class="page_item"><a href="#">под квиз 2</a></li>
                                    <li class="page_item"><a href="#">под квиз 2</a></li>
                                    <li class="page_item"><a href="#">под квиз 2</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li class="pagenav">
                                <h4>Квиз 3</h4>
                                <ul>
                                    <li class="page_item"><a href="#">под квиз 3</a></li>
                                    <li class="page_item"><a href="#">под квиз 3</a></li>
                                    <li class="page_item"><a href="#">под квиз 3</a></li>
                                    <li class="page_item"><a href="#">под квиз 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="rightblock bg-image">
                    <div class="form-block">
                            <h3>Оцените ваше самочувствие</h3>
                        <form action="#">
                            <div class="form-group">
                                <input type="radio" id="test1" name="radio-group" checked>
                                <label for="test1">ПлохоеПл охоеПлохое ПлохоеПл охоеПлохоеП лохоеПл охое</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" id="test2" name="radio-group">
                                <label for="test2">Плохо еПлохое ПлохоеПло хоеПло хоеПлохоеПл охоеП лохое</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" id="test3" name="radio-group">
                                <label for="test3">Плох оеПлохо еПлохоеПл охоеПлохоеП лохоеПло хоеПлохое ПлохоеПл охоеПлохо еПлохоеПло хоеПл охоеПлохоеП лохое</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="input" placeholder="Другое">
                            </div>
                        </form>
                        <div class="govern-block">
                            <div class="pages">
                                2 из 14
                            </div>
                            <div class="navs">
                                <div class="nav-prev"><img src="assests/img/icons/arrow-right-thin.svg" alt=""></div>
                                <div class="nav-next"><img src="assests/img/icons/arrow-right-thin.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
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
@endsection
</body>
</html>
