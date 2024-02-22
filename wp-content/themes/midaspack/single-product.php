<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ninesquares
 */

get_header();
?>

    <main id="primary" class="site-main">

        <section class="mp-product">
            <div class="cont">
                <a href="<?= get_post_type_archive_link('product') ?>"
                   class="go-back"><?php esc_html_e('Back', 'midas'); ?></a>

                <div class="product-main">
                    <div class="pm-gallery relative">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php
                                $slides_items = get_field('slides') ?: [];
                                $slides = [get_post_thumbnail_id(), ...$slides_items];
                                foreach ($slides as $slide) { ?>
                                    <div class="swiper-slide" data-slide="<?= $slide ?>">
                                        <?= wp_get_attachment_image($slide, 'full') ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev hidden"></div>
                            <div class="swiper-button-next hidden"></div>
                        </div>
                        <div class="go-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                                 fill="none">
                                <path d="M7.5 10.4497L2.55025 5.49996L7.5 0.550212" stroke="#1E1E5C"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="go-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                                 fill="none">
                                <path d="M3.5 0.550293L8.44975 5.50004L3.5 10.4498" stroke="#1E1E5C"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="pm-info">
                        <h1><?php the_title(); ?></h1>
                        <?php if (have_rows('sizes') || (have_rows('density'))) : ?>
                            <div class="pm-options">
                                <?php if (have_rows('sizes')) : ?>
                                    <div>
                                        <span class="font-proximanova-regular font-regular text-grey text-[16px] leading-[2] uppercase"><?php esc_html_e('Size', 'midas'); ?></span>
                                        <ul class="product-sizes mt-[5px] flex flex-wrap justify-start items-center gap-x-[5px] gap-y-[5px]">
                                            <?php
                                            $i = 0;
                                            while (have_rows('sizes')) : the_row();
                                                $i++; ?>
                                                <li class="cursor-pointer px-[10px] pt-[4px] pb-[3px] rounded-[40px] border border-[#868686] font-proximanova-regular font-normal text-[14px] leading-[1.2] text-[#868686] <?php if ($i == 1) echo 'selected'; ?>">
                                                    <?php the_sub_field('item'); ?>
                                                </li>
                                            <?php
                                            endwhile;
                                            ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <?php if (have_rows('density')) : ?>
                                    <div>
                                        <span class="font-proximanova-regular font-regular text-grey text-[16px] leading-[2] uppercase"><?php esc_html_e('Density', 'midas'); ?></span>
                                        <ul class="product-sizes mt-[5px] flex flex-wrap justify-start items-center gap-x-[5px] gap-y-[5px]">
                                            <?php
                                            $i = 0;
                                            while (have_rows('density')) : the_row();
                                                $i++; ?>
                                                <li class="cursor-pointer px-[10px] pt-[4px] pb-[3px] rounded-[40px] border border-[#868686] font-proximanova-regular font-normal text-[14px] leading-[1.2] text-[#868686] <?php if ($i == 1) echo 'selected'; ?>">
                                                    <?php the_sub_field('item'); ?>
                                                </li>
                                            <?php
                                            endwhile;
                                            ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <div class="pm-description">
                            <?php the_content(); ?>
                        </div>
                        <?php if (get_field('price')) : ?>
                            <div class="pm-price"><?php the_field('price') ?> ₴</div>
                        <?php endif; ?>
                        <button class="mp-call-book"><?php esc_html_e('Book', 'midas'); ?></button>
                    </div>
                </div>

                <div class="product-characteristics">
                    <div class="pc-info w-full desktopMin:w-1/2">
                        <div class="mb-[20px] font-proximanova-light font-light text-content text-[36px] leading-[1.2]">
                            <?php esc_html_e('Characteristics', 'midas'); ?>
                        </div>
                        <div class="font-proximanova-light font-light text-[16px] leading-[1.5]">
                            <?php
                            echo str_replace(array(
                                '<p>',
                                '<strong>',
                                '<ul>',
                                '<li>',
                            ),
                                array(
                                    '<p class="mt-[5px]">',
                                    '<strong class="font-proximanova-semibold">',
                                    '<ul class="mt-[5px] flex flex-col items-start  leading-[2]">',
                                    '<li class="relative pl-[36px] before:content-[\'\'] before:absolute before:top-[14px] before:left-[9px] before:block before:w-[9px] before:h-[2px] before:bg-[#58AAEB]">',
                                ),
                                get_field('characteristics')
                            )
                            ?>
                            <?php if (get_field('red_notice')) : ?>
                                <span class="block mt-[12px] text-[#ED1C24] font-proximanova-regular font-regular important-info uppercase"><?php the_field('red_notice'); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="pc-video w-full desktopMin:w-1/2">
                        <?php if (get_field('characteristics_video')) : ?>
                            <div class="mp-html5">
                                <video controls
                                       poster="<?= wp_get_attachment_image_url(get_field('characteristics_poster'), 'full') ?>">
                                    <source src="<?php the_field('characteristics_video') ?>">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        <?php elseif (get_field('characteristics_iframe')) : ?>
                            <div class="mp-yv">
                                <?php the_field('characteristics_iframe') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php
        renderComponent('products', array(
            'title' => __('Products', 'midas'),
            'products' => get_field('similar_products')
        )); ?>

        <?php renderComponent('contact-banner'); ?>

        <?php renderComponent('seotext', array(
            'title' => get_field('seo_title'),
            'content' => get_field('seo_content'),
        )); ?>

    </main>

<?php
get_footer();
