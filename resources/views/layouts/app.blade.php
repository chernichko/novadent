<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Стоматология Новадент</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header id="header">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-md-3 header_logo">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{URL::asset('/storage/header_logo.png')}}">
                    </a>
                </div>
                <div class="col-xs-12 col-md-2"></div>
                <div class="col-xs-12 col-md-4 text-right header_feedback">

                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        Записаться на прием
                    </a>

                </div>
                <div class="col-xs-12 col-md-3 text-right header_phone">
                    <div class="header_phone_main">
                        {{$info['phone']}}
                    </div>
                    <div class="header_phone_dop">
                        {{$info['phone1']}}
                    </div>
                    <div class="header_messangers">
                        <span class="messanger_tm"></span>
                        <span class="messanger_vb"></span>
                        <span class="messanger_wp"></span>
                        <a href="https://www.instagram.com/novadent_vlg/" rel="nofollow"><span class="messanger_ig"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </header>
    <nav class="navbar navbar-expand-md navbar-light main_menu">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="/about-us" class="nav-link">О нас</a></li>
                    <li class="nav-item mx-2"><a href="/services" class="nav-link">Услуги и цены</a></li>
                    <li class="nav-item mx-2"><a href="/news" class="nav-link">Новости</a></li>
                    <li class="nav-item mx-2"><a href="#" class="nav-link">Галлерея</a></li>
                    <li class="nav-item mx-2"><a href="#" class="nav-link">Отзывы</a></li>
                    <li class="nav-item mx-2"><a href="/contacts" class="nav-link">Контакты</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <main class="">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @yield('breadcrumbs')
                </ol>
            </nav>
        </div>
        @yield('content')
    </main>

    <div class="footer">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 my-4 footer_logo">
                        <img src="{{URL::asset('/storage/footer_logo.png')}}">
                    </div>
                    <div class="col-xs-12 col-sm-2 my-4">
                        <h5>Меню</h5>
                        <ul class="footer_menu">
                            <li><a href="#" class="footer_menu_link">О нас</a></li>
                            <li><a href="#" class="footer_menu_link">Услуги и цены</a></li>
                            <li><a href="#" class="footer_menu_link">Новости</a></li>
                            <li><a href="#" class="footer_menu_link">Галлерея</a></li>
                            <li><a href="#" class="footer_menu_link">Отзывы</a></li>
                            <li><a href="#" class="footer_menu_link">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 my-4">
                        <h5>Услуги</h5>
                        <ul class="footer_menu">
                            @foreach($listServices as $service)
                            <li><a href="#" class="footer_menu_link">{{$service['name']}}</a></li>
                            @endforeach
                            {{--<li><a href="#" class="footer_menu_link">Лечение кариеса</a></li>--}}
                            {{--<li><a href="#" class="footer_menu_link">Эстетическая реставрация</a></li>--}}
                            {{--<li><a href="#" class="footer_menu_link">Профилактика и лечение парадонта</a></li>--}}
                            {{--<li><a href="#" class="footer_menu_link">Профессиональная чистка</a></li>--}}
                            {{--<li><a href="#" class="footer_menu_link">Отбеливание</a></li>--}}
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 my-4 footer_phone">
                        <div class="footer_phone_main">
                            {{$info['phone']}}
                        </div>
                        <div class="footer_phone_dop">
                            {{$info['phone1']}}
                        </div>
                        <div class="footer_messangers">
                            <span class="messanger_tm"></span>
                            <span class="messanger_vb"></span>
                            <span class="messanger_wp"></span>
                            <a href="https://www.instagram.com/novadent_vlg/" rel="nofollow"><span class="messanger_ig"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {{--<div class="modal-content">--}}
        <div class="header_feedback_modal">
            {{--<div class="modal-body">--}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="header_feedback_modal-title" id="exampleModalLabel">Записаться на прием</h5>
                <form class="header_feedback_modal-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Номер телефона">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Имя">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Записаться</button>
                </form>
            {{--</div>--}}
        </div>
    </div>
</div>


</body>
</html>
