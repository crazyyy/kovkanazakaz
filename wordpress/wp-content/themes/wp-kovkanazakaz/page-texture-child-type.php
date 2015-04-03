<?php /* Template Name: Texture Child Type Page */ get_header(); ?>

    <div class="page-real-content texture-choise clearfix">
        <h1><?php the_title(); ?></h1>
        <div class="breadcrumbs">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div><!-- breadcrumbs -->
        <div class="main-contenta clearfix">
            <?php the_content(); ?>
        </div>
        <!-- /.main-contenta -->
    </div><!-- page-real-content texture-choise -->

<?php get_footer(); ?>