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
    console.debug($.cookie("favorite_works"));
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
            crossDomain: true,
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
  
});