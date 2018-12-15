@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Новости</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{route('admin.news.create')}}" class="btn btn-info mb-3">Добавить Новость</a>

            @if(!empty($listnews))
            <ul class="list-group">
                @foreach($listnews as $item)
                    <li class="list-group-item">
                        <a href="/admin/news/edit/{{$item->id}}"> {{$item->name}}</a>
                    </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
@endsection
