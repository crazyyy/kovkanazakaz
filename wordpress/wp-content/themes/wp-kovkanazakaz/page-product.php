<?php /* Template Name: Product Page */ get_header(); ?>

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
        <li itemtype="http://schema.org/ImageObject" itemscope="itemscope">
            <?php 
                $images = get_field('gallery'); 
                $image_1 = $images[0]; 
            ?>
            <meta 
                itemprop="contentUrl" 
                content="<?php echo $image_1[url]; ?>"
            >
            <meta itemprop="name" content="<?php the_title(); ?> №<?php the_ID(); ?>">
            <a href="<?php the_permalink(); ?>" class="work-image-container">
                <img 
                    src="<?php echo $image_1[url]; ?>" 
                    width="192" 
                    height="154" 
                    alt="<?php the_title(); ?>" 
                    title="<?php the_title(); ?>"
                >
            </a>
            <p class="text-center work-favourite-link">
                <?php the_title(); ?><br>
                <p class="price text-center">Стоимость <?php the_field('price'); ?> </p>
            </p>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul><!-- list-inline separateWorksList -->

    <div class="main-contenta">
        <?php the_content(); ?>
    </div>
    <!-- /.main-contenta -->

</div>
<?php get_footer(); ?>