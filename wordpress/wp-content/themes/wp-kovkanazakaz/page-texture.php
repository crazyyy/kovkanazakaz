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
            $posts = get_field('texture-children');
        if( $posts ): ?>

        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>">   
                <div>
                    <p class="text-center inc-img-200-200">
                    <?php if ( has_post_thumbnail()) :
                        the_post_thumbnail('medium');   
                        else: ?>
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                    </p>
                    <p class="text-center"><?php the_title(); ?></p>
                </div>
            </a>
        <?php endforeach; ?>

        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div><!-- listBlocks -->

</div><!-- page-real-content texture-choise -->
<?php get_footer(); ?>