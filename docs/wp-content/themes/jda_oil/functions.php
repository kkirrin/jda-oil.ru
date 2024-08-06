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


    // Подключаем js файл filter.js
    wp_enqueue_script('filter', get_template_directory_uri() . '/js/module/filter.js');
    wp_localize_script( 'filter', 'php_data', array('parse_file' => parseFile()) );
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

    // Парсер файла
    function parseFile() {
        $path_to_file = 'RED_BOOK.csv';
        $path_to_log = 'logs/jda_parser_log.txt';

        // Проверка существования файла
        if(file_exists($path_to_file)) {
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
            if(in_array(mb_ord(mb_substr($file, 0, 1)), array(65279))) {
                $file = mb_substr($file, 1);
            }
            
            // Замена переносов строки на '||'
            $lines = preg_replace('/\n\r|\n/m', '||', $file);
            // Удаление возврата каретки в конце строк
            $lines = preg_replace('/\r/m', '', $lines);
            // Разбиение содержимого на строки по символу '||', находящeмуся вне кавычек
            $lines = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:\|\|)/', $lines);
            
            // Перебор линий для обработки
            foreach($lines as $line) {
                // Разбиение содержимого строки по символу ';' (или ',' в зависимости от шаблона файла), находящeмуся вне кавычек
                $explode_line = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:;)/', $line);
                if(count($explode_line) === 1) {
                    $explode_line = preg_split('/(?=(?:[^"]*"[^"]*")*[^"]*$)(?:,)/', $line);
                }

                // Пропуск пустых строк и заголовков
                if(isset($explode_line[0]) && !in_array($explode_line[0], array('', 'MAKER'))) {
                    $pre_data = array();
                    foreach($explode_line as $key => $cell) {
                        if(isset($keys[$key])) {
                            if($keys[$key] == 'year') {
                                $years = explode('~', $cell);
                                $pre_data['year_from'] = $years[0];
                                $pre_data['year_to'] = isset($years[1]) ? $years[1] : null;
                            }
                            else {
                                $pre_data[$keys[$key]] = $cell;
                            }
                        }
                    }
                    $data[] = $pre_data;
                }
            }
            
            // echo '<pre>'; var_dump($data[0]); echo '</pre>';
            
            // Логирование успешной обработки данных
            file_put_contents($path_to_log, '['. date('Y-m-d H:i:s') .'] Success : Parser is success'. PHP_EOL, FILE_APPEND);
            return $data;
        }
        else {
            // Логирование ошибки, если файла не существует
            file_put_contents($path_to_log, '['. date('Y-m-d H:i:s') .'] Error : File '. $path_to_file .' is not exist'. PHP_EOL, FILE_APPEND);
            return false;
        }
    }

?>