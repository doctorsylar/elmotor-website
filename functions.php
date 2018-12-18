<?php

// PHP variables
define('DS_ROOT', get_template_directory_uri());
define('DS_MAIN_URL', get_site_url());

//Удалить Query Strings
function _remove_script_version( $src ){
    $parts = explode( '?ver', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
//Удаление CSS админ панели
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
//Удаление древовидных комментариев
function comments_clean_header_hook(){
    wp_deregister_script( 'comment-reply' );
}
add_action('init','comments_clean_header_hook');
//Удалить WP Embed
function speed_stop_loading_wp_embed() {
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
    }
}
add_action('init', 'speed_stop_loading_wp_embed');
//Удаление смайликов
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
//Удаление WP-JSON из кода WordPress
remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'template_redirect', 'rest_output_link_header', 11);
//Удаление WLWManifest из кода WordPress
remove_action('wp_head', 'wlwmanifest_link');
// Удаление технической страницы wp-json
// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');
// Отключаем события REST API
remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10);
remove_action( 'parse_request', 'rest_api_loaded' );
// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10);
// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10);
remove_action( 'template_redirect', 'rest_output_link_header', 11);
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
//Удаление мета-тега generator
remove_action('wp_head', 'wp_generator');
//Удаление ссылки на RSD
remove_action('wp_head', 'rsd_link');
// Admin bar
if(!is_admin()){
    add_action( 'wp_enqueue_scripts', 'xyz_remove_admin_bar_css', 21 );
    add_action( 'admin_enqueue_scripts', 'xyz_remove_admin_bar_css', 21 );
    function xyz_remove_admin_bar_css() {
        wp_dequeue_style( 'admin-bar' );
        wp_dequeue_style( 'admin-bar-min' );
    }
}
// delete jQuery
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
});
// Advanced Custom Fields
// Register post type
add_action( 'init', 'register_post_types' );
function register_post_types(){
    add_theme_support('post-thumbnails');

    register_post_type('elmtr_sale', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Распродажа', // основное название для типа записи
            'singular_name'      => 'Двигатель по распродаже', // название для одной записи этого типа
            'add_new'            => 'Добавить двигатель по распродаже', // для добавления новой записи
            'add_new_item'       => 'Добавление двигателя по распродаже', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование двигателя по распродаже', // для редактирования типа записи
            'new_item'           => 'Новый двигатель по распродаже', // текст новой записи
            'view_item'          => 'Смотреть двигатель по распродаже', // для просмотра записи этого типа.
            'search_items'       => 'Искать двигатель по распродаже', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Распродажа', // название меню
        ),
        'description'         => '',
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-format-image',
        'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));
    register_post_type('elmtr_repair_common', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Ремонтный прайс', // основное название для типа записи
            'singular_name'      => 'Цена ремонта', // название для одной записи этого типа
            'add_new'            => 'Добавить цену ремонта', // для добавления новой записи
            'add_new_item'       => 'Добавление цены ремонта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование цены ремонта', // для редактирования типа записи
            'new_item'           => 'Новая цена ремонта', // текст новой записи
            'view_item'          => 'Смотреть цену ремонта', // для просмотра записи этого типа.
            'search_items'       => 'Искать цену ремонта', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Ремонтный прайс', // название меню
        ),
        'description'         => '',
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-admin-tools',
        'supports'            => array('title') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));
}
//
function getSaleItems () {
    $args = array(
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'elmtr_sale',
    );

    $saleItems = [];

    foreach (get_posts($args) as $post) {
        $item = get_fields($post -> ID);
        $item['title'] = $post -> post_title;
        $item['thumbnail'] = get_the_post_thumbnail_url($post -> ID, 'medium');
        $saleItems[] = $item;
    }
    return $saleItems;
}
function getRepairPriceItems () {
    $args = array(
        'numberposts' => -1,
        'orderby'     => 'title',
        'order'       => 'ASC',
        'post_type'   => 'elmtr_repair_common',
    );

    $repairPriceItems = [];

    foreach (get_posts($args) as $post) {
        $item = get_fields($post -> ID);
        $item['title'] = $post -> post_title;
        $repairPriceItems[] = $item;
    }
    return $repairPriceItems;
}