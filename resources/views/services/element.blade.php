@extends('layouts.app')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{route('news')}}">Услуги и цены</a></li>
    <li class="breadcrumb-item active">{{$service['name']}}</li>
@endsection

@section('content')

    <div class="container">
        <div class="row">
        <div class="col-xs-12 col-lg-3 my-4">
            <div class="list-group">

                @foreach($services_list as $service_el)
                <a href="/services/{{$service_el['code']}}" class="list-group-item list-group-item-action">
                    {{$service_el['name']}}
                </a>
                @endforeach
            </div>
        </div>

        <div class="col-xs-12 col-lg-9 my-4">
            <h2>{{$service['name']}}</h2>

            {!!htmlspecialchars_decode($service['description'])!!}

            <div class="price-block">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <table class="table table-hover">

                            <tbody>
                            @foreach($price['left'] as $val)
                                <tr>
                                    <td>{{$val['name']}}</td>
                                    <td>{{$val['price']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <table class="table table-hover">
                            <tbody>
                            @foreach($price['right'] as $val)
                                <tr>
                                    <td>{{$val['name']}}</td>
                                    <td>{{$val['price']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        </div>
    </div>

@endsection
