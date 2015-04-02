<?php /* Template Name: Home Page */ get_header(); ?>
    <?php get_template_part('examples-container'); ?>

    <div class="page-real-content clearfix">
        <div class="three-steps-container">
            <h4 class="text-center" title="Художественная ковка на заказ в три простых шага">Художественная ковка на&nbsp;заказ в&nbsp;три простых шага:</h4>
            <div class="steps">
                <div class="step first">
                    Выбрать
                    <br> <a href="http://kovkanazakaz.com/forging/works/index.html" title="Выполненные работы по ковке">кухонный уголок</a>
                    <br> или <a href="http://kovkanazakaz.com/forging/sketches/index.html" title="Эскизы уголков">эскиз</a>
                </div>
                <div class="between first">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/steps-circle-between-1.png" alt="" title="" width="100%" height="5">
                </div>
                <div class="step second">
                    Получить
                    <br> <a href="http://kovkanazakaz.com/contacts/feedback/index.html" title="Пришлите предложение конкурентов и получите скидку!">индивидуальный расчет</a>
                </div>
                <div class="between last">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/steps-circle-between-2.png" alt="" title="" width="100%" height="5">
                </div>
                <div class="step third">
                    Согласовать
                    <br> <a href="http://kovkanazakaz.com/shipping/index.html" title="Доставка кованых изделий">доставку</a>
                    <br> и&nbsp;<a href="http://kovkanazakaz.com/mounting/index.html" title="Монтаж кованых изделий">монтаж</a>
                </div>
            </div>
            <div class="steps-circle-shadow first"></div>
            <div class="steps-circle-shadow second"></div>
            <div class="steps-circle-shadow third"></div>
        </div>
    </div><!-- page-real-content clearfix -->

<?php get_footer(); ?>