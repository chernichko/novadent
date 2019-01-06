@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Врачи</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="submit" class="btn btn-primary">Добавить врача</a>

            <form action="" method="post">

                <div class="row">
                    <div class="col-3">
                        <div class="h-50 border rounded mb-3">

                        </div>
                        <input type="file" class="form-control-file align-middle">
                    </div>
                    <div class="col-9">
                        <input type="hidden" name="doctor[][id]">
                        <div class="form-group">
                            <input type="text" class="form-control" name="doctor[][name]" placeholder="Имя">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="doctor[][spec]" placeholder="Специализация">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="doctor[][stage]" placeholder="Стаж">
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea class="form-control" id="description" name="doctor[][descr]" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="mt-3 mb-3">
                    <span class="add-new-doctor js-add-doctor">+ Добавить</span>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
