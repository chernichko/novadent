@extends('layouts.app')

@section('breadcrumbs')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('main')}}">Главная</a></li>
                <li class="breadcrumb-item">Отзывы</li>
            </ol>
        </nav>
    </div>

@endsection

@section('content')

    <div class="container">
        <h1>Отзывы</h1>

        <div class="content">

            <div class="reviews-form">

                <p>Мы будем рады вашему отзыву о нашей работе, это сделает нас лучше!</p>

                <button data-toggle="modal" data-target="#ReviewForm" class="btn btn-success">
                    Оставить отзыв
                </button>

                <div class="reviews-list">

                    @foreach($reviews as $review)
                        <div class="reviews-list-element">
                            <p class="reviews-element-name">{{$review->name}}</p>
                            <p class="reviews-element-text">{{$review->text}}</p>
                        </divreviews-list>
                    @endforeach




                </div>

            </div>

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="ReviewForm" tabindex="-1" role="dialog" aria-labelledby="ReviewFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="header_feedback_modal">
                {{--<div class="modal-body">--}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="header_feedback_modal-title" id="ReviewFormLabel">Оставить отзыв</h5>
                <div class="header_feedback_modal-form">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="email" class="reviews-name form-control" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="reviews-phone form-control" placeholder="Ваш номер телефона">
                    </div>
                    <div class="form-group">
                        <textarea rows="5" class="reviews-textarea form-control" placeholder="Текст отзыва"></textarea>
                    </div>
                    <input type="button" class="reviews-button btn btn-success" value="Отправить отзыв">
                </div>
                </div>
            </div>
        </div>
    </div>






@endsection
