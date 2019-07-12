@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Лицензии</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="example-2">
                    <form action="{{route('admin.liscence.save.post')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="file" name="file[]" multiple id="file" class="input-file">
                            <label for="file" class="btn btn-tertiary js-labelFile">
                                <i class="icon fa fa-check"></i>
                                <span class="js-fileName">Выбрать файлы</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="save" class="btn btn-success btn-tertiary" value="Загрузить">
                        </div>
                    </form>
                </div>

                <div class="gallery-list">

                    <form method="post" action="{{route('admin.liscence.delete.post')}}" name="liscenceImageDel">
                        {{ csrf_field() }}
                        <div class="form-group gallery-list-block">

                            @if(!empty($liscence))

                                @foreach($liscence as $file)
                                    <div class="liscence-element">
                                        <img src="{{URL::asset('/storage/files/liscence/' . $file->path)}}">
                                        <p class="gallery-element-del">
                                            <input type="checkbox" name="delete_img[]" value="{{$file->id}}">Удалить</p>
                                    </div>
                                @endforeach

                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" name="save-image-del" class="btn btn-success btn-tertiary" value="Сохранить">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
