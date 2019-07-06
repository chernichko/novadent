
$(".add-price-js").on('click', function(){

    var id_serv = $(this).data('id');
    var block = $("#service_"+id_serv).find('.prices-block');
    var row = block.find('.row').first();

    row.clone().find("input").val("").end().appendTo(block);
})

$(".save-price-js").on('click', function(){

    var id_serv = $(this).data('id');
    var block = $("#service_"+id_serv).find('.prices-block');

    var rows = block.find('.row');

    var arr_prices = [];

    rows.each(function (index, value){
        var tmp = {};

        tmp.code = $(this).find('input[name=code]').val();
        tmp.name = $(this).find('input[name=name]').val();
        tmp.price = $(this).find('input[name=price]').val();
        tmp.id = $(this).find('input[name=service_id]').val();

        arr_prices.push(tmp);
    });


    arr_prices = JSON.stringify(arr_prices);

    console.log(arr_prices);

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: '/admin/prices/save',
        type: "POST",
        data: {data: arr_prices,
               service: id_serv,
               _token: CSRF_TOKEN},
        success: function (data) {
            // console.log(data);
            location.reload();
        },
    });

})

$('.news_form button').on('click', function(){

    var error = true;

    $('.news_form input').removeClass('error');

    if( !$('.news_form #newsName').val() ){
        $('.news_form #newsName').addClass('error');
        error = false;
    }

    if( !$('.news_form #newsCode').val() ){
        $('.news_form #newsCode').addClass('error');
        error = false;
    }

    // if( !$('.news_form #newsDescription').val() ){
    //     $('.news_form #newsDescription').addClass('error');
    //     error = false;
    // }

    if(error){
        $('.news_form').submit();
    }

})

$('.services_form button').on('click', function(){

    var error = true;

    $('.services_form input').removeClass('error');

    if( !$('.services_form #serviceName').val() ){
        $('.services_form #serviceName').addClass('error');
        error = false;
    }

    if( !$('.services_form #serviceCode').val() ){
        $('.services_form #serviceCode').addClass('error');
        error = false;
    }

    if(error){
        $('.services_form').submit();
    }

})

$('.doctors_form button').on('click', function(){

    var error = true;

    $('.doctors_form input').removeClass('error');

    if( !$('.doctors_form #nameDoctor').val() ){
        $('.doctors_form #nameDoctor').addClass('error');
        error = false;
    }

    if( !$('.doctors_form #specializationDoctor').val() ){
        $('.doctors_form #specializationDoctor').addClass('error');
        error = false;
    }

    if(error){
        $('.doctors_form').submit();
    }

})

$('.upload-lisences-btn').on('click', function(){
    event.preventDefault();
    var file_data = $('.add-lisences-form_input').prop('files');
    var form_data = new FormData();
    form_data.append('file', file_data);
})

$(".js-update-review").on('click', function(){

    var status = 0;

    if ($(this).is(':checked')){
        status = 1 ;
    }

    var id = $(this).data("id");
    var CSRF_TOKEN = $("input[name='_token']").val();

    $.ajax({
        url: '/admin/reviews/update',
        type: "POST",
        data: {
            id: id,
            status: status,
            _token: CSRF_TOKEN
        },
        success: function (data) {
            location.reload();
        },
    });

})


$('.input-file').each(function() {
    var $input = $(this),
        $label = $input.next('.js-labelFile'),
        labelVal = $label.html();

    $input.on('change', function(element) {
        var fileName = '';
        if (element.target.value) fileName = element.target.value.split('\\').pop();
        fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
    });
});
