@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item"><a href="{{route('admin.services')}}">Услуги</a></li>
    <li class="breadcrumb-item active">Добавить услугу</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{route('admin.service.create')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" class="form-control" id="serviceId">
                <div class="form-group">
                    <label for="serviceName">Название</label>
                    <input type="text" name="name" class="form-control" id="serviceName">
                </div>

                <div class="form-group">
                    <label for="serviceCode">Код</label>
                    <input type="text" name="code" class="form-control" id="serviceCode">
                </div>

                <div class="form-group">
                    <label for="serviceDescription">Описание</label>
                    <textarea class="form-control" name="description" id="serviceDescription" rows="15"></textarea>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" value="1" class="form-check-input" id="serviceActive">
                    <label class="form-check-label" for="serviceActive">Опубликовано</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
