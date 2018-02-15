<?php
add_action( 'wp_enqueue_scripts', function(){
	wp_register_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_register_style( 'child-style', get_stylesheet_uri() );

	wp_enqueue_style( 'parent-style' );
	wp_enqueue_style( 'child-style' );

	touch( get_stylesheet_directory() . '/front-page.php' );

});

function change_widget_title($title, $instance, $wid){
    return $title = str_replace('Свежие записи', '', $title);
}
add_filter('widget_title', 'change_widget_title', 10, 3);

function change_widget_title2($title, $instance, $wid){
    return $title = str_replace('Категории товаров', '', $title);
}
add_filter('widget_title', 'change_widget_title2', 10, 3);

?>
