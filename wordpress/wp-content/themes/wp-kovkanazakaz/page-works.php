<?php /* Template Name: Works Page */ get_header(); ?>

<div class="page-real-content ready-works clearfix">
    <h1><?php the_title(); ?></h1>

    <div class="breadcrumbs">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div><!-- breadcrumbs -->

<p>Наши дизайнеры и кузнецы могут дополнить, объединить или исправить любые представленные кованые перила по вашим пожеланиям. Мы сделаем для вас соответствующий именно вашим требованиям уникальный дизайн-проект кованого изделия, который вы больше нигде не найдете!</p>

<div class="listFilterTableContainer"><table class="listFilterTable table"><tbody><tr><td width="15%" rowspan="2"><div class="display-all-container"><a href="./" title="Показать все кованые перила" class="active display-all">
                                    Все кованые перила</a></div></td><td rowspan="2" width="51"><div class="class-circle class-a"></div></td><td width="22%"><a href="./?class=a" title="Бюджетные кованые перила по цене до 8 000 руб. / пог.м." class="class-a">
                                Бюджетные
                            </a></td><td rowspan="2" width="51"><div class="class-circle class-b"></div></td><td width="22%"><a href="./?class=b" title="Стандартные кованые перила по цене от 8 000 до 12 000 руб. / пог.м." class="class-b">
                                Стандартные
                            </a></td><td rowspan="2" width="51"><div class="class-circle class-c"></div></td><td width="22%"><a href="./?class=c" title="Премиум кованые перила по цене от 12 000 руб. / пог.м." class="class-c">
                                Премиум
                            </a></td><td rowspan="2">
                                    Вывести <a href="./?sort=asc" title="Кованые перила по порядку" class="pseudo">по порядку</a></td></tr><tr><td><small class="class-a">кованые перила до 8 000 руб. / пог.м.</small></td><td><small class="class-b">кованые перила от 8 000 до 12 000 руб. / пог.м.</small></td><td><small class="class-c">кованые перила от 12 000 руб. / пог.м.</small></td></tr></tbody></table>
                                    </div>

    <ul class="list-inline separateWorksList">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $temp = $wp_query;
            $wp_query= null;
            query_posts('post_type=products_ready'.'&showposts=100'.'&paged='.$paged);
            while (have_posts()) : the_post();
        ?>

<?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
    $url = $thumb['0'];
?>
<li 
    itemtype="http://schema.org/ImageObject" 
    itemscope="itemscope" 
    class="class-c">
    <meta 
        itemprop="contentUrl" 
        content="<?php echo $url ?>">
    <meta 
        itemprop="name" 
        content="<?php the_title(); ?> №<?php the_ID(); ?>">
    <div 
        class="work-image-container">
        <a 
            href="<?php echo $url ?>" 
            data-imagelightbox="works" 
            data-id="<?php the_ID(); ?>">
            <img 
                class="work-image lazy" 
                src="<?php echo $url ?>" 
                data-no-retina="true" 
                width="192" height="154" 
                alt="Артикул <?php the_ID(); ?>" 
                title="Артикул <?php the_ID(); ?>">
        </a>
    </div>
    <p 
        class="text-center work-favourite-link">
        <a 
        href="#favourite_<?php the_ID(); ?>" 
        title="Отложить Артикул <?php the_ID(); ?>" 
        data-id="<?php the_ID(); ?>" 
        class="active">Артикул <?php the_ID(); ?></a>
        <small style="display: none;">Добавить в избранное</small>
    </p>
</li>



        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul><!-- list-inline separateWorksList -->

    <div class="main-contenta">
        <?php the_content(); ?>
    </div>
    <!-- /.main-contenta -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/imagelightbox.js"></script>
<script>
$(function(){

    $(function(){
        // on load of the page: switch to the currently selected item
        var hash = window.location.hash;
        var itemLoadId = hash.replace(/\D/g,'');
        if (('#item-' + itemLoadId) == hash){
            $('a[data-id='+itemLoadId+']').click();
        }

        if (('#favourite_' + itemLoadId) == hash){
            window.location.hash = '';
            $('a[data-id='+itemLoadId+']').click();
        }
    });
});
</script>


</div><!-- ready-works -->
<?php get_footer(); ?>