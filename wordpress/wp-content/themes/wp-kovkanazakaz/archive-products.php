<?php /* Template Name: Product Page */ get_header(); ?>

<div class="page-real-content clearfix">
    <h1><?php the_title(); ?></h1>

    <div class="breadcrumbs">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- breadcrumbs -->

    <ul class="list-inline separateWorksList" itemtype="http://schema.org/ItemList" itemscope="itemscope">
       <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
                Стоимость 5000 <br>

            </p>
        </li>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </ul><!-- list-inline separateWorksList -->

</div>
<?php get_footer(); ?>