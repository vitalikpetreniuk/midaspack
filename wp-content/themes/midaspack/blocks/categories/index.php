<section class="mp-categories bg-[#F8F8F8] max-w-[1440px] mx-auto py-[60px] desktopMin:py-[80px]">
    <div class="cont">
        <h2 class="mb-[25px] font-gilroy-bold text-content text-[25px]/[1.2]"><?php the_field('title') ?></h2>
        <ul class="flex flex-wrap justify-between gap-[20px]">
            <?php
            if (have_rows('categories')):
                $i = 0;
                while (have_rows('categories')) : the_row();
                    $i++;
                    switch ($i) {
                        case 1 :
                            $class1 = 'bg-accent_hover';
                            $class2 = 'hover:text-accent_hover';
                            break;
                        case 2 :
                            $class1 = 'bg-cornflower';
                            $class2 = 'hover:text-cornflower';
                            break;
                        case 3 :
                            $class1 = 'bg-celestial';
                            $class2 = 'hover:text-celestial';
                            break;
                        case 4 :
                            $class1 = 'bg-topaz';
                            $class2 = 'hover:text-topaz';
                            break;
                        case 5 :
                            $class1 = 'bg-graphite';
                            $class2 = 'hover:text-graphite';
                            break;
                        case 6 :
                            $class1 = 'bg-accent';
                            $class2 = 'hover:text-accent';
                            break;
                    }
                    /* @var WP_Term $category */
                    $category = get_sub_field('category');
                    if (get_sub_field('size') == 'half') {
                        $class = 'tabletMin:w-half-gap';
                    } else {
                        $class = 'tabletMin:w-half-gap desktopMin:w-quarter-gap';
                    }
                    if (!$category) continue;
                    ?>
                    <li class="w-full <?= $class ?> <?= $class1 ?? '' ?>">
                        <?= wp_get_attachment_image(get_sub_field('image'), 'full') ?>
                        <div class="!top-auto bottom-[24px] desktopMin:bottom-[30px]">
                            <h4 class="block title-h4 text-white"><?= $category->name ?></h4>
                            <a href="<?= get_term_link($category) ?>"
                               class="<?= $class2 ?? '' ?>"><?php esc_html_e('More', 'midas'); ?></a>
                        </div>
                    </li>
                <?php
                endwhile;
            endif; ?>
        </ul>
    </div>
</section>