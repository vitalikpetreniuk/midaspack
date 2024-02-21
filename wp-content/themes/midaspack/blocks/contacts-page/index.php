<section class="mp-contacts">
    <div class="cont">
        <h2 class="title-h2 mb-[35px]"><?php the_title(); ?></h2>
        <div class="flex flex-col desktopMin:flex-row gap-x-[20px] gap-y-[50px]">
            <div class="w-full desktopMin:w-1/2">
                <h4 class="title-h4"><?php esc_html_e('Book a consultation', 'midas'); ?></h4>
                <div class="contact-form">[contact-form-7 id="8c7f344" title="Contact us"]</div>
            </div>
            <div class="w-full desktopMin:w-1/2 flex flex-col gap-y-[40px]">
                <div>
                    <h4 class="title-h4"><?php esc_html_e('Call us first', 'midas'); ?></h4>
                    <ul class="flex flex-col gap-y-[15px] font-proximanova-light text-content text-[15px]/[18px]">
                        <?php if (get_field('phone1', 'option')) : ?>
                            <li>
                                <a class="block px-[23px] pt-[2px] bg-[url('../images/svg/kyivstar.svg')] bg-no-repeat bg-left"
                                   href="tel:<?php the_field('phone1', 'option') ?>"><?php the_field('phone1', 'option') ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('phone2', 'option')) : ?>
                            <li>
                                <a class="block px-[23px] pt-[2px] bg-[url('../images/svg/kyivstar.svg')] bg-no-repeat bg-left"
                                   href="tel:<?php the_field('phone2', 'option') ?>"><?php the_field('phone2', 'option') ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('phone3', 'option')) : ?>
                            <li>
                                <a class="block px-[23px] pt-[2px] bg-[url('../images/svg/kyivstar.svg')] bg-no-repeat bg-left"
                                   href="tel:<?php the_field('phone3', 'option') ?>"><?php the_field('phone3', 'option') ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div>
                    <h4 class="title-h4 desktopMin:mb-[15px]">Соціальні мережі</h4>
                    <ul class="mp-social flex justify-start gap-x-[20px]">
                        <?php if (get_field('facebook_link', 'option')) : ?>
                            <li class="facebook">
                                <a href="<?php the_field('facebook_link', 'option') ?>"
                                   class="block text-0 text-transparent w-[24px] h-[24px] bg-[url('../images/svg/facebook.svg')] bg-no-repeat hover:bg-[url('../images/svg/facebook-hover.svg')]">fb
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('telegram_link', 'option')) : ?>
                            <li class="telegram">
                                <a href="<?php the_field('telegram_link', 'option') ?>"
                                   class="block text-0 text-transparent w-[24px] h-[24px] bg-[url('../images/svg/telegram.svg')] bg-no-repeat hover:bg-[url('../images/svg/telegram-hover.svg')]">tlgrm
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('instagram_link', 'option')) : ?>
                            <li class="instagram">
                                <a href="<?php the_field('instagram_link', 'option') ?>"
                                   class="block text-0 text-transparent w-[24px] h-[24px] bg-[url('../images/svg/instagram.svg')] bg-no-repeat hover:bg-[url('../images/svg/instagram-hover.svg')]">inst
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div>
                    <h4 class="title-h4 desktopMin:mb-[15px]"><?php esc_html_e('Location', 'midas'); ?></h4>
                    <span class="text text-[15px]"><?php the_field('address', 'option') ?></span>
                </div>
            </div>
        </div>
    </div>
</section>