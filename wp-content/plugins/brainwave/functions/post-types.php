<?php
//add_action('init', 'register_blog_post_type');
//function register_blog_post_type()
//{
//    register_post_type('custom-blog', [
//        'label' => 'Blog',
//        'labels' => array(
//            'name' => 'Blog',
//            'singular_name' => 'Blog',
//            'menu_name' => 'Blog',
//            'all_items' => 'All posts',
//            'add_new' => 'Add post',
//            'add_new_item' => 'Add post',
//            'edit' => 'Edit post',
//            'edit_item' => 'Edit post',
//            'new_item' => 'New post',
//        ),
//        'public' => true, // Доступность типа записи в публичной части сайта
//        'has_archive' => true, // Архив типа записи
//        'supports' => array('title', 'editor', 'thumbnail'), // Поддерживаемые поля и функции
//        'rewrite' => array('slug' => 'blog'), // Правила перезаписи URL
//        'menu_position' => 5, // Позиция в меню админ-панели
//        'menu_icon' => 'dashicons-businessperson',
//        'show_in_rest' => true,
//    ]);
//}
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