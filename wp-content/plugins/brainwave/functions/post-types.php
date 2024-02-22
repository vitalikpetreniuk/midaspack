<?php
add_action('init', 'register_blog_post_type');
function register_blog_post_type()
{
    // список параметров: wp-kama.ru/function/get_taxonomy_labels
    register_taxonomy( 'product-category', [ 'product' ], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Категорії товарів',
            'singular_name'     => 'Категорія товарів',
            'back_to_items'     => '← Назад до категорій',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        // 'publicly_queryable'    => null, // равен аргументу public
        // 'show_in_nav_menus'     => true, // равен аргументу public
        // 'show_ui'               => true, // равен аргументу public
        // 'show_in_menu'          => true, // равен аргументу show_ui
        // 'show_tagcloud'         => true, // равен аргументу show_ui
        // 'show_in_quick_edit'    => null, // равен аргументу show_ui
        'hierarchical'          => false,

        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => true, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ] );

    register_post_type('product', [
        'label' => 'Товари',
        'labels' => array(
            'name' => 'Товари',
            'singular_name' => 'Товар',
            'menu_name' => 'Товари',
            'all_items' => 'Всі товари',
            'new_item' => 'Новий товар',
        ),
        'public' => true, // Доступность типа записи в публичной части сайта
        'has_archive' => 'products', // Архив типа записи
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'), // Поддерживаемые поля и функции
        'show_in_rest' => true,
    ]);
}
//
//function custom_post_type() {
//    $labels = array(
//        'name' => 'Продукты', // Общее название типа записи
//        'singular_name' => 'Продукт', // Единственное название типа записи
//    );
//
//    $args = array(
//        'labels' => $labels,
//        'public' => true, // Доступность типа записи в публичной части сайта
//        'has_archive' => true, // Архив типа записи
//        'supports' => array('title', 'editor', 'thumbnail'), // Поддерживаемые поля и функции
//        'rewrite' => array('slug' => 'products'), // Правила перезаписи URL
//        'menu_position' => 5, // Позиция в меню админ-панели
//        'menu_icon' => 'dashicons-cart', // Значок в меню админ-панели
//        'show_in_rest' => true, // Отображение в REST API
//    );
//
//    register_post_type('custom_post', $args);
//}
////add_action('init', 'custom_post_type');