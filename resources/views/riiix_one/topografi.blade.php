@extends('layouts.mane')

@section('title')
RIIIX | Typography
@endsection

<body class="">
<div class="bg-gray-d"></div>
@section('header')

@endsection


@section('content')
    <section id="" class="">
        <div class="container">
            <div class="row">
                <div class="c-12">
                    <ul class="breadcrumbs">
                        <li><a href="#"> Главная</a></li>
                        <li><a href="#" class="active">Квиз</a></li>
                    </ul>
                </div>
                <div class="c-12">
                    <h1>Exo</h1>
                    <table class="table">
                        <thead class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="c-12 mt-40">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td><p class="heading">Heading 1</p></td>
                            <td><p>semibold</p></td>
                            <td><p>30</p></td>
                        </tr>
                        <tr>
                            <td><p class="heading primary-color">Sign up heading</p></td>
                            <td><p>medium</p></td>
                            <td><p>30</p></td>
                        </tr>
                        <tr>

                            <td><p class="simple">Main Buttons</p></td>
                            <td><p>semibold</p></td>
                            <td><p>18</p></td>
                        </tr>
                        <tr>
                            <td><p class="chips">Chips</p></td>
                            <td><p>medium</p></td>
                            <td><p>15</p></td>
                        </tr>
                        <tr>
                            <td> <p class="main-text">Main texts</p></td>
                            <td><p>regular</p></td>
                            <td><p>16</p></td>
                        </tr>
                        <tr>
                            <td><p class="mini-buttons">Mini buttons </p></td>
                            <td><p>medium</p></td>
                            <td><p>16</p></td>
                        </tr>
                        </tbody>
                    </table>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.8/jquery.inputmask.bundle.min.js"></script>
<script src="assests/js/main.js"></script>
@endsection
</body>
</html>
