@extends('layouts.app')

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Статьи</a></li>
                <li class="breadcrumb-item active">{{$news['name']}}</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="container">
        <h1>Статьи</h1>

        <h3>{{$news['name']}}</h3>

        <p>{{$news['created_at']}}</p>

        {!!htmlspecialchars_decode($news['description'])!!}

    </div>

@endsection
