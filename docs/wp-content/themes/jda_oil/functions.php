<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support('custom-templates');


// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');


// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));

function add_menu()
{
    register_nav_menu('footer', 'Категории в футере');
}

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
    
    wp_enqueue_script('live-search', get_template_directory_uri() . '/js/live-search.js');


    // Подключаем js файл filter.js
    wp_enqueue_script('filter', get_template_directory_uri() . '/js/module/filter.js');
    // wp_localize_script( 'filter', 'php_data', array('parse_file' => parseFile()) );
    //  Для картинок 
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js');
    // Для параллакса
    wp_enqueue_script('simpleParallax', get_template_directory_uri() . '/js/simpleParallax.js');
    // Для wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js');
    // Для скролла
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js');

    // function my_scripts() {
    //     wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '2.0', true );
    // }

    // add_action( 'wp_enqueue_scripts', 'my_scripts' );
}

// Добавляем поддержку шорткодов в текстовых виджетах
add_filter('widget_text', 'do_shortcode');

// Добавляем поддержку шорткодов в тексте записей и страниц
add_filter('the_content', 'do_shortcode');
add_filter('widget_text_content', 'do_shortcode');


// Добавляет вкладку и новый тип записей
add_action('init', 'create_news_type');
function create_news_type()
{
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
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
};


// Добавляет вкладку и новый тип записей
add_action('init', 'create_slide_type');
function create_slide_type()
{
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
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
};


// Добавляет вкладку и новый тип записей
add_action('init', 'create_contacts_type');
function create_contacts_type()
{
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
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
};

// Добавляет вкладку и новый тип записей
add_action('init', 'create_promotion_type');
function create_promotion_type()
{
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
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
};

// Добавляет вкладку и новый тип записей
add_action('init', 'create_promotion_type_header');
function create_promotion_type_header()
{
    register_post_type(
        'promotion-header',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array(
                'slug' => 'promotion_header',
                'with_front' => false,
            ),
            'labels' => array(
                'name' => 'Акция в шапке',
                'singular_name' => 'Акция в шапке',
                'menu_name' => 'Акция в шапке',
                'all_items' => 'Акция в шапке',
            ),
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
    require_once(get_template_directory() . '/woocommers.php');
}


add_action('wp_ajax_get_data', 'getData');
add_action('wp_ajax_nopriv_get_data', 'getData');

function getData()
{
    $path_to_file = '/home/jda6388454/jda-oil.ru/docs/RED_BOOK.csv';
    $path_to_log = '/home/jda6388454/jda-oil.ru/docs/logs/jda_parser_log.txt';

    // Проверка существования файла
    if (file_exists($path_to_file)) {
        // Переменная для ключей данных
        $keys = array(
            'maker',
            'car_name',
            'grade',
            'drive_system',
            'year',
            'liter',
            'engine',
            'recommend_oil',
            'api',
            'sae',
            'transmission_type',
            'lubricant_capacity',
            'filter_capacity',
            'fluid',
            'capacity',
        );
        // Паременная для сохранения данных
        $data = array();

        // Получить содержимое файла
        $file = file_get_contents($path_to_file);

        // Проверка на наличие BOM метки и её удаление при наличии
        //      65279 - UTF-8
        if (in_array(mb_ord(mb_substr($file, 0, 1)), array(65279))) {
            $file = mb_substr($file, 1);
        }

        // Замена переносов строки на '||'
        $lines = preg_replace('/\n\r|\n/m', '||', $file);
        // Удаление возврата каретки в конце строк
        $lines = preg_replace('/\r/m', '', $lines);
        // Разбиение содержимого на строки по символу '||', находящeмуся вне кавычек
        $lines = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:\|\|)/', $lines);

        // Перебор линий для обработки
        foreach ($lines as $line) {
            // Разбиение содержимого строки по символу ';' (или ',' в зависимости от шаблона файла), находящeмуся вне кавычек
            $explode_line = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:;)/', $line);
            if (count($explode_line) === 1) {
                $explode_line = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:,)/', $line);
            }

            // Пропуск пустых строк и заголовков
            if (isset($explode_line[0]) && !in_array($explode_line[0], array('', 'MAKER'))) {
                $pre_data = array();
                foreach ($explode_line as $key => $cell) {
                    if (isset($keys[$key])) {
                        if ($keys[$key] == 'year') {
                            $years = explode('~', $cell);
                            $pre_data['year_from'] = $years[0];
                            $pre_data['year_to'] = isset($years[1]) ? $years[1] : null;
                        } else {
                            $pre_data[$keys[$key]] = $cell;
                        }
                    }
                }
                $data[] = $pre_data;
            }
        }


        // Логирование успешной обработки данных
        file_put_contents($path_to_log, '[' . date('Y-m-d H:i:s') . '] Success : Parser is success' . PHP_EOL, FILE_APPEND);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    } else {
        // Логирование ошибки, если файла не существует
        file_put_contents($path_to_log, '[' . date('Y-m-d H:i:s') . '] Error : File ' . $path_to_file . ' is not exist' . PHP_EOL, FILE_APPEND);
        echo 'false';
    }
    wp_die();
}


//  Функция обработки ajax-запроса из живого поиска
add_action('wp_ajax_live_search', 'ajax_live_search');
add_action('wp_ajax_nopriv_live_search', 'ajax_live_search'); // Для незарегистрированных пользователей

function ajax_live_search()
{
    // Проверка наличия переменной ajax в отправленных данных
    if (isset($_POST['ajax'])) {
        // Проверка типа живого поиска
        if ($_POST['ajax'] === 'products') {
            global $wpdb;

            $search_value = sanitize_text_field($_POST['value']);

            $args = array(
                'post_type' => ['product', 'articles'],
                'posts_per_page' => 50,
                's' => $search_value, // Поиск по названию товара
                'post_status' => 'publish',
                'taxonomy' => $search_value,

            );

            $products = new WP_Query($args);

            // Переменная для формирования списка пунктов для выпадающего списка
            $data_list = '';

            if ($products->have_posts()) {
                while ($products->have_posts()) {
                    $products->the_post();

                    // Получаем данные товара
                    $product_id = get_the_ID();
                    $product_link = get_permalink();

                    $product = wc_get_product($product_id);

                    // Получаем изображение товара
                    $image_id = get_post_thumbnail_id($product_id); // Получаем ID изображения
                    $image_url = wp_get_attachment_image_url($image_id, 'thumbnail'); // Получаем URL изображения

                    // Формируем пункт выпадающего списка

                    $data_list .= '<a href="' . $product_link . '">';
                    $data_list .= ' <div class="list_option" data-value="' . $product_id . '" data-text="' . get_the_title() . '" data-product="product">';
                    $data_list .= ' <img src="' . esc_url($image_url) . '" alt="' . get_the_title() . '" style="width:30px; height:30px;"/> ';
                    $data_list .=   get_the_title() . '</div>';
                    $data_list .= '</a>';
                }
                wp_reset_postdata(); // Сбрасываем данные после запроса
            } else {
                $data_list .= '<div class="list_option" data-value="0" data-text="' . esc_html($search_value) . '" data-product="">Ничего не найдено</div>';
            }

            // Формируем данные для возврата ответа на сторону клиента
            echo json_encode(array('data' => [], 'list' => $data_list), JSON_UNESCAPED_UNICODE);
        }
    }

    wp_die(); // Завершение выполнения
}


if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
            'page_title' => 'Редактирование информации и телефонов',
            'menu_title' => 'Телефоны и контакты',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );
}
