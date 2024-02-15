<section class="mp-mission pt-[175px] desktopMin:pt-[240px] pb-[175px] desktopMin:pb-[200px]">
    <div class="cont">
        <span class="inline-block h-[38px] mb-[30px] desktopMin:mb-[37px] pl-[43px] font-proximanova-bold text-accent text-[25px]/[38px] uppercase bg-[url('../images/svg/lightning.svg')] bg-no-repeat bg-left"><?php the_field('pre_title') ?></span>
        <div class="font-proximanova-semibold text-[25px]/[1.5] desktopMin:text-[35px]/[1.5] text-content"><?php the_field('title1_1') ?>
            <br><span
                    class="border-b-[3px] border-[#B2D6E9] leading-[1]"><?php the_field('title1_2') ?></span> <?php the_field('title1_3') ?>
        </div>
        <div class="flex justify-start items-center gap-x-[17px] mt-[40px] desktopMin:mt-[35px]">
            <div class="w-[60px] h-[60px]">
                <?= wp_get_attachment_image(get_field('photo'), 'full', false, array(
                    'class' => 'w-full h-full object-contain',
                )) ?>
            </div>
            <div class="font-proximanova-regular font-normal text-content text-[18px] leading-[1.3]">
                <div><?php the_field('name') ?></div>
                <span class="text-[14px] opacity-50"><?php the_field('occupation') ?></span>
            </div>
        </div>
    </div>
</section>