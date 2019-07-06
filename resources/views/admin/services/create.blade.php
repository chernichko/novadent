@extends('layouts.admin')

@section('scripts')
    <script>
        CKEDITOR.replace( 'serviceDescription' );
    </script>
@endsection

@section('title')
    <li class="breadcrumb-item"><a href="{{route('admin.services')}}">Услуги</a></li>
    <li class="breadcrumb-item active">Добавить услугу</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{route('admin.service.create')}}" method="post" class="services_form">
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
                    <label for="serviceShortDescription">Короткое описание (макс 250 символов)</label>
                    <textarea class="form-control" name="shortdescription" id="serviceShortDescription" rows="3"></textarea>
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
                    <label for="serviceMetaTitle">Мета-заголовок</label>
                    <input type="text" name="metatitle" class="form-control" id="serviceMetaTitle">
                </div>

                <div class="form-group">
                    <label for="serviceMetaDescription">Мета-описание</label>
                    <input type="text" name="metadescription" class="form-control" id="serviceMetaDescription">
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-success">Сохранить</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
