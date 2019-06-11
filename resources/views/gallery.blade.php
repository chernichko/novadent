@extends('layouts.app')

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item">Галлерея</li>
            </ol>
        </nav>
    </div>

@endsection

@section('content')

    <div class="container">
        <h1>Галлерея</h1>

        <div class="content">

            <div class="gallery-block">
                @if(!empty($gallery))
                    @foreach($gallery as $photo)
                        <div class="gallery-block-element">
                            <a href="{{URL::asset('/storage/files/gallery/' . $photo->path)}}" data-lightbox="roadtrip">
                                <img src="{{URL::asset('/storage/files/gallery/' . $photo->path)}}">
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>


        </div>

    </div>

@endsection
