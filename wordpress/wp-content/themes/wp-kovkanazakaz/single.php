<?php get_header(); ?>

    <?php get_template_part('examples-container'); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="page-real-content clearfix">

            <h1><?php the_title(); ?></h1>
            <div class="breadcrumbs"> </div>

            <?php the_content(); ?>

        </div><!-- page-real-content clearfix -->

    <?php endwhile; else: // If 404 page error ?>

        <div class="page-real-content clearfix">
            <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
            </div><!-- page-real-content clearfix -->
    <?php endif; ?>

<?php get_footer(); ?>