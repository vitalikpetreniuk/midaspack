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

        <section class="mp-catalog mb-[80px]">
            <div class="cont">
                <h2 class="mb-[25px] desktopMin:mb-[30px] title-h2 leading-[1.2]"><?php esc_html_e('Catalog', 'midas'); ?></h2>
                <?php echo do_shortcode('[fe_widget]'); ?>

                <div id="products">
                    <div class="products">
                        <?php if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                renderComponent('product');
                            }
                        } else {
                            ?>
                            <h1 class="text-center"><?php esc_html_e('No products found', 'midas'); ?></h1>
                            <?php
                        } ?>
                    </div>
                    <?php the_posts_pagination(array(
                        'prev_text' => '<span><svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                           height="11" viewBox="0 0 11 11" fill="none"><path
                                d="M7.5 10.4497L2.55025 5.49996L7.5 0.550212" stroke="#1E1E5C" stroke-linecap="round"
                                stroke-linejoin="round"/></svg></span>',
                        'next_text' => '<span><svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                           height="11" viewBox="0 0 11 11" fill="none"><path
                                d="M3.5 0.550293L8.44975 5.50004L3.5 10.4498" stroke="#1E1E5C" stroke-linecap="round"
                                stroke-linejoin="round"/></svg></span>',
                    )); ?>
                </div>
            </div>
        </section>

    </main>

<?php
get_footer();
