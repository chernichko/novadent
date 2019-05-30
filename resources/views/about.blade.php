@extends('layouts.app')

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item">О нас</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <div class="container">
        <h1>{{$data->name}}</h1>
        <p>{!! $data->description !!}</p>

    </div>
@endsection
