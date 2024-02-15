<section class="mp-catalog mb-[80px]">
    <div class="cont">
        <h2 class="mb-[25px] desktopMin:mb-[30px] title-h2 leading-[1.2]">Каталог</h2>
        <ul class="sort">
            <?php $terms = get_terms(array(
                'taxonomy' => 'product-category',
                'hide_empty' => false
            ));
            foreach ($terms as $term) :
                ?>
                <li><?= $term->name ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="products">
            <?php $query = new WP_Query(
                array()
            ) ?>
        </div>
    </div>
</section>