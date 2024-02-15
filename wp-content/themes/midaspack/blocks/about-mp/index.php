<section
        class="mp-about max-w-[1440px] mx-auto pt-[100px] pb-[60px] desktopMin:py-[65px] bg-[#3B64A4] bg-[url('../images/about-bg-mobile.png')] desktopMin:bg-[url('../images/about-bg.jpg')] bg-no-repeat bg-bottom bg-cover">
    <div class="cont flex flex-col gap-y-[75px] desktopMin:flex-row justify-between items-center">
        <div class="w-full desktopMin:w-five-gap">
            <h2 class="mb-[25px] font-gilroy-bold text-white text-[25px] leading-[1.2]"><?php the_field('title') ?></h2>
            <?php if (get_field('subtitle')) : ?>
                <p class="font-proximanova-light font-light text-white text-[14px] leading-[1.5]"><?php the_field('subtitle') ?></p>
            <?php endif; ?>
            <a href="<?= get_field('button')['url'] ?>"
               class="flex justify-center items-center mt-[25px] w-[136px] h-[50px] pt-[2px] box-border rounded-[40px] bg-white text-content hover:text-[#58AAEB] transition duration-100 font-proximanova-bold text-[15px] leading-[1] uppercase"><?= get_field('button')['title'] ?></a>
        </div>
        <div class="w-full desktopMin:w-seven-gap">
            <div class="relative h-[52vw] desktopMin:h-[460px] rounded-[20px] overflow-hidden cursor-pointer">
                <?php if (get_field('video')) : ?>
                    <div class="mp-html5">
                        <video controls poster="<?= wp_get_attachment_image_url(get_field('poster'), 'full') ?>">
                            <source src="<?php the_field('video') ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                <?php else: ?>
                    <div class="mp-yv">
                        <?php the_field('youtube_iframe') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>