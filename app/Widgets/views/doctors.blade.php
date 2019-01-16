<div class="container mb-5">

    <h2>Наши врачи</h2>
    <div class="row">
	@foreach($doctors as $doctor)
        @if(count($doctors)==2)
            <div class="col-xs-12 col-lg-6">
        @else
            <div class="col-xs-12 col-lg-4">
        @endif
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