<section class="mp-about-intro">
    <div class="cont">
        <?php if (!get_field('hide_title')) : ?>
            <h2 class="title-h2"><?php the_title(); ?></h2>
        <?php endif; ?>

        <h2 class="title-h2 mt-[25px] desktopMin:mt-[30px]"><?php the_field('title') ?></h2>
        <div class="mt-[10px]">
            <p><?php the_field('subtitle') ?></p>
        </div>
        <div class="mt-[25px] rounded-[10px] overflow-hidden">
            <?= wp_get_attachment_image(get_field('image'), 'full', false, array(
                'class' => 'block w-full h-full object-cover'
            )) ?>
        </div>
    </div>
</section>