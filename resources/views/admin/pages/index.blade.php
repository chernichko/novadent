@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{route('admin.pages.create')}}" class="btn btn-info mb-3">Добавить Страницу</a>


            <ul class="list-group">
                @foreach($listPages as $item)
                    <li class="list-group-item">
                        <a href="/admin/pages/edit/{{$item->id}}"> {{$item->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
