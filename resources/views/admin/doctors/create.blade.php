@extends('layouts.admin')

@section('scripts')
    <script>
        CKEDITOR.replace('descriptionDoctor');
    </script>
@endsection

@section('title')
    <li class="breadcrumb-item"><a href="{{route('admin.doctors')}}">Врачи</a></li>
    <li class="breadcrumb-item active">Добавить врача</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="{{route('admin.doctor.create')}}" method="post" enctype="multipart/form-data"
                      class="doctors_form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-3">
                            <div class="h-75 border rounded mb-3">

                            </div>
                            <input type="file" name="preview" class="form-control-file align-middle">
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <label for="nameDoctor">Имя</label>
                                <input type="text" class="form-control" name="name" id="nameDoctor">
                            </div>
                            <div class="form-group">
                                <label for="specializationDoctor">Специализация</label>
                                <input type="text" class="form-control" name="specialization" id="specializationDoctor">
                            </div>
                            <div class="form-group">
                                <label for="stageDoctor">Стаж</label>
                                <input type="text" class="form-control" name="stage" id="stageDoctor">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descriptionDoctor">Описание</label>
                        <textarea class="form-control" id="descriptionDoctor" name="description" rows="8"></textarea>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" value="1" name="active" class="form-check-input" id="doctorActive">
                        <label class="form-check-label" for="doctorActive">Опубликовано</label>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-success">Сохранить</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
