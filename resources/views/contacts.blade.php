@extends('layouts.app')

@section('metaData')
    <title>Контакты стоматология Новадент в Волгограде</title>
{{--    <meta name="description" content="Контакты стоматология Новадент в Волгограде">--}}
@endsection

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item">Контакты</li>
            </ol>
        </nav>
    </div>

@endsection

@section('content')

    <div class="container">
        <h1>Контакты</h1>

        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5ac0f32eac4c20dcb31403a2b18cdf0f0241a3f0e3b4f666b74e191697b41a8a&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>



        <h2 class="pt-5">Стоматология Новадент</h2>
        <div class="row contacts ">

            <div class="col-xs-12 col-sm-6 mt-3">
                <p><b>Адрес:</b> {{$info['address']}}</p>
                <p><b>Время работы: </b></p>
                <p><b>По выходным</b>: {{$info['worktimeWeekday']}}</p>
                <p><b>По будням:</b> {{$info['worktimeWeekend']}}</p>
            </div>
            <div class="contacts col-xs-12 col-sm-6 mt-3">
                <p><b>Телефон:</b> </p>
                <p>{{$info['phone']}}</p>
                <p>{{$info['phone1']}}</p>
            </div>
            <!---div class="advantages_item col-xs-12 col-sm-6">
                <img src="{{URL::asset('/storage/novadent.jpg')}}" width="100%">
            </div---->

        </div>

    </div>
@endsection
