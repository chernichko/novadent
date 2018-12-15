@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Цены</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach($services as $service)

            <div id="service_{{$service->id}}" class="card mb-3">
                <div class="card-header">{{$service->name}}</div>

                <div class="card-body">

                    <div class="row mb-2">
                        <div class="col-md-9">
                            Название
                        </div>
                        <div class="col-md-3">
                            Стоимость
                        </div>
                    </div>

                    <div class="prices-block">

                        @if(isset($price[$service->id]))

                            @foreach($price[$service->id] as $value)
                                <div class="row mb-2">
                                    <div class="col col-md-9">
                                        <input type="text" class="form-control form-control-sm" name="name" value="{{$value->name}}">
                                    </div>
                                    <div class="col col-md-3">
                                        <input type="text" class="form-control form-control-sm" name="price" value="{{$value->price}}">
                                    </div>
                                    <input type="hidden" name="service_id" value="{{$value->id}}">
                                </div>
                            @endforeach
                        @endif

                            <div class="row mb-2">
                                <div class="col col-md-9">
                                    <input type="text" class="form-control form-control-sm" name="name">
                                </div>
                                <div class="col col-md-3">
                                    <input type="text" class="form-control form-control-sm" name="price">
                                </div>
                                <input type="hidden" name="service_id">
                            </div>

                    </div>

                    <div class="row my-3">
                        <div class="col-md-9">
                            <button type="button" class="btn btn-primary btn-sm save-price-js" data-id="{{$service->id}}">Сохранить</button>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2 add-price-js add-service-price" data-id="{{$service->id}}">+ Добавить</div>
                        </div>
                    </div>

                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
@endsection
