<section class="mp-contact">
    <div class="cont">
        <div>
            <h2><?php esc_html_e('Do you have any questions', 'midas'); ?>?</h2>
            <span><?php esc_html_e('Our managers are always ready to answer them', 'midas'); ?></span>
            <ul>
                <li><a href="tel:<?php the_field('phone1', 'option') ?>"
                       class="bg-[url('../images/svg/phone-white.svg')] bg-no-repeat bg-[left_16px_center]"><?php the_field('phone1', 'option') ?></a>
                </li>
                <li class="desktopMin:ml-[50px]"><a href="tel:<?php the_field('phone2') ?>"
                                                    class="bg-[url('../images/svg/phone-white.svg')] bg-no-repeat bg-[left_16px_center]"><?php the_field('phone2', 'option') ?></a>
                </li>
                <li class="desktopMin:ml-[100px]"><a href="tel:<?php the_field('phone3') ?>"
                                                     class="bg-[url('../images/svg/phone-white.svg')] bg-no-repeat bg-[left_16px_center]"><?php the_field('phone3', 'option') ?></a>
                </li>
                <li><a href="mailto:<?php the_field('email', 'option'); ?>"
                       class="bg-[url('../images/svg/email.svg')] bg-no-repeat bg-[left_12px_center]"><?php the_field('email', 'option'); ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>