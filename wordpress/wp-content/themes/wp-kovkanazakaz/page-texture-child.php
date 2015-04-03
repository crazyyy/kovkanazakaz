<?php /* Template Name: Texture Child Page */ get_header(); ?>

    <div class="page-real-content texture-choise clearfix">
        <h1><?php the_title(); ?></h1>
        <div class="breadcrumbs">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div><!-- breadcrumbs -->
        <div class="main-contenta clearfix">
            <?php the_content(); ?>

            <ul class="list-inline page-texture-child-limba separateWorksList" itemtype="http://schema.org/ItemList" itemscope="itemscope">
                <?php 
                    $posts = get_field('texture-children');
                if( $posts ): ?>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                <li itemtype="http://schema.org/ImageObject" itemscope="itemscope">
                    <!-- post thumbnail -->
                    <a rel="nofollow" class="work-image-container" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php if ( has_post_thumbnail()) :
                            the_post_thumbnail('medium');   
                        else: ?>
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?></a>
                    <!-- /post thumbnail -->
                    <p class="text-center">
                        <a href="<?php the_permalink(); ?>" >
                           <?php the_title(); ?>
                        </a>
                    </p>
                </li>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </ul><!-- list-inline separateWorksList -->
        </div>
        <!-- /.main-contenta -->
    </div><!-- page-real-content texture-choise -->
<?php get_footer(); ?>