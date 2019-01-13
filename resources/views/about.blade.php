@extends('layouts.app')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
    <li class="breadcrumb-item">О нас</li>
@endsection

@section('content')
    <div class="container">
        <h1>{{$data->name}}</h1>
        <p>{!! $data->description !!}</p>

    </div>
@endsection
