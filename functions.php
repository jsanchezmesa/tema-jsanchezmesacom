<?php

//registro de menús de Wordpress
add_theme_support('nav-menus');

if(function_exists('register_nav_menus')){
	register_nav_menus( array(
		'main' => 'Menú principal',
		'sociales-menu' => 'Menú de Redes Sociales',
		'datos-legales-menu' => 'Menú de Datos Legales'
	) );
}

//registro de sidebar
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name' => 'Sidebar principal',
		'before_widget' => '<hr>',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
}

//habilitar thumbnails
add_theme_support('post-thumbnails');

//permitir comentarios encadenados
function enable_threaded_comments(){
	if(is_singular() && comments_open() && (get_option('thread_comments') == 1)){
		wp_enqueue_script('comment-reply');
	}
}
add_action('get_header', 'enable_threaded_comments');

//elimina mensajes en pantalla login
function login_errors_message(){
	return 'Oooops';
}
add_filter('login_errors', 'login_errors_message');

//eliminar etiquetas head
remove_action('wp_head','wp_generator');
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','index_rel_link');
remove_action('wp_head','parent_post_rel_link', 10, 0);
remove_action('wp_head','start_post_rel_link', 10, 0);
remove_action('wp_head','adjacent_posts_rel_link', 10, 0);

//evitar codigo html en comentarios
add_filter('pre_comment_content', 'wp_specialchars');