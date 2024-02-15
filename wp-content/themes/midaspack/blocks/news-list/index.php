<section class="mp-news">
    <div class="cont">
        <h2 class="mb-[25px]"><?php esc_html_e('News', 'midas'); ?></h2>
        <div class="news">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    renderComponent('news-item');
                }
            } ?>
        </div>

        <?php the_posts_pagination(array(
            'prev_text'          => '<span><svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                           height="11" viewBox="0 0 11 11" fill="none"><path
                                d="M7.5 10.4497L2.55025 5.49996L7.5 0.550212" stroke="#1E1E5C" stroke-linecap="round"
                                stroke-linejoin="round"/></svg></span>',
            'next_text'          => '<span><svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                           height="11" viewBox="0 0 11 11" fill="none"><path
                                d="M3.5 0.550293L8.44975 5.50004L3.5 10.4498" stroke="#1E1E5C" stroke-linecap="round"
                                stroke-linejoin="round"/></svg></span>',
        )); ?>
    </div>
</section>