<?php
/**
 * Archivo que controla las funciones de nuestro tema.
 *
 * @package My Child Theme
 */

/**
 * Cargar estilos del tema padre.
 *
 * @return void
 */
function my_theme_enqueue_parent_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_parent_style' );

/**
 * Carga archivo de JavaScript principal del tema.
 *
 * @return void
 */
function my_theme_enqueue_scripts() {
	wp_enqueue_script(
		'my-theme-scripts',
		get_stylesheet_directory_uri() . '/scripts.js',
		array(),
		'0.0.1',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
