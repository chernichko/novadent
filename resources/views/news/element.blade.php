@extends('layouts.app')

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Новости</a></li>
                <li class="breadcrumb-item active">{{$news['name']}}</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="container">

        <h2>{{$news['name']}}</h2>

        <p>{{$news['created_at']}}</p>

        {!!htmlspecialchars_decode($news['description'])!!}

    </div>

@endsection
