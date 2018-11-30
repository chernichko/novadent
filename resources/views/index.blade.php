@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
                <h3>О нас</h3>
                <p class="text-justify">Повседневная практика показывает, что постоянное информационно-пропагандистское
                    обеспечение нашей деятельности позволяет оценить значение направлений прогрессивного развития.
                    Значимость этих проблем настолько очевидна, что укрепление и развитие структуры способствует
                    подготовки и реализации форм развития. Товарищи! рамки и место обучения кадров позволяет выполнять
                    важные задания по разработке направлений прогрессивного развития. Значимость этих проблем настолько
                    очевидна, что консультация с широким активом позволяет выполнять важные задания по разработке систем
                    массового участия. С другой стороны начало повседневной работы по формированию позиции влечет за
                    собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям.
                    Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей
                    деятельности представляет собой интересный эксперимент проверки систем массового участия.
                </p>
                <a href="#" py-2>Подробнее...</a>
        </div>
        <div class="col-lg-6">
            <img src="{{URL::asset('/storage/novadent.jpg')}}" width="100%">
        </div>
    </div>
</div>
    <div class="container advantages my-3">
        <div class="row justify-content-center">
            <h3 class="w-100 text-center my-3">Преимущества</h3>
            <div class="advantages_item col-xs-12 col-sm-6 col-lg-3 my-4">
                Низкие цены
            </div>
            <div class="advantages_item col-xs-12 col-sm-6 col-lg-3 my-4">
                Опытные и внимательные доктора
            </div>
            <div class="advantages_item col-xs-12 col-sm-6 col-lg-3 my-4">
                Лечение без боли
            </div>
            <div class="advantages_item col-xs-12 col-sm-6 col-lg-3 my-4">
                Транспортная доступность
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row justify-content-center">
            <h3 class="w-100 text-center my-3">Наши услуги</h3>
            <div class="col-xs-12 col-lg-6 my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="col-xs-12 col-lg-6 my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="col-xs-12 col-lg-6 my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="col-xs-12 col-lg-6 my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="col-xs-12 col-lg-6 my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="col-xs-12 col-lg-6 my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
    </div>

    <div class="container form_feedback">
        <form class="form_make_appointment">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Номер телефона">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Имя">
            </div>
            <button type="submit" class="btn btn-primary w-100">Записаться</button>
        </form>
    </div>

<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5ac0f32eac4c20dcb31403a2b18cdf0f0241a3f0e3b4f666b74e191697b41a8a&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>

@endsection
