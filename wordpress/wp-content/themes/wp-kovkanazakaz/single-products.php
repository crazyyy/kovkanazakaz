<?php get_header(); ?>

    <?php get_template_part('examples-container'); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="page-real-content product-single-page clearfix">
            <h1><?php the_title(); ?></h1>
            <div class="breadcrumbs"> </div>
                <div class="first-imager">
                <?php 
                    $images = get_field('gallery'); 
                    $image_1 = $images[0]; 
                ?>              
                <img src="<?php echo $image_1[url]; ?>" alt="<?php the_title(); ?>">
                <a href="#" class="buy-btn">Купить</a>
                <span class="price">Стоимость <?php the_field('price'); ?><img src="<?php echo get_template_directory_uri(); ?>/img/rouble.png"></span>
            </div><!-- first-imager -->
            <?php the_content(); ?>

            <div class="product-gallery">
                <?php if(get_field('gallery')):?>
                    <?php foreach (get_field('gallery') as $gal ):?>
                        <a rel="lightbox" href="<?php echo $gal['url']?>" title="<?php echo $gal['caption'] ?>"><img src="<?php echo $gal['sizes']['thumbnail']?>" alt="" /></a>
                    <?php endforeach ?>
                <?php endif; ?>               
            </div>
            <!-- /.product-gallery -->

        </div><!-- page-real-content clearfix -->
    <?php endwhile; else: // If 404 page error ?>
        <div class="page-real-content clearfix">
            <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
            </div><!-- page-real-content clearfix -->
    <?php endif; ?>
<?php get_footer(); ?>