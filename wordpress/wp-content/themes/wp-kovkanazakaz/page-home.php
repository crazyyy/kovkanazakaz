<?php /* Template Name: Home Page */ get_header(); ?>
    <?php get_template_part('examples-container'); ?>

    <div class="page-real-content clearfix">
        <div class="three-steps-container">
            <h4 class="text-center" title="Художественная ковка на заказ в три простых шага">Художественная ковка на заказ в три простых шага:</h4>
            
            <div class="steps">
                <div class="step first">
                    <?php the_field('step-1'); ?>
                </div>
                <div class="between first">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/steps-circle-between-1.png" alt="" title="" width="100%" height="5">
                </div>
                <div class="step second">
                    <?php the_field('step-2'); ?>
                </div>
                <div class="between last">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/steps-circle-between-2.png" alt="" title="" width="100%" height="5">
                </div>
                <div class="step third">
                    <?php the_field('step-3'); ?>
                </div>
            </div>
            <div class="steps-circle-shadow first"></div>
            <div class="steps-circle-shadow second"></div>
            <div class="steps-circle-shadow third"></div>
        </div>
        <?php the_field('content1'); ?>

        <!-- 111111111111111 -->
       



<ul class="list-inline separateWorksList mainPageList">




<li><div class="work-image-container">
<a href="/works/railings/#item-1310" 
title="Кованые перила">
<img class="work-image"
 data-id="1310" 
 thezoom-bigsrc="/upload/kovka-na-zakaz/information_system_19/1/3/1/item_1310/information_items_1310.jpg" 
 src="/upload/kovka-na-zakaz/information_system_19/1/3/1/item_1310/small_information_items_1310.jpg" 
 data-no-retina="true" width="192" height="128" 
 alt="Кованые перила" title="Кованые перила">
 </a></div>
 <p class="text-center">
 <a href="/works/railings/#item-1310" 
 title="Кованые перила">Кованые перила</a></p></li>




</ul>


        <?php the_field('content2'); ?>


   
<div class="main-page-reviews-list clearfix">
    
    <?php if( have_rows('review-body', 357) ): ?>

        <?php while( have_rows('review-body', 357) ): the_row(); 

                // vars
                $name = get_sub_field('name');
                $date = get_sub_field('date');
                $foto = get_sub_field('foto');
                $content = get_sub_field('content');
                // extract Y,M,D
                $y = substr($date, 0, 4);
                $m = substr($date, 4, 2);
                $d = substr($date, 6, 2);

                // create UNIX
                $time = strtotime("{$d}-{$m}-{$y}");
                
            ?>
            <div class="position-1">
                <div class="review">
                    <div class="review-text-container">
                        <div class="review-text"><time class="review-datetime" datetime="2014-10-10"><?php echo date('d/m/Y', $time); ?></time><?php echo $content; ?>
                        </div>
                    </div>
                    <div class="review-author-container clearfix">
                        <div class="review-author-image"><img src="<?php echo $foto; ?>" width="50" height="50" alt="" title="">
                        </div>
                        <div class="review-author-creds floated">
                            <div class="review-author"><?php echo $name; ?></div>
                        </div>
                    </div>
                </div>
            </div>


            <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- page-reviews-list clearfix -->
      




        <?php the_field('content3'); ?>

    </div><!-- page-real-content clearfix -->

<?php get_footer(); ?>