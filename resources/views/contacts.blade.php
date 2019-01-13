@extends('layouts.app')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
    <li class="breadcrumb-item">Контакты</li>
@endsection

@section('content')

    <div class="container">
        <h1>Контакты</h1>

        <div class="row justify-content-center">
            <div class="advantages_item col-xs-12 col-sm-6 pt-5">
                <p><b>Стоматология Новадент</b></p>
                <p><b>Адрес:</b> {{$info['address']}}</p>
                <p><b>Телефон:</b> {{$info['phone']}}</p>
                <p><b>Время работы: </b></p>
                <p><b>По выходным</b>: {{$info['worktimeWeekday']}}</p>
                <p><b>По будням:</b> {{$info['worktimeWeekend']}}</p>
            </div>
            <div class="advantages_item col-xs-12 col-sm-6">
                <img src="{{URL::asset('/storage/novadent.jpg')}}" width="100%">
            </div>

        </div>

    </div>

<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5ac0f32eac4c20dcb31403a2b18cdf0f0241a3f0e3b4f666b74e191697b41a8a&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>


@endsection
