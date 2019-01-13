@extends('layouts.app')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
    <li class="breadcrumb-item">Услуги и цены</li>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
    @foreach($services as $service)
        <div class="col-xs-12 col-lg-6 my-4">
            <h4>{{$service['name']}}</h4>
            {{$service['short_description']}}
        </div>
    @endforeach
    </div>
</div>

@endsection
