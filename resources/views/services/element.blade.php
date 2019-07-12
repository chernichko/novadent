@extends('layouts.app')

@section('metaData')
    <title>{{$service['meta_title']}}</title>
    <meta name="description" content="{{$service['meta_description']}}">
@endsection

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('services')}}">Услуги и цены</a></li>
                <li class="breadcrumb-item active">{{$service['name']}}</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="container">

        <h1>{{$service['name']}}</h1>

        <div class="row">
{{--        <div class="col-xs-12 col-lg-3 my-4">--}}
{{--            <div class="list-group">--}}

{{--                @foreach($services_list as $service_el)--}}
{{--                <a href="/services/{{$service_el['code']}}" class="list-group-item list-group-item-action">--}}
{{--                    {{$service_el['name']}}--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="col-xs-12 col-lg-12 my-12">
{{--            <h2>{{$service['name']}}</h2>--}}

            {!!htmlspecialchars_decode($service['description'])!!}

{{--            <div class="price-block">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-12 col-lg-6">--}}
{{--                        <table class="table table-hover">--}}

{{--                            <tbody>--}}
{{--                            @foreach($price['left'] as $val)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$val['name']}}</td>--}}
{{--                                    <td>{{$val['price']}}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-12 col-lg-6">--}}
{{--                        <table class="table table-hover">--}}
{{--                            <tbody>--}}
{{--                            @foreach($price['right'] as $val)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$val['name']}}</td>--}}
{{--                                    <td>{{$val['price']}}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--            </div>--}}
        </div>
        </div>
    </div>

@endsection
