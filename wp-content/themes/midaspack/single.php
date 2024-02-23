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

        <?php renderComponent('breadcrumbs'); ?>

        <section class="mp-news-item">
            <div class="cont">
                <a href="<?= get_post_type_archive_link('post') ?>"
                   class="go-back"><?php esc_html_e('Back', 'midas'); ?></a>

                <div>
                    <span class="date"><?= get_the_date('d.m.Y') ?></span>
                    <h1><?php the_title(); ?></h1>
                    <div class="mb-[35px] max-h-[430px] rounded-[10px] overflow-hidden">
                        <?php the_post_thumbnail('full', array(
                            'class' => 'block w-full h-full object-cover'
                        )); ?>
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="mp-news-recommend mt-[50px]">
            <div class="cont relative">
                <h2 class="mb-[40px]"><?php esc_html_e('Articles you may be interested in', 'midas'); ?></h2>
                <div class="swiper news relative pb-[51px] desktopMin:pb-0">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post__not_in' => [get_the_ID()]
                        );
                        if (get_field('similar_posts') && is_array(get_field('similar_posts'))) {
                            $args['post__in'] = get_field('similar_posts');
                        }
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                renderComponent('news-item');
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="swiper-pagination !bottom-0 tabletMin:!hidden"></div>

                    <div class="swiper-button-prev hidden"></div>
                    <div class="swiper-button-next hidden"></div>
                </div>

                <div class="go-prev left-[20px] desktopMin:!hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <path d="M7.5 10.4497L2.55025 5.49996L7.5 0.550212" stroke="#1E1E5C" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="go-next right-[20px] desktopMin:!hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <path d="M3.5 0.550293L8.44975 5.50004L3.5 10.4498" stroke="#1E1E5C" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </section>

    </main>

<?php
get_footer();
