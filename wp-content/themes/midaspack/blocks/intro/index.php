<section class="mp-intro relative max-w-[1440px] mx-auto">
    <div class="overflow-hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php

                // Check rows exists.
                if (have_rows('slider')):

                    // Loop through rows.
                    while (have_rows('slider')) : the_row(); ?>
                        <div class="swiper-slide h-screen-102 max-h-screen-102">
                            <picture>
                                <source srcset="<?= wp_get_attachment_image_url(get_sub_field('desktop_image'), 'full') ?>"
                                        media="(min-width:1100px)"/>
                                <img src="<?= wp_get_attachment_image_url(get_sub_field('mobile_image'), 'full') ?>"
                                     alt=""
                                     class="block h-full w-full object-cover"/>
                            </picture>
                        </div>
                    <?php
                    endwhile;
                endif; ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="cont w-full absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] z-10">
        <div class="flex flex-col items-center text-center">
            <span class="w-full font-proximanova-regular text-[#B8B8DE] text-[14px] leading-[17px] uppercase"><?php the_field('pre_title') ?></span>
            <h1 class="w-full desktopMin:w-1/2 font-proximanova-bold text-[30px]/[1.2] desktopMin:text-[35px]/[1.2] text-white"><?php the_field('title') ?></h1>
            <p class="block w-full desktopMin:w-1/3 px-[20px] desktopMin:px-[0] mt-[15px] font-proximanova-light font-light text-white text-[14px]/[1.5]"><?php the_field('subtitle') ?></p>
            <a href="<?= get_field('button')['url'] ?>"
               class="mp-button mt-[30px]"><?= get_field('button')['title'] ?></a>
        </div>
    </div>
</section>