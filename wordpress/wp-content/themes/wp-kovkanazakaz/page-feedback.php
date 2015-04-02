<?php /* Template Name: FeedBack Template */ get_header(); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	    <div class="breadcrumbs">
	        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	    </div><!-- breadcrumbs -->

		<div class="clearfix full-feeedback-form">
		    <div class="feedback-form-left">
		    	<?php echo do_shortcode('[contact-form-7 id="141" title="Обратная связь"]'); ?>
		    </div>
		    <div class="feedback-form-right">
		        <?php the_content(); ?>
		    </div>
		</div>

	<?php endwhile; else: // If 404 page error ?>
		<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
	<?php endif; ?>

<?php get_footer(); ?>