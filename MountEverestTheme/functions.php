<?php
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

function set_excerpt_length(){
return 45;
}

add_filter('excerpt_length','set_excerpt_length');
function wpb_init_widgets(){

register_sidebar(array(

'name' => 'Sidebar',

'id' => 'sidebar',

'before_widget' => "<div class=\"sidebar-module\">",

'after_widget' => '</div>',

'before_title' => '<h1>',

'after_title' => '</h1>'

));

}
//Theme Support

function wpb_theme_setup(){

//Nav Menus

register_nav_menus(array(

'primary' => __('Primary Menu')

));

}


add_action('widgets_init', 'wpb_init_widgets');
add_action('after_setup_theme','wpb_theme_setup');
add_theme_support( 'post-thumbnails' );
?>
