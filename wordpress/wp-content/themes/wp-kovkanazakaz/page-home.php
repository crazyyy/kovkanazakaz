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
    </div><!-- page-real-content clearfix -->

<?php get_footer(); ?>