<section class="mp-products my-[80px]">
    <div class="cont">
        <div class="flex justify-between items-center mb-[25px]">
            <h2 class="font-gilroy-bold text-content text-[25px] leading-[1.2]"><?= $args['title'] ?></h2>
            <a href="<?= get_the_permalink(apply_filters('wpml_object_id', 21, 'page')) ?>"
               class="mp-button mp-button-light h-[40px] leading-[43px]"><?php esc_html_e('go to catalog', 'midas'); ?></a>
        </div>
        <div class="products relative">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $query = new WP_Query(
                        array(
                            'post_type' => 'product',
                            'post__in' => $args['products'],
                            'posts_per_page' => PHP_INT_MAX
                        )
                    );
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            renderComponent('product', array(
                                'class' => 'swiper-slide',
                            ));
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="swiper-pagination static mt-[35px] desktopMin:mt-[55px]"></div>
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