@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item"><a href="{{route('admin.news')}}">Новости</a></li>
    <li class="breadcrumb-item active">{{$new->name}}</li>
@endsection

@section('scripts')
<script>
    CKEDITOR.replace( 'newsDescription' );
</script>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="/admin/news/edit/{{$new->id}}" method="post" enctype="multipart/form-data" class="news_form">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$new->id}}" class="form-control" id="serviceId">
                <div class="form-group">
                    <label for="newsName">Название</label>
                    <input type="text" name="name" value="{{$new->name}}" class="form-control" id="newsName">
                </div>

                <div class="form-group">
                    <label for="newsCode">Код</label>
                    <input type="text" name="code" value="{{$new->code}}" class="form-control" id="newsCode">
                </div>

                <div class="form-group">
                    <label for="newsImage">Превью</label>
                    @if($new->image)
                        <img src="/storage/files/news/{{$new->image}}" class="w-25 d-block pb-3">
                        <div class="form-check mb-2">
                            <input type="checkbox" name="dltImg" class="form-check-input" id="dltImg">
                            <label class="form-check-label" for="dltImg">Удалить изображение</label>
                        </div>
                    @endif
                    <input type="file" name="preview" class="form-control-file" id="newsImage">
                </div>

                <div class="form-group">
                    <label for="newsDescription">Описание</label>
                    <textarea class="form-control" name="description" id="newsDescription" rows="15">{{$new->description}}</textarea>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="active" value="1" class="form-check-input" id="newsActive" @php print($new->active ? 'checked' : '') @endphp>
                    <label class="form-check-label" for="serviceActive">Опубликовано</label>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-success">Сохранить</button>

                    <a href="/admin/news/delete/{{$new->id}}" class="btn btn-danger">Удалить</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
