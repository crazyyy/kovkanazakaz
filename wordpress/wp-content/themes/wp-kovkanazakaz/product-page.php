<?php /* Template Name: Product Page Template */ get_header(); ?>

<div class="page-real-content clearfix">
    <h1><?php the_title(); ?></h1>

    <div class="breadcrumbs">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- breadcrumbs -->

    <ul class="list-inline separateWorksList" itemtype="http://schema.org/ItemList" itemscope="itemscope">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $temp = $wp_query;
            $wp_query= null;
            query_posts('post_type=products'.'&showposts=100'.'&paged='.$paged);
            while (have_posts()) : the_post();
        ?>

        <li itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope="itemscope" class="class-b">
        
            <?php 
             $images = get_field('gallery'); 
             $image_1 = $images[0]; 
            ?>    
            
            <meta itemprop="image" 

                content="src= <?php echo $image_1[url]; ?>">
                
            <meta 
                itemprop="name" 
                content="<?php the_title(); ?>">
            <div class="work-image-container">
                <img 
                    class="work-image thezoom lazy the-zoom-img the-zoom-zoom_in" 
                    data-id="<?php the_ID(); ?>" 
                    thezoom-bigsrc="<?php echo $image_1[url]; ?>" 
                    src="<?php echo $image_1[url]; ?>" 
                    data-no-retina="true" 
                    width="192" 
                    height="144" 
                    alt="<?php the_title(); ?>" 
                    title="<?php the_title(); ?>">
                    
            </div>
            <p class="text-center work-favourite-link">
                <a 
                    href="http://kovka-na-zakaz.ru/works/railings/#favourite_<?php the_ID(); ?>" 
                    title="Отметить работу" 
                    data-id="<?php the_ID(); ?>">Артикул <?php the_ID(); ?>
                </a>
                <small>Добавить в избранное</small>
            </p>
        </li>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul><!-- list-inline separateWorksList -->

    <div class="main-contenta">
        <?php the_content(); ?>
    </div>
    <!-- /.main-contenta -->

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gsap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/thezoom.min.js"></script>
    <script type="text/javascript">
        $(function () {

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

            $('img.thezoom').bind('click', function () {
                var item_id = $(this).data('id');
                $.ajax({
                    url: "./",
                    type: "POST",
                    data: {
                        id: item_id,
                        makeviewpost: true
                    },
                    dataType: "json"
                });
            });
        });
    </script>
    <!--для эффектов перехода-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>

</div>
<?php get_footer(); ?>