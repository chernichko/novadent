@extends('layouts.admin')

@section('scripts')
    <script>
        CKEDITOR.replace( 'newsDescription' );
    </script>
@endsection

@section('title')
    <li class="breadcrumb-item"><a href="{{route('admin.news')}}">Статьи</a></li>
    <li class="breadcrumb-item active">Добавить Статью</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{route('admin.article.create')}}" method="post" enctype="multipart/form-data" class="news_form">
                {{ csrf_field() }}
                <input type="hidden" name="id" class="form-control" id="serviceId">
                <div class="form-group">
                    <label for="newsName">Название</label>
                    <input type="text" name="name" class="form-control" id="newsName">
                </div>

                <div class="form-group">
                    <label for="newsCode">Код</label>
                    <input type="text" name="code" class="form-control" id="newsCode">
                </div>

                <div class="form-group">
                    <label for="newsImage">Превью</label>
                    <input type="file" name="preview" class="form-control-file" id="newsImage">
                </div>

                <div class="form-group">
                    <label for="newsShortDescription">Краткое описание</label>
                    <textarea class="form-control" name="short_description" id="newsShortDescription" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="newsDescription">Описание</label>
                    <textarea class="form-control" name="description" id="newsDescription" rows="15"></textarea>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" value="1" name="active" class="form-check-input" id="newsActive">
                    <label class="form-check-label" for="newsActive">Опубликовано</label>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-success">Сохранить</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
