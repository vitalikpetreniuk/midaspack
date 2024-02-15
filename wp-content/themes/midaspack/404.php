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
    <section class="mp-intro relative mb-[-65px] desktopMin:mb-[-80px] max-w-[1440px] mx-auto">
        <div class="h-102 max-h-screen-102 desktopMin:h-110 desktopMin:max-h-screen-110 overflow-hidden relative after:content-[''] after:block after:absolute after:top-0 after:left-0 after:w-full after:h-full after:bg-intro_after">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/intro.jpg" alt=""
                 class="block h-full w-full object-cover"></div>
        <div class="cont w-full absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
            <div class="flex flex-col items-center text-center">
                <div class="font-proximanova-light font-light text-[120px]/[.9] text-white">404</div>
                <span class="block font-proximanova-light font-light text-[14px]/[1.5] text-white"><?php esc_html_e('Page not found', 'midas'); ?></span>
                <div class="flex justify-center items-center gap-x-[15px] mt-[25px]">
                    <a href="<?= home_url() ?>" class="mp-button"><?php esc_html_e('To home', 'midas'); ?></a>
                    <a href="<?= get_post_type_archive_link('product') ?>"
                       class="mp-button"><?php esc_html_e('To catalog', 'midas'); ?></a>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
