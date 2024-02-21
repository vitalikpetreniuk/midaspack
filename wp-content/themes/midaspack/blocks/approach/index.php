<section class="mp-approach pt-[70px] pb-[75px] desktopMin:pt-[100px] desktopMin:pb-[100px]">
    <div class="cont">
        <h2 class="mb-[25px] font-gilroy-bold text-content text-[25px] leading-[1.2]"><?php the_field('title') ?></h2>
        <ul class="flex flex-col desktopMin:flex-row justify-start gap-[20px]">
            <?php
            if (have_rows('items')):
                $i = 0;
                while (have_rows('items')) : the_row();
                    $i++;
                    switch ($i) {
                        case 1 :
                            $icon = renderAssetsSVG('svg/dev');
                            $bg = 'bg-[#ABD4EA]';
                            $h3padding = 'pl-[10px]';
                            break;
                        case 2 :
                            $icon = renderAssetsSVG('svg/test');
                            $bg = 'bg-[#58AAEB]';
                            $h3padding = 'pl-[11px]';
                            break;
                        case 3 :
                            $icon = renderAssetsSVG('svg/count');
                            $bg = 'bg-[#3B64A4]';
                            $h3padding = 'pl-[18px]';
                            break;
                        case 4 :
                            $icon = renderAssetsSVG('svg/delivery');
                            $bg = 'bg-[#1E1E5C]';
                            $h3padding = 'pl-[14px]';
                            break;
                    }
                    ?>
                    <li class="<?php the_sub_field('bg'); ?>">
                        <h3 class="pl-[6px]">
                            <?= $icon ?>
                            <span class="<?php the_sub_field('h3padding'); ?>"><?php the_sub_field('title'); ?></span></h3>
                        <p><?php the_sub_field('subtitle'); ?></p>
                    </li>
                <?php
                endwhile;
            endif; ?>
        </ul>
        <div class="mt-[20px] desktopMin:mt-[35px] flex flex-col items-center desktopMin:items-end gap-y-[10px]">
            <span class="font-proximanova-light font-light text-content text-[14px]/[1.5]"><?php esc_html_e('Did you find something for yourself', 'midas'); ?>?</span>
            <button class="mp-button mp-call-popup"><?php esc_html_e('Book a consultation', 'midas'); ?></button>
        </div>
    </div>
</section>