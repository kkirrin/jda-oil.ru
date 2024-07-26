<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support('custom-templates');


// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));

function theme_add_scripts()
{

    
    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // Подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // Подключаем файл main.css
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    // Подключаем файл main.css
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    

    // Подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper-bundle.min', get_template_directory_uri() . '/js/swiper-bundle.min.js');
    //  Для картинок 
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js');
    // Для параллакса
    wp_enqueue_script('simpleParallax', get_template_directory_uri() . '/js/simpleParallax.js');
    // Для wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js');
    // Для скролла
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js');

    function my_scripts() {
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '2.0', true );
    }

    add_action( 'wp_enqueue_scripts', 'my_scripts' );
}

    // Добавляем поддержку шорткодов в текстовых виджетах
    add_filter('widget_text', 'do_shortcode');

    // Добавляем поддержку шорткодов в тексте записей и страниц
    add_filter('the_content', 'do_shortcode');
    add_filter('widget_text_content', 'do_shortcode');


    // Добавляет вкладку и новый тип записей
    add_action('init', 'create_news_type');
    function create_news_type() {
        register_post_type(
            'news',
            array(
               'public' => true,
               'has_archive' => true,
               'exclude_from_search' => true,
               'rewrite' => array(
                    'slug' => 'news',
                    'with_front' => false,
                ),
               'labels' => array(
                'name' => 'Новости',
                'singular_name' => 'Новость',
                'menu_name' => 'Новости',
                'all_items' => 'Все новости',
               ) ,
               'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
               'taxonomies' => array('category')
            )
        );
    };


     // Добавляет вкладку и новый тип записей
     add_action('init', 'create_slide_type');
    function create_slide_type() {
        register_post_type(
            'slide',
            array(
               'public' => true,
               'has_archive' => true,
               'exclude_from_search' => true,
               'rewrite' => array(
                    'slug' => 'slide',
                    'with_front' => false,
                ),
               'labels' => array(
                'name' => 'Баннеры',
                'singular_name' => 'Баннер',
                'menu_name' => 'Баннеры',
                'all_items' => 'Все баннеры',
               ) ,
               'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
               'taxonomies' => array('category')
            )
        );
    };


     // Добавляет вкладку и новый тип записей
     add_action('init', 'create_contacts_type');
    function create_contacts_type() {
        register_post_type(
            'contacts',
            array(
               'public' => true,
               'has_archive' => true,
               'exclude_from_search' => true,
               'rewrite' => array(
                    'slug' => 'slide',
                    'with_front' => false,
                ),
               'labels' => array(
                'name' => 'Контакты',
                'singular_name' => 'Контакт',
                'menu_name' => 'Контакты',
                'all_items' => 'Все контакты',
               ) ,
               'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
               'taxonomies' => array('category')
            )
        );
    };

     // Добавляет вкладку и новый тип записей
     add_action('init', 'create_promotion_type');
    function create_promotion_type() {
        register_post_type(
            'promotion',
            array(
               'public' => true,
               'has_archive' => true,
               'exclude_from_search' => true,
               'rewrite' => array(
                    'slug' => 'promotion',
                    'with_front' => false,
                ),
               'labels' => array(
                'name' => 'Акция',
                'singular_name' => 'Акция',
                'menu_name' => 'Акция',
                'all_items' => 'Акция',
               ) ,
               'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
               'taxonomies' => array('category')
            )
        );
    };


    add_action('admin_menu', 'remove_default_menus');

    function remove_default_menus()
    {
        // remove_menu_page('edit.php');                  // Консоль
        // remove_menu_page('index.php');                  // Консоль
        // remove_menu_page('upload.php');                 // Медиафайлы
        // remove_menu_page('edit.php?post_type=page');    // Страницы
        // remove_menu_page('edit-comments.php');          // Комментарии
        // remove_menu_page('themes.php');                 // Внешний вид
        // remove_menu_page('plugins.php');                // Плагины
        // remove_menu_page('users.php');                  // Пользователи
        // remove_menu_page('tools.php');                  // Инструменты 
        // remove_menu_page('options-general.php');        // Настройки
        // remove_menu_page('wpcf7');   // Contact form 7
        // remove_menu_page('aiowpsec');   // wp security
        // remove_menu_page('edit.php?post_type=acf-field-group');   // ACF Field Group
    }


    if (class_exists('WooCommerce')) {
        require_once (get_template_directory() . '/woocommers.php');
    }
   

?>