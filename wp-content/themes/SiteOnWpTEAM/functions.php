<?php 
    add_filter('show_admin_bar', '__return_false');

    if (function_exists('acf_add_options_page')) {

	    $parent = acf_add_options_page(array(
	        'page_title' => 'ACF Settings',
	        'menu_title' => 'Основное',
	        'icon_url' => 'dashicons-art',
	    ));

	}

 register_nav_menus(array(
	   'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	   'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
    ));

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}
?>