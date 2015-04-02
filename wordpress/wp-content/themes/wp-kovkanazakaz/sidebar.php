<div class="sidebar" id="column-left">
    <div class="sidebar-content">

        <a href="<?php echo home_url(); ?>" title="<?php wp_title( '' ); ?>" class="logo" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" width="223" height="94"></a>
        <div class="slogan">Изготавливаем с 2005 года</div>

        <?php wpeSideNav(); ?>

        <div id="percent-sticker">
            <a href="#">Присылайте предложение конкурентов и скидка ваша!</a>
        </div>

        <div id="offers-form-container">
            <h4>Подписка на скидки и акции</h4>
            <p>Заполните форму и будьте в курсе предстоящих акций и скидок на кованые изделия:</p>
            <form action="http://cp.unisender.com/ru/subscribe?hash=5a8149o5ng4npzngmnqpmraby4ypeqzsgfrt91jy&list_ids=2394354" method="post" class="form">
                <div class="form-group">
                    <input type="text" name="Name" class="form-control" id="subscribeName" placeholder="Ваше имя">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="subscribeEmail" placeholder="Электронная почта">
                </div>
                <div class="orField">
                    <p>или</p>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" id="subscribePhone" placeholder="Телефон для sms">
                </div>
                <div class="button-container">
                    <input type="hidden" name="charset" value="utf-8">
                    <button type="submit" class="btn btn-default"> Оформить подписку </button>
                </div>
            </form>
        </div>

    </div><!-- sidebar-content -->
    <div id="sidebar-gradient-bg"></div>
</div><!-- sidebar -->