@extends('layouts.app')

@section('metaData')
    <title>Услуги | Стоматология Новадент в Волгограде</title>
    <meta name="description" content="Услуги стоматологии Новадент в Волгограде">
@endsection

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item">Услуги</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

<div class="container">
    <h1>Услуги</h1>
    <div class="row justify-content-center">
    @foreach($services as $service)
        <div class="col-xs-12 col-lg-6 my-4">
            <h4>{{$service['name']}}</h4>
            {{$service['short_description']}} <a href="/services/{{$service['code']}}">Подробнее...</a>

        </div>
    @endforeach
    </div>
</div>

@endsection

{{--@section('widgets')--}}
{{--    @widget('doctors')--}}
{{--@endsection--}}
