@extends('layouts.app')

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item">Новости</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="container">

        <ul class="list-group list-group-flush">
            @foreach($list as $new)
                <li class="list-group-item">
                    <h4>{{$new['name']}}</h4>

                    <p>{{$new['created_at']}}</p>

                    <p>{{$new['short_description']}}</p>

                    <a href="/news/{{$new['code']}}" class="text-link">Подробнее...</a>
                </li>
            @endforeach
        </ul>

    </div>

@endsection