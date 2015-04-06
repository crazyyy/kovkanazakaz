<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

	<!-- css + javascript -->
	<?php wp_head(); ?>

</head> 
<body <?php body_class(); ?>>


<div class="wrapper">
    <div class="content-filter main-content-container">
        <div class="page-container">
            <div id="column-container" class="clearfix">

            	<?php get_sidebar(); ?>

                <div class="page-content" id="column-right">

                	<?php wpeHeadNav(); ?>

                	<div class="contacts-container">
                        <div class="contacts">
                            <div class="phone-container">
                                <strong class="phone">+7 (495) 960-36-29</strong> (телефон в Москве)
                            </div>
                            <div class="callback-container">
                                <ul>
                                    <li class="top-callback-form-container">
                                        <a href="http://kovkanazakaz.com/index.html#top-callback-form" title="Оставьте свой номер телефона и мы перезвоним в течение 15 минут" class="pseudo">Перезвоните мне</a>
                                        <div id="top-callback-form">
                                            <form class="contact-form" action="http://kovkanazakaz.com/contacts/feedback/" method="post">
                                                <div class="loader">
                                                    <p class="message"></p>
                                                </div>
                                                <h4>Мы обязательно перезвоним</h4>
                                                <div class="form-group">
                                                    <label class="control-label" for="phone">Ваш телефон:</label>
                                                    <div>
                                                        <input type="text" class="phone form-control" id="callback-phone" name="phone" placeholder="Ваш телефон для звонка менеджера">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="button-container-inline">
                                                        <input type="hidden" value="53b6755f33719" name="offer-id">
                                                        <input type="submit" class="btn btn-success" name="submit" value=" Перезвоните мне! ">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="mail-link">
                                        <a href="<?php echo home_url(); ?>/napisat-nam-pismo.htm" title="Написать нам письмо">Написать нам письмо</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="online-chat-container">
                            <div class="online-chat clearfix" id="online-chat">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/manager-photo.jpg" alt="Менеджер онлайн" title="Менеджер онлайн" width="67" height="67">
                                </div>
                                <div class="description">
                                    <p>Менеджер сейчас на сайте</p>
                                    <div class="button-container">
                                        <button type="submit" class="btn btn-default"><img src="<?php echo get_template_directory_uri(); ?>/img/online-chat-icon.png" alt="" title="" class="icon" width="17" height="17"> Онлайн-консультация </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>