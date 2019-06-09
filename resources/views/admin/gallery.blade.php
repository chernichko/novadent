@extends('layouts.admin')

@section('title')
    <li class="breadcrumb-item active">Галлерея</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="example-2">
                <form action="{{route('admin.gallery.save.post')}}" method="post" enctype="multipart/form-data">
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

        </div>
    </div>
</div>
@endsection
