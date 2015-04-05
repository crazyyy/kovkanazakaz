<?php /* Template Name: Works Page */ get_header(); ?>

<div class="page-real-content ready-works clearfix">
    <h1><?php the_title(); ?></h1>

    <div class="breadcrumbs">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- breadcrumbs -->

    <ul class="list-inline separateWorksList" itemtype="http://schema.org/ItemList" itemscope="itemscope">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $temp = $wp_query;
            $wp_query= null;
            query_posts('post_type=products_ready'.'&showposts=100'.'&paged='.$paged);
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

    <div class="main-contenta">
        <?php the_content(); ?>
    </div>
    <!-- /.main-contenta -->

</div><!-- ready-works -->
<?php get_footer(); ?>