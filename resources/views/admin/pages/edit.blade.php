@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="/admin/pages/edit/{{$page->id}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$page->id}}" class="form-control" id="serviceId">
                <div class="form-group">
                    <label for="serviceName">Название</label>
                    <input type="text" name="name" value="{{$page->name}}" class="form-control" id="serviceName">
                </div>

                <div class="form-group">
                    <label for="serviceCode">Код</label>
                    <input type="text" name="code" value="{{$page->code}}" class="form-control" id="serviceCode">
                </div>

                <div class="form-group">
                    <label for="serviceDescription">Описание</label>
                    <textarea class="form-control" name="description" id="serviceDescription" rows="15">{{$page->description}}</textarea>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="active" value="1" class="form-check-input" id="serviceActive" @php print($page->active ? 'checked' : '') @endphp>
                    <label class="form-check-label" for="serviceActive">Опубликовано</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Сохранить</button>

                    <a href="/admin/pages/delete/{{$page->id}}" class="btn btn-danger">Удалить</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
