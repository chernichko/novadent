$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true, //Зацикливаем слайдер
        items:5,
        margin:2
    });
});

$(".reviews-button").on('click', function(){
    var name = $(".reviews-name").val();
    var phone = $(".reviews-phone").val();
    var text = $(".reviews-textarea").val();

    var error = false;

    if(name == ''){
        $(".reviews-name").addClass("border border-danger");
        error = true;
    }
    if(phone == ''){
        $(".reviews-phone").addClass("border border-danger");
        error = true;
    }
    if(text == ''){
        $(".reviews-textarea").addClass("border border-danger");
        error = true;
    }


    if(!error) {

        $(".reviews-name, .reviews-phone, .reviews-textarea").removeClass("border border-danger");

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/reviews/add',
            type: "POST",
            data: {
                name: name,
                phone: phone,
                text: text,
                _token: CSRF_TOKEN
            },
            success: function (data) {

                console.log(data);

                //location.reload();
            },
        });
    }

})