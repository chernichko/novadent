@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <h1>{{$data->name}}</h1>
        <p>{{$data->description}}</p>

    </div>
@endsection
