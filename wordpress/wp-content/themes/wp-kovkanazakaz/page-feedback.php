<?php /* Template Name: FeedBack Template */ get_header(); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	    <div class="breadcrumbs">
	        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	    </div><!-- breadcrumbs -->
	    
	   <div class="clearfix">
	        <form class="form dropzone" id="sketch-form-validate" method="post" enctype="multipart/form-data">
	            <div class="feedback-form-left">
	                <div class="loader">
	                    <p class="message"></p>
	                </div>
	                <input type="hidden" name="action" value="send">
	                <div class="form-group">
	                    <label class="control-label" for="name">Имя:</label>
	                    <div>
	                        <input type="text" class="form-control" id="name" name="name" placeholder="Как вас зовут?" value="">
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="control-label" for="comment">Вопросы, комментарии и пожелания:</label>
	                    <div>
	                        <textarea class="form-control" rows="4" id="comment" name="comment" placeholder="Артикул, пожелания, комментарии, адрес доставки, удобное время для звонка менеджера, любые дополнительные условия"></textarea>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="control-label" for="files">Вы можете прикрепить до 5 файлов:</label>
	                    <div>
	                    </div>
	                    <div>
	                        <div id="dropzone-clickable">
	                            <p>Прикрепите файлы - перетащите в&nbsp;эту область или <a>выберите</a>.</p>
	                            <p class="text-muted">Мы&nbsp;принимаем документы (Word, Excel), чертежи (.cdr, .dwg) и&nbsp;изображения (.jpg, .bmp и&nbsp;другие).</p>
	                        </div>
	                        <div id="dropzone-previews"></div>
	                        <div class="fallback">
	                            <input name="attachment[]" type="file" multiple="">
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
	                        <input type="email" class="form-control" id="email" name="email" placeholder="Ваш e-mail" value="">
	                    </div>
	                </div>

	                <div class="form-group">
	                    <div>
	                        <div class="checkbox">
	                            <label>
	                                <input type="checkbox" checked="true" name="subscribe"> Я хочу получать информацию о&nbsp;скидках и&nbsp;акциях
	                                <br><small>(не&nbsp;чаще 1&nbsp;раза в&nbsp;месяц)</small>
	                            </label>
	                        </div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <div>
	                        <span class=""><input type="submit" class="btn" name="sketchsubmit" value=" Отправить сообщение " disabled="true"></span> <span id="fieldsList">Осталось заполнить поля: <span></span></span>
	                    </div>
	                </div>
	            </div>
	            <div class="feedback-form-right">
	                <p class="sales-info">Мы&nbsp;даём вам уникальную возможность сэкономить на&nbsp;заказе художественной ковки. Воспользуйтесь формой и&nbsp;пришлите нам коммерческое предложение конкурентов по&nbsp;вашему заказу, а&nbsp;мы&nbsp;предоставим вам скидку.</p>
	            </div>
	        </form>
	    </div>

	<?php endwhile; else: // If 404 page error ?>
		<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
	<?php endif; ?>

<?php get_footer(); ?>
