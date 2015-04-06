<?php /* Template Name: Home Page */ get_header(); ?>
    <?php get_template_part('examples-container'); ?>

    <div class="page-real-content clearfix">
        <div class="three-steps-container">

            <h4 class="text-center" title="Художественная ковка на заказ в три простых шага">Художественная ковка на заказ в три простых шага:</h4>
            
            <div class="steps">
                <div class="step first">
                    <?php the_field('step-1'); ?>
                </div>
                <div class="between first">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/steps-circle-between-1.png" alt="" title="" width="100%" height="5">
                </div>
                <div class="step second">
                    <?php the_field('step-2'); ?>
                </div>
                <div class="between last">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/steps-circle-between-2.png" alt="" title="" width="100%" height="5">
                </div>
                <div class="step third">
                    <?php the_field('step-3'); ?>
                </div>
            </div>
            <div class="steps-circle-shadow first"></div>
            <div class="steps-circle-shadow second"></div>
            <div class="steps-circle-shadow third"></div>
        </div>
        <?php the_field('content1'); ?>
<!-- list-inline separateWorksList -->
           <ul class="list-inline separateWorksList" itemtype="http://schema.org/ItemList" itemscope="itemscope">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $temp = $wp_query;
            $wp_query= null;
            query_posts('post_type=products_ready'.'&showposts=12'.'&paged='.$paged);
            while (have_posts()) : the_post();
        ?>
        <li itemtype="http://schema.org/ImageObject" itemscope="itemscope">
        <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
            $url = $thumb['0'];
        ?>
            <div>
            <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );; ?>" class="work-image-container work-image thezoom lazy the-zoom-img the-zoom-zoom_in" rel="lightbox">

            <img 
                src="<?php echo $url  ?>" 
                data-id="<?php the_ID(); ?>"
                title="<?php the_title(); ?>" 
                alt="<?php the_title(); ?>" 
            />

            </a>
            </div>
            <p class="text-center work-favourite-link">
                <a 
                    href="#favourite_<?php the_ID(); ?>" 
                    title="Отметить работу" 
                    data-id="<?php the_ID(); ?>" 
                >
                    Артикул <?php the_ID(); ?>
                </a>
            </p>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul><!-- list-inline separateWorksList -->


        <?php the_field('content2'); ?>


   
    <div class="main-page-reviews-list clearfix">
    
        <?php if( have_rows('review-body', 357) ): ?>

            <?php while( have_rows('review-body', 357) ): the_row(); 

                // vars
                $name = get_sub_field('name');
                $date = get_sub_field('date');
                $foto = get_sub_field('foto');
                $content = get_sub_field('content');
                // extract Y,M,D
                $y = substr($date, 0, 4);
                $m = substr($date, 4, 2);
                $d = substr($date, 6, 2);

                // create UNIX
                $time = strtotime("{$d}-{$m}-{$y}");
                
            ?>
<div class="position-1">
    <div class="review">
        <div class="review-text-container">
            <div class="review-text"><time class="review-datetime" datetime="2014-10-10">10.10.14</time>Спасибо большое этой компании за&nbsp;кованный забор на&nbsp;даче. Мы&nbsp;с&nbsp;мужем долго не&nbsp;могли определиться,что именно мы&nbsp;хотим. Ребята нам&nbsp;предложили массу вариантов,из которых мы&nbsp;потом и&nbsp;выбрали. Сделали очень быстро. Сразу видно,что за&nbsp;дело мастера взялись. Доставили не&nbsp;только быстро, но&nbsp;и&nbsp;аккуратно. Ничего не&nbsp;ободралось. Установили,можно сказать, моментально. Да&nbsp;при&nbsp;этом цена за&nbsp;все&nbsp;получилось сравнительно низкая. Так&nbsp;что&nbsp;мы&nbsp;не&nbsp;только красивый забор получили,но еще&nbsp;и&nbsp;семейный бюджет сэкономили.
            </div>
        </div>
    <div class="review-author-container clearfix"><div class="review-author-image"><img src="/upload/kovka-na-zakaz/information_system_20/1/2/8/item_1284/small_information_items_property_87.png" data-at2x="/upload/kovka-na-zakaz/information_system_20/1/2/8/item_1284/information_items_property_87.png" width="50" height="50" alt="" title=""></div>
    <div class="review-author-creds floated">
        <div class="review-author">Дарья</div>
    </div>
        </div>
    </div>
</div>


            <?php endwhile; ?>
        <?php endif; ?>
     
    </div><!-- page-reviews-list clearfix -->
      




        <?php the_field('content3'); ?>

    </div><!-- page-real-content clearfix -->

<?php get_footer(); ?>