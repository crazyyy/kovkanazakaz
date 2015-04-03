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

$posts = get_field('relationship_field_name');

if( $posts ): ?>

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
<a href="<?php the_permalink(); ?>">   

    <div>
        <p class="text-center">
            <img src="<?php echo $image_1[url]; ?>" width="200" height="200" alt="Перила" title="Перила">
        </p>
        <p class="text-center">Перила</p>
    </div>
            
</a>
    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>




</div><!-- listBlocks -->

</div><!-- page-real-content texture-choise -->


<?php get_footer(); ?>