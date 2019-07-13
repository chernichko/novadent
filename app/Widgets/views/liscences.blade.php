<div class="container mb-5">

    <h3>Лицензии и сертификаты</h3>
    <div class="row">

        @if(!empty($liscences))
            <div class="owl-carousel owl-theme liscences-block">
            @foreach($liscences as $photo)
                <div class="liscences-block-element">
                    <a href="{{URL::asset('/storage/files/liscence/' . $photo->path)}}" data-lightbox="liscences">
                        <img src="{{URL::asset('/storage/files/liscence/' . $photo->path)}}">
                    </a>
                </div>
            @endforeach
            </div>
        @endif

    </div>
</div>