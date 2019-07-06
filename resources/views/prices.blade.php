@extends('layouts.app')

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item">Цены</li>
            </ol>
        </nav>
    </div>

@endsection

@section('content')

    <div class="container">
        <h1>Цены</h1>

        <div class="content">

            @foreach($services as $service)

                    <div class="prices-block">

                <h3>{{$service->name}}</h3>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Код услуги</th>
                        <th scope="col">Нименование услуги</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1 ?>

                    @foreach($prices as $price)
                        @if($price->service_group_id == $service->id)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$price->code}}</td>
                        <td>{{$price->name}}</td>
                        <td>{{$price->price}}</td>
                    </tr>
                    @endif
                    @endforeach

                    </tbody>
                </table>
            </div>

            @endforeach

        </div>

    </div>








@endsection
