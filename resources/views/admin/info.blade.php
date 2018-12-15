@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Информация о компании</li>
@endsection

@section('content')
<div class="container w-75 float-left px-5">
    {{--<div class="row justify-content-center">--}}

        <form action="{{route('admin.info')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputName">Название</label>
                <input type="text" name="name" value="{{$data['name']}}" class="form-control" id="inputName">
            </div>
            {{--<div class="form-group">--}}
                {{--<label for="inputFile">Логотип</label>--}}
                {{--<input type="file" name="logotip" value="{{$data['name']}}" class="form-control" id="inputFile">--}}
            {{--</div>--}}
            <div class="form-group">
                <label for="inputPhone">Номер телефона</label>
                {{--<input type="text" name="phone" value="{{$data['phone']}}" class="form-control" id="inputPhone">--}}

                <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Основной</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" value="{{$data['phone']}}" class="form-control" id="inputPhone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPhone1" class="col-sm-2 col-form-label">Дополнительный</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone1" value="{{$data['phone1']}}" class="form-control" id="inputPhone1">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="inputAddress">Адрес</label>
                <input type="text" name="address" value="{{$data['address']}}" class="form-control" id="inputAddress">
            </div>
            <div class="form-group">
                <label for="inputGPS">GPS-данные</label>
                <input type="text" name="gps-data" value="{{$data['gps-data']}}" class="form-control" id="inputGPS">
            </div>
            <div class="form-group">
                <label for="inputWorkTime">Время работы</label>

                <div class="form-group row">
                    <label for="worktimeWeekday" class="col-sm-2 col-form-label">По будням</label>
                    <div class="col-sm-10">
                        <input type="text" name="worktimeWeekday" value="{{$data['worktimeWeekday']}}" class="form-control" id="worktimeWeekday">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="worktimeWeekend" class="col-sm-2 col-form-label">По выходным и праздникам</label>
                    <div class="col-sm-10">
                        <input type="text" name="worktimeWeekend" value="{{$data['worktimeWeekend']}}" class="form-control" id="worktimeWeekend">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="inputEmailFeedback">Email для обратной связи</label>
                <input type="email" name="email" value="{{$data['email']}}" class="form-control" id="inputEmailFeedback">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>

    {{--</div>--}}
</div>
@endsection
