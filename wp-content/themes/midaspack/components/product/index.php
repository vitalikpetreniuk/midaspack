<?php $price = get_field('price', get_the_ID());
?>
<div class="<?php if (isset($args['class'])) echo $args['class'] ?> <?php if ($price) echo 'has-price'; ?> product">
    <div class="product-image">
        <?php the_post_thumbnail('full', array(
            'class' => '"block w-full h-full object-cover'
        )); ?>
    </div>
    <div class="product-title"><?php the_title(); ?></div>
    <div class="product-description"><?= get_the_excerpt(); ?></div>
    <div class="btm-info absolute bottom-0 left-0 right-0">
        <?php if ($price) : ?>
            <div class="product-price"><?= $price ?> ₴</div>
            <a href="<?php the_permalink(); ?>"><?php esc_html_e('View', 'midas'); ?></a>
        <?php else: ?>
            <a href="<?php the_permalink(); ?>"><?php esc_html_e('Specify the price', 'midas'); ?></a>
        <?php endif; ?>
    </div>
</div>
