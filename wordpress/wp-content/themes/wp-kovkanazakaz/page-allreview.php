<?php /* Template Name: Allreview */ get_header(); ?>


<div class="page-real-content clearfix">
    <h1><?php the_title(); ?></h1>

    <div class="breadcrumbs">
        <?php if (function_exists( 'dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>
    <!-- breadcrumbs -->

    <div class="content-container">
        <p>Наши клиенты хорошо отзываются о проделанной работе. Мы будем рады увидеть и ваш отзыв на этой странице, если вы уже являетесь нашим клиентом и заказывали у нас художественную ковку, монтаж или покраску кованых изделий. Если вы только планируете впервые стать нашим клиентом, ознакомьтесь, пожалуйста, с размещенными на этой странице отзывами.</p>
        <p>Все рецензии публикуются администратором ресурса после проверки на спам, в текстах отзывов сохранена авторская орфография и пунктуация.</p>       
    </div>
    <!-- /.content-container -->
    
    <div class="reviw-and-from clearfix">

        <div class="reviews-form-left">
            <div class="page-reviews-list clearfix">


        <?php if( have_rows('review-body') ): ?>

            <?php while( have_rows('review-body') ): the_row(); 

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
              <div class="review odd clearfix">
                    <div class="review-text-container">
                        <div class="review-text">
                            <time class="review-datetime"><?php echo date('d/m/Y', $time); ?></time><?php echo $content; ?></div>
                    </div>
                    <div class="review-author-container">
                        <div class="review-author-image"><img src="<?php echo $foto; ?>" width="50" height="50" alt="" title="">
                        </div>
                        <div class="review-author-creds floated">
                            <div class="review-author"><?php echo $name; ?></div>
                        </div>
                    </div>
                </div><!-- review odd clearfix -->


            <?php endwhile; ?>
        <?php endif; ?>

            </div><!-- page-reviews-list clearfix -->
        </div><!-- reviews-form-left -->


        <div class="reviews-form-right">
            <form class="form dropzone" id="reviews-form-validate" method="post" enctype="multipart/form-data" action="/reviews/" novalidate="novalidate">
                <input type="hidden" name="action" value="send">
                <div class="loader">
                    <p class="message"></p>
                </div>
                <div class="form-group">
                    <label for="author">Имя:</label>
                    <input class="form-control" type="text" id="author" name="author" value="" placeholder="Введите ваше имя">
                </div>
                <div class="form-group">
                    <label for="contacts">Контактная информация:</label>
                    <input class="form-control" type="text" id="contacts" name="contacts" value="" placeholder="Любой контакт для связи">
                </div>
                <input type="hidden" name="subject" size="50" value="">
                <label for="attachment">Приложите фотографию или письмо:</label>
                <div>
                    <div id="dropzone-clickable" class="dz-clickable">
                        <p>Прикрепите файлы - перетащите в эту область или <a>выберите</a>.</p>
                        <p class="text-muted">Мы принимаем любые изображения.</p>
                    </div>
                    <div id="dropzone-previews"></div>
                </div>
                <div class="form-group">
                    <label for="text_item">Текст отзыва:</label>
                    <textarea class="form-control" type="text" name="text_item" id="text_item" cols="38" rows="6"></textarea>
                </div>
                <div class="button-container">
                    <input type="submit" name="submit_question" class="btn btn-default" value=" Отправить отзыв " disabled="disabled">
                </div>
                <div class="dz-default dz-message"><span>Drop files here to upload</span>
                </div>
            </form>
        </div><!-- reviews-form-right -->

    </div><!-- reviw-and-from clearfix -->





</div>
<?php get_footer(); ?>