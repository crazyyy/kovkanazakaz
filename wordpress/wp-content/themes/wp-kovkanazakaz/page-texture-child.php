<?php /* Template Name: Texture Page */ get_header(); ?>



<div class="page-real-content texture-choise clearfix">
    <h1><?php the_title(); ?></h1>
    <div class="breadcrumbs">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- breadcrumbs -->
    <div class="main-contenta">
        <?php the_content(); ?>
    </div>
    <!-- /.main-contenta -->

<div class="listBlocks">

        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $temp = $wp_query;
            $wp_query= null;
            query_posts('post_type=products'.'&showposts=100'.'&paged='.$paged);
            while (have_posts()) : the_post();
        ?>
<a href="/works/railings/" title="Перила">      

    <?php 
                $images = get_field('gallery'); 
                $image_1 = $images[0]; 
            ?>


<div><p class="text-center"><img src="<?php echo $image_1[url]; ?>" width="200" height="200" alt="Перила" title="Перила"></p><p class="text-center">Перила</p></div></a>


</a><!-- listBlocks -->

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
</div>

</div><!-- page-real-content texture-choise -->


<?php get_footer(); ?>