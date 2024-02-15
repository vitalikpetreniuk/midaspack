<section class="mp-about-info mt-[60px] desktopMin:mt-[110px]">
    <div class="cont">
        <div class="w-full box-border mt-[40px] desktopMin:mt-0 desktopMin:w-6/12 desktopMin:pr-[40px]">
            <div class="relative pb-[72.5%] rounded-[10px] overflow-hidden">
                <?= wp_get_attachment_image(get_field('image'), 'full', false, array(
                    'class' => 'absolute block w-full h-full object-cover'
                )) ?>
            </div>
        </div>
        <div class="w-full desktopMin:w-6/12">
            <h2><?php the_field('title') ?></h2>
            <?php if (get_field('subtitle')) : ?>
                <p><?php the_field('subtitle') ?></p>
            <?php endif; ?>
            <ul class="mt-[10px]">
                <?php
                if (have_rows('items')):
                    while (have_rows('items')) : the_row(); ?>
                        <li>
                            <div><?php the_sub_field('number') ?></div>
                            <span><?php the_sub_field('title') ?></span>
                        </li>
                    <?php
                    endwhile;
                endif; ?>
            </ul>
        </div>
    </div>
</section>