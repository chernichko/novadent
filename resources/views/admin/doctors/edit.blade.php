@extends('layouts.admin')

@section('scripts')
    <script>
        CKEDITOR.replace('descriptionDoctor');
    </script>

@endsection

@section('title')
    <li class="breadcrumb-item"><a href="{{route('admin.doctors')}}">Врачи</a></li>
    <li class="breadcrumb-item active">{{$doctor->name}}</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="/admin/doctors/edit/{{$doctor->id}}" method="post" enctype="multipart/form-data"
                      class="doctors_form">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$doctor->id}}" class="form-control">

                    <div class="row">
                        <div class="col-3">
                            <div class="h-75 border rounded mb-3">
                                <img src="{{URL::asset('/storage/files/doctors/'.$doctor->image)}}" class="w-100">
                            </div>
                            <input type="file" name="preview" class="form-control-file">
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <label for="nameDoctor">Имя</label>
                                <input type="text" class="form-control" value="{{$doctor->name}}" name="name"
                                       id="nameDoctor">
                            </div>
                            <div class="form-group">
                                <label for="specializationDoctor">Специализация</label>
                                <input type="text" class="form-control" value="{{$doctor->specialization}}"
                                       name="specialization" id="specializationDoctor">
                            </div>
                            <div class="form-group">
                                <label for="stageDoctor">Стаж</label>
                                <input type="text" class="form-control" value="{{$doctor->stage}}" name="stage"
                                       id="stageDoctor">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descriptionDoctor">Описание</label>
                        <textarea class="form-control" id="descriptionDoctor" name="description"
                                  rows="8">{{$doctor->description}}</textarea>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" value="1" name="active" class="form-check-input"
                               id="doctorActive" @php print($doctor->active ? 'checked' : '') @endphp>
                        <label class="form-check-label" for="doctorActive">Опубликовано</label>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-success">Сохранить</button>
                        <!--- <a href="/admin/doctors/delete/тут вывод ид" class="btn btn-danger">Удалить</a> --->
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
