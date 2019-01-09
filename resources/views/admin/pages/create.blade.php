@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item"><a href="{{route('admin.pages')}}">Текстовые страницы</a></li>
    <li class="breadcrumb-item active">Добавить страницу</li>
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace( 'pageDescription' );
    </script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{route('admin.pages.create')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" class="form-control" id="pageId">
                <div class="form-group">
                    <label for="pageName">Название</label>
                    <input type="text" name="name" class="form-control" id="pageName">
                </div>

                <div class="form-group">
                    <label for="pageCode">Код</label>
                    <input type="text" name="code" class="form-control" id="pageCode">
                </div>

                <div class="form-group">
                    <label for="pageDescription">Описание</label>
                    <textarea class="form-control" name="description" id="pageDescription" rows="15"></textarea>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" value="1" name="active" class="form-check-input" id="pageActive">
                    <label class="form-check-label" for="pageActive">Опубликовано</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
