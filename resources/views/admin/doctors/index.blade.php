@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Врачи</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{route('admin.doctor.create')}}" class="btn btn-info mb-3">Добавить сотрудника</a>

            <ul class="list-group">
                @foreach($listDoctors as $item)
                    <li class="list-group-item">
                        <a href="/admin/doctors/edit/{{$item->id}}"> {{$item->name}}</a> ({{$item->specialization}})
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
