<div class="examples-container">
    <div class="examples-image-slider">
        <div class="parallax-container">

            <ul class="clearfix parallax">        
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $temp = $wp_query;
                $wp_query= null;
                query_posts('post_type=products'.'&showposts=15'.'&paged='.$paged);
                while (have_posts()) : the_post();
            ?>
                <li>
                    <?php 
                        $images = get_field('gallery'); 
                        $image_1 = $images[0]; 
                    ?> 
                    <img class="lazy" 
                        data-src="<?php echo $image_1[url]; ?>" 
                        src="<?php echo $image_1[url]; ?>" 
                        alt="<?php the_title(); ?>" 
                        title="<?php the_title(); ?>" 
                        width="125" height="94">
                </li>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            </ul>
        </div><!-- parallax-container -->

        <img src="<?php echo get_template_directory_uri(); ?>/img/examples-gradient-bg.png" alt="" title="" class="gradient" width="70%" height="100%">
    </div><!-- examples-image-slider -->
    <div class="shadow">
        <img src="<?php echo get_template_directory_uri(); ?>/img/examples-shadow.png" alt="" title="" width="26" height="108">
    </div>
    <div class="works-link">
        <a href="http://kovkanazakaz.com/forging/works/index.html" title="Сотни готовых работ"> Готовые работы</a>&nbsp;→
    </div>
</div><!-- examples-container -->