<?php /* Template Name: FeedBack Template */ get_header(); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	    <div class="breadcrumbs">
	        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	    </div><!-- breadcrumbs -->

<div class="clearfix full-feeedback-form">
<!--     <form class="form dropzone" id="sketch-form-validate" method="post" enctype="multipart/form-data"> -->
        <div class="feedback-form-left">





            <div class="form-group">
                <label class="control-label" for="name">Имя:</label>
                <div>
                    [text name id:name class:form-control placeholder "Как вас зовут?"]
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="comment">Вопросы, комментарии и пожелания:</label>
                <div>
                    [textarea comment id:comment class:form-control placeholder "Артикул, пожелания, комментарии, адрес доставки, удобное время для звонка менеджера, любые дополнительные условия"]
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="attachment">Вы можете прикрепить до 5 файлов:</label>
                <div>
                    <div id="dropzone-clickable">
                        <p>Прикрепите файлы - перетащите в эту область или <a>выберите</a>.</p>
                        <p class="text-muted">Мы принимаем документы (Word, Excel), чертежи (.cdr, .dwg) и изображения (.jpg, .bmp и другие).</p>
                    </div>

                    <div class="fallback">
                        [file attachment]
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="phone">Телефон:</label>
                <div>
                    <input type="text" class="phone form-control" id="phone" name="phone" placeholder="Ваш телефон для звонка менеджера" value="">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="email">Электронная почта:</label>
                <div>
                    [email email id:email class:form-control placeholder "Ваш e-mail"]
                </div>
            </div>

            <div class="form-group">
                <div>
                    <div class="checkbox">
                        [checkbox subscribe use_label_element "Я хочу получать информацию о скидках и акциях<br><small>(не чаще 1 раза в месяц)</small>"]
                    </div>
                </div>
            </div>




        </div>
        <div class="feedback-form-right">
            <?php the_content(); ?>
        </div>
</div>




	<?php endwhile; else: // If 404 page error ?>
		<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
	<?php endif; ?>

<?php get_footer(); ?>
