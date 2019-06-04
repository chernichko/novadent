@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Отзывы</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            {{ csrf_field() }}

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
{{--                    <th scope="col">Телефон</th>--}}
                    <th scope="col">Текст отзыва</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($reviews as $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <td>{{$value->name}}<br>{{$value->phone}}</td>
{{--                        <td>{{$value->phone}}</td>--}}
                        <td>{{$value->text}}</td>
                        <td><input type="checkbox" class="js-update-review" data-id="{{$value->id}}" value="1" {{ $value->agreed ? "checked" : ''}} ></td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
