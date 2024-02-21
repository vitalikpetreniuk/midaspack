<section class="mp-about-mission mt-[70px]">
    <div class="cont">
        <div class="w-full desktopMin:w-5/12">
            <span class="inline-block h-[38px] pl-[43px] font-proximanova-bold text-accent text-[25px]/[38px] uppercase bg-[url('../images/svg/lightning.svg')] bg-no-repeat bg-left"><?php the_field('pre_title') ?></span>
            <div class="mt-[30px] desktopMin:mt-[54px] font-proximanova-semibold text-[25px]/[1.5] desktopMin:text-[35px]/[1.5] text-content"><?php the_field('title1_3') ?>
                <br><span
                        class="border-b-[3px] border-[#B2D6E9] leading-[1]"><?php the_field('title2_3') ?></span> <?php the_field('title3_3') ?>
            </div>
            <div class="mt-[40px] flex justify-start items-center gap-x-[17px]">
                <div class="w-[60px] h-[60px]">
                    <?= wp_get_attachment_image(get_field('photo'), 'full', false, array(
                        'class' => 'w-full h-full object-contain'
                    )) ?>
                </div>
                <div class="font-proximanova-regular font-normal text-content text-[18px] leading-[1.3]">
                    <div><?php the_field('name') ?></div>
                    <span class="text-[14px] opacity-50"><?php the_field('occupation'); ?></span>
                </div>
            </div>
        </div>
        <div class="w-full mt-[40px] desktopMin:mt-0 desktopMin:w-6/12 box-border desktopMin:pl-[40px]">
            <div class="relative pb-[72.5%] rounded-[10px] overflow-hidden">
                <?= wp_get_attachment_image(get_field('image'), 'full', false, array(
                    'class' => 'absolute block w-full h-full object-cover'
                )) ?>
            </div>
        </div>
    </div>
</section>