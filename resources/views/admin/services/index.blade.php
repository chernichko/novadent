@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Услуги</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{route('admin.service.create')}}" class="btn btn-info">Добавить услугy</a>


            <ul class="list-group">
                @foreach($listService as $item)
                    <li class="list-group-item">
                        <a href="/admin/services/edit/{{$item->id}}"> {{$item->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
