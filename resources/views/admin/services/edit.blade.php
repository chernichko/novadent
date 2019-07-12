@extends('layouts.admin')

@section('scripts')
    <script>
        var editor = CKEDITOR.replace( 'serviceDescription' );
    </script>
@endsection

@section('title')
    <li class="breadcrumb-item"><a href="{{route('admin.services')}}">Услуги</a></li>
    <li class="breadcrumb-item active">{{$service->name}}</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="/admin/services/edit/{{$service->id}}" method="post" class="services_form">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$service->id}}" class="form-control" id="serviceId">
                <div class="form-group">
                    <label for="serviceName">Название</label>
                    <input type="text" name="name" value="{{$service->name}}" class="form-control" id="serviceName">
                </div>

                <div class="form-group">
                    <label for="serviceCode">Код</label>
                    <input type="text" name="code" value="{{$service->code}}" class="form-control" id="serviceCode">
                </div>

                <div class="form-group">
                    <label for="serviceShortDescription">Короткое описание (макс 250 символов)</label>
                    <textarea class="form-control" name="shortdescription" id="serviceShortDescription" rows="3">{{$service->short_description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="serviceDescription">Описание</label>
                    <textarea class="form-control" name="description" id="serviceDescription" rows="15">{{$service->description}}</textarea>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="active" value="1" class="form-check-input" id="serviceActive" @php print($service->active ? 'checked' : '') @endphp>
                    <label class="form-check-label" for="serviceActive">Опубликовано</label>
                </div>

                <hr>

                <div class="form-group">
                    <label for="serviceMetaTitle">Мета-заголовок</label>
                    <input type="text" name="metatitle" class="form-control" value="{{$service->meta_title}}" id="serviceMetaTitle">
                </div>

                <div class="form-group">
                    <label for="serviceMetaDescription">Мета-описание</label>
                    <input type="text" name="metadescription" class="form-control" value="{{$service->meta_description}}" id="serviceMetaDescription">
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-success">Сохранить</button>
                    <a href="/admin/services/delete/{{$service->id}}" class="btn btn-danger">Удалить</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
