<div class="nl-item swiper-slide">
    <a href="<?php the_permalink(); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
            <path d="M1.5 1.5H18.5M18.5 1.5V18.5M18.5 1.5L1.5 18.5" stroke="white"
                  stroke-width="2"/>
        </svg>
    </a>
    <span class="nl-date"><?= get_the_date('d.m.Y') ?></span>
    <div class="nl-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
    <div class="nl-image">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full', array(
                'class' => 'block w-full h-full object-cover'
            )); ?>
        </a>
    </div>
</div>
