<div class="container">

    <h2>Наши врачи</h2>
    <div class="row">
	@foreach($doctors as $doctor)
        <div class="col-xs-12 col-lg-4">
            <div class="widget-doctor">
                <div class="widget-doctor_image">
                    <img src="{{URL::asset('/storage/files/doctors/'.$doctor['image'])}}" class="w-100">
                </div>

                <h5>{{$doctor['name']}}</h5>
                <b>Спецализация:</b> {{$doctor['specialization']}}<br>
                <b>Стаж:</b> {{$doctor['stage']}}
                {!! $doctor['description'] !!}
            </div>
        </div>
    @endforeach
    </div>
</div>