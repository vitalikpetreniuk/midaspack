<section class="mp-news pt-[65px] pb-[70px] desktopMin:pb-[75px] bg-[#F8F8F8] max-w-[1440px] mx-auto">
    <div class="cont">
        <div class="flex justify-between items-center mb-[25px]">
            <h2 class="font-gilroy-bold text-content text-[25px] leading-[1.2]"><?php the_field('title') ?></h2>
            <a href="<?= get_the_permalink(apply_filters('wpml_object_id', 29, 'page')) ?>"
               class="mp-button mp-button-light h-[40px] leading-[43px]"><?php esc_html_e('more articles', 'midas'); ?></a>
        </div>
        <div class="news relative">
            <div class="swiper pb-[40px]">
                <div class="swiper-wrapper">
                    <?php
                    $query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts__in' => get_field('posts'),
                    ));
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                        <path d="M1.5 1.5H18.5M18.5 1.5V18.5M18.5 1.5L1.5 18.5" stroke="white"
                                              stroke-width="2"/>
                                    </svg>
                                </a>
                                <span class="news-date"><?= get_the_date('d.m.Y') ?></span>
                                <div class="news-text"><?php the_title(); ?></div>
                                <div class="news-image">
                                    <?php the_post_thumbnail('full', array(
                                        'class' => 'block w-full h-full object-cover'
                                    )); ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev hidden"></div>
                <div class="swiper-button-next hidden"></div>
            </div>

            <div class="go-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path d="M7.5 10.4497L2.55025 5.49996L7.5 0.550212" stroke="#1E1E5C" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="go-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path d="M3.5 0.550293L8.44975 5.50004L3.5 10.4498" stroke="#1E1E5C" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
</section>