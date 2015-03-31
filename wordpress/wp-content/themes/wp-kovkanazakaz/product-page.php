<?php /* Template Name: Product Page Template */ get_header(); ?>
	
		<div class="page-real-content clearfix">
			                                                     <h1><?php the_title(); ?></h1>

<div class="breadcrumbs">

<ul class="breadcrumb">
<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://kovka-na-zakaz.ru/" itemprop="url" rel="home"><span itemprop="title">Главная</span></a></li>
<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://kovka-na-zakaz.ru/works/" title="Фотографии готовых работ" itemprop="url"><span itemprop="title">Фотографии готовых работ</span></a></li>
<li class="active">Перила</li></ul>
</div>

							
<ul class="list-inline separateWorksList" itemtype="http://schema.org/ItemList" itemscope="itemscope">


<li itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope="itemscope" class="class-b"><meta itemprop="image" content="http://kovka-na-zakaz.ru/upload/kovka-na-zakaz/information_system_19/1/2/8/item_1289/small_information_items_1289.jpg"><meta itemprop="name" content="Перила №1289"><div class="work-image-container"><img class="work-image thezoom lazy the-zoom-img the-zoom-zoom_in" data-id="1289" thezoom-bigsrc="<?php echo get_template_directory_uri(); ?>//upload/kovka-na-zakaz/information_system_19/1/2/8/item_1289/information_items_1289.jpg" src="<?php echo get_template_directory_uri(); ?>/img/small_information_items_1289.jpg" data-no-retina="true" width="192" height="144" alt="" title=""></div><p class="text-center work-favourite-link"><a href="http://kovka-na-zakaz.ru/works/railings/#favourite_1289" title="Отметить работу" data-id="1289" class="">Артикул 1289</a><small>Добавить в избранное</small></p></li>
<li itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope="itemscope" class="class-b"><meta itemprop="image" content="http://kovka-na-zakaz.ru/upload/kovka-na-zakaz/information_system_19/1/1/4/item_1146/small_information_items_1146.jpg"><meta itemprop="name" content="Перила №1146"><div class="work-image-container"><img class="work-image thezoom lazy the-zoom-img the-zoom-zoom_in" data-id="1146" thezoom-bigsrc="<?php echo get_template_directory_uri(); ?>//upload/kovka-na-zakaz/information_system_19/1/1/4/item_1146/information_items_1146.jpg" src="<?php echo get_template_directory_uri(); ?>/img/small_information_items_1146.jpg" data-no-retina="true" width="192" height="175" alt="" title=""></div><p class="text-center work-favourite-link"><a href="http://kovka-na-zakaz.ru/works/railings/#favourite_1146" title="Отметить работу" data-id="1146" class="">Артикул 1146</a><small>Добавить в избранное</small></p></li>
<li itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope="itemscope" class="class-b"><meta itemprop="image" content="http://kovka-na-zakaz.ru/upload/kovka-na-zakaz/information_system_19/1/0/6/item_1064/small_information_items_1064.jpg"><meta itemprop="name" content="Перила №1064"><div class="work-image-container"><img class="work-image thezoom lazy the-zoom-img the-zoom-zoom_in" data-id="1064" thezoom-bigsrc="<?php echo get_template_directory_uri(); ?>//upload/kovka-na-zakaz/information_system_19/1/0/6/item_1064/information_items_1064.jpg" src="<?php echo get_template_directory_uri(); ?>/img/small_information_items_1064.jpg" data-no-retina="true" width="192" height="185" alt="" title=""></div><p class="text-center work-favourite-link"><a href="http://kovka-na-zakaz.ru/works/railings/#favourite_1064" title="Отметить работу" data-id="1064" class="">Артикул 1064</a><small>Добавить в избранное</small></p></li>


<?php the_content(); ?>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gsap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/thezoom.min.js"></script>
<script type="text/javascript">
$(function() {

    $("img.thezoom").thezoom({
        rel: 'works',
        easing: 'easeQuad',
        hover_enabled: false,
        hover_scale: 1.4,
        hover_duration: 100,
        overlay_opacity: 0.5,
        close_button_text: 'Закрыть',
        social_buttons_enabled: false
    });

    $('img.thezoom').bind('click', function(){
        var item_id = $(this).data('id');
        $.ajax({
            url: "./",
            type: "POST",
            data: { id : item_id, makeviewpost: true },
            dataType: "json"
        });
    });
});
</script>

<!--для эффектов перехода-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>		</div>
	</div>
</div>			</div>
			<?php get_footer(); ?>