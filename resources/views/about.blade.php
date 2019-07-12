@extends('layouts.app')

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item">О нас</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <div class="container">
        <h1>{{$data->name}}</h1>
        <p>{!! $data->description !!}</p>


        @if(!empty($doctors))
            <h3>Наши доктора</h3>

            <div class="aboutPage-doctors_block">

                @foreach($doctors as $doctor)
                    <div class="aboutPage-doctor">

                        <div class="aboutPage-doctor_name">
                            {{$doctor->name}}
                        </div>
                        @if($doctor->specialization !='')
                        <div class="aboutPage-doctor_spec">
                            {{$doctor->specialization}}
                        </div>
                        @endif
                        @if($doctor->stage !='')
                        <div class="aboutPage-doctor_stage">
                            Стаж: {{$doctor->stage}}
                        </div>
                        @endif
                        @if($doctor->description !='')
                        <div class="aboutPage-doctor_descr">
                            {!!htmlspecialchars_decode($doctor->description)!!}
                        </div>
                        @endif

                    </div>
                @endforeach

            </div>
        @endif

    </div>
@endsection
