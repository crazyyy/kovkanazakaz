$(function(){
	if(!( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
        try{
            $('.parallax').parallax({
                xparallax: '75px',
                yparallax: false,
                xorigin: 0
            });
        } catch( event ){
            //
        }
	}
	
});

var showFavCount;
var mobileScrollTimer = null;

//bind functions
$(function(){

    //плавающая навигация
    if ($('#floated')){
        var floated = function(){
            var scroll_top = $(window).scrollTop();

            if (scroll_top >= 70) {
                $('#floated').fadeIn(400);
            } else {
                $('#floated').fadeOut(100);
            }
        };

        floated();

        $(window).bind('scroll', function() {
            floated();
        });
    }

    //перепроверка недозагруженных изображений
    $("img")
        .load(function(){})
        .error(function(){
            var $img = $(this)
            // in this case you must reload image with jQuery
            setTimeout(function(){
                var imgSrc = $img.attr('src'); $img.attr('src',imgSrc);
            }, 100);
        });

    showFavCount = function( object, count ){

        if ( object != null){
            $(object).effect('shake', {'direction': 'up', 'distance': 5}, 500);
        }

        if (count){
            $('#floated .favorites a, .page-container .favorites a').addClass('count');
            $('#floated .favorites a .before, .page-container .favorites a .before').html(count);
        } else {
            $('#floated .favorites a, .page-container .favorites a').removeClass('count');
            $('#floated .favorites a .before, .page-container .favorites a .before').html('');
        }
    };

    if ($.cookie('favorite_works') != undefined){
        showFavCount(null, $.parseJSON($.cookie('favorite_works')).length);
    }

    //fav works
    $('.work-favourite-link a').bind('click', function( event ){

        var item_id = $(this).data('id');
        var object;
        var $self = $(this);

        if (!$(this).hasClass('active')){ //пункт еще не выбран, играем анимацию

            var nearestImage = $(this).closest('li');

            if ( $('#floated').is(":visible") ){ //виден плавающий блок
                nearestImage.effect( "transfer", { to: $( "#floated .favorites a").closest('li'), className: "transferEffect" }, 650, function(){
                    object = $( "#floated .favorites a");
                });
            } else {
                nearestImage.effect( "transfer", { to: $( ".page-container .favorites a").closest('li'), className: "transferEffect" }, 650, function(){
                    object = $( ".page-container .favorites a" );
                });
            }

            try{
                //пытаемся записать событие в метрику
            } catch(e){
                //
            }
        }
        
        // var favor_block = ('id : '+item_id+', favorite: true');
        // console.log('------');
        // console.log(favor_block);
        // $.cookie('favorite_works', favor_block);

        console.log('id : '+item_id+', favorite: true');
        
        $.ajax({
            url: "./",
            type: "POST",
            data: { id : item_id, favorite: true },
            dataType: "json"
        }).success(function(data){
            $self.toggleClass('active');
            showFavCount( object, data.items_count )
        });

        return false;
    });

    //unfav works
    $('.work-unfavourite-link a').bind('click', function( event ){
        var item_id = $(this).data('id');
        var object;
        var $self = $(this);

        $.ajax({
            url: "./",
            type: "POST",
            data: { id : item_id, unfavorite: true },
            dataType: "json"
        }).success(function(data){
            $self.closest('li').hide(100, function( ){
                $self.closest('li').remove();
                countItems();
            });
            showFavCount( object, data.items_count )
        });

        return false;
    });

    $('.work-favourite-link a, .work-unfavourite-link a').hover(
        function(){
            $(this).closest('p').children('small').css({'display': 'block'});
        },
        function(){
            $(this).closest('p').children('small').css({'display': 'none'});
        }
    );

    if ($('#offers-form-container')){

        $.validator.setDefaults({
            errorElement: "span",
            errorClass: "help-block",
            errorPlacement: function (error, element) {
                if (element.parent('.form-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                    error.insertAfter(element);
                } else {
                    error.insertAfter(element);
                }
            }
        });

        var $subscribeForm = $('#offers-form-container form');
        var subscribePhone = $('#subscribePhone');
        var subscribeEmail = $('#subscribeEmail');

        subscribePhone.mask('\+7 (999) 999-99-99', {clearEmpty: false});

        $subscribeForm.validate({
            focusInvalid: true,
            errorClass: "help-block",
            rules: {
                Name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    require_from_group: [1, '.oneRequired'],
                    email: true
                },
                phone: {
                    require_from_group: [1, '.oneRequired'],
                    phoneRu: true
                }
            },
            messages: {
                Name: {
                    required: "Пожалуйста, представьтесь",
                    minlength: "Введите имя полностью"
                },
                email: {
                    require_from_group: "Введите электронную почту или телефон",
                    email: "Это некорректный адрес почты"
                },
                phone: {
                    require_from_group: "Введите электронную почту или телефон",
                    phoneRu: "Введите телефон в&nbsp;формате +7&nbsp;(XXX)&nbsp;XXX-XX-XX"
                }
            },
            onfocusout: function (element) {
                $(element).valid();
            },
            onkeyup: function (element) {
                $(element).valid();
            },
            success: function(element) {
                $(element)
                    .closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            highlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            submitHandler: function(form) {

                //register metrics
                try{
                    //catch form contacts
                    yaCounter22150097.reachGoal('SUBSCRIBE_FORM');
                    ga('send', 'event', 'form', 'send', 'subscribe-form');
                } catch(e){
                    //
                }

                $subscribeForm.find('.loader').show();

                $(form).unbind().submit();
            }
        });

        $subscribeForm.on('change keyup focusout blur', function() {
            if($(this).validate().checkForm()) {
                $subscribeForm.find('input[type=submit]').eq(0).parent().removeClass('button-container-disabled');
                $subscribeForm.find('input[type=submit]').eq(0).removeClass('btn-disabled').attr('disabled', false);
            } else {
                $subscribeForm.find('input[type=submit]').eq(0).parent().addClass('button-container-disabled');
                $subscribeForm.find('input[type=submit]').eq(0).addClass('btn-disabled').attr('disabled', true);
            }
        });
    }

    if ($("a[href='#top-callback-form']").length != 0 && $('#top-callback-form').length != 0){
        var link = $("a[href='#top-callback-form']");
        var form = $('#top-callback-form');
        var formInput = $('#top-callback-form input[name=phone]');
        link.on('click', function(){
            form.slideToggle(200);
            return false;
        });

        $(document).mouseup(function (e){
            var container = $(form).add(link);
            if (!container.is(e.target) && container.has(e.target).length === 0){
                form.slideUp(200);
            }
        });

        formInput.mask('\+7 (999) 999-99-99');

        $(form).children('form').validate({
            focusInvalid: true,
            errorClass: "help-block text-small",
            rules: {
                phone: {
                    required: true,
                    phoneRu: true
                }
            },
            messages: {
                phone: {
                    required: "Введите телефон в&nbsp;формате +7&nbsp;(XXX)&nbsp;XXX-XX-XX",
                    phoneRu: "Введите телефон в&nbsp;формате +7&nbsp;(XXX)&nbsp;XXX-XX-XX"
                }
            },
            onfocusout: function (element) {
                $(element).valid();
            },
            highlight: function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element)
                    .closest('.form-group').removeClass('has-error').removeClass('has-success');
            },
            success: function(element) {
                $(element)
                    .closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            submitHandler: function(form) {

                //register metrics
                try{
                    //catch form contacts
                    yaCounter22150097.reachGoal('SHORT_CALL_FORM');
                    ga('send', 'event', 'form', 'send', 'short-call-form');
                } catch(e){
                    //
                }

                var $form = $(form);
                var $inputs = $form.find("input, select, button, textarea, checkbox");
                var serializedData = $form.serialize();

                $inputs.prop("disabled", true);

                var request = $.ajax({
                    url: $(form).attr('action'),
                    type: "post",
                    cache: false,
                    data: serializedData
                });

                request.done(function (response, textStatus, jqXHR) {
                    $(form).find('.loader').addClass('ok');
                    $(form).find('.loader p.message').html('Отлично! Мы получили вашу заявку и&nbsp;перезвоним в&nbsp;течение 15&nbsp;минут!');
                });

                request.fail(function (jqXHR, textStatus, errorThrown) {
                    $(form).children('.loader').hide();
                });

                request.always(function () {
                    $inputs.prop("disabled", false);
                });
            }
        });

        $('form .loader').bind('ajaxStart', function(){
            $(this).show();
        }).bind('ajaxStop', function(){
            //$(this).hide();
        });
    }
});