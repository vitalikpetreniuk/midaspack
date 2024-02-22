<?php if (!$args['content']) return; ?>
<section class="mp-text pt-[100px] desktopMin:pt-[150px] pb-[40px] desktopMin:pb-[70px]">
    <div class="cont">
        <?php if ($args['title']) : ?>
            <h2 class="title-h2 mb-[25px]"><?= $args['title'] ?></h2>
        <?php endif; ?>
        <div class="outer-text">
            <div class="inner-text"><?= $args['content'] ?></div>
        </div>
        <button class="mp-button mt-[35px]"><?php esc_html_e('More', 'midas'); ?></button>
    </div>
</section>