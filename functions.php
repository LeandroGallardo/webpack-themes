<?php
/**
 * novaguas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package novaguas
 */

// Función para Añadir Imagen Destacada A Posts
add_theme_support('post-thumbnails');

register_nav_menus(array(
  'main' => 'Navegación',
  'social-overlay' => 'Social Overlay',
));

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
  require_once get_theme_file_path() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function NovaguasScript(){
  //Llamado de Css
  wp_register_style('google_font','https://fonts.googleapis.com/css?family=Montserrat|Rubik&display=swap', array(), '1.0', false);
  wp_register_style('style_bootstrap', get_stylesheet_directory_uri().'/sources/css/bootstrap.min.css', array(), '4.3.1', false);
  wp_register_style('style_fontawesome', get_stylesheet_directory_uri().'/sources/css/fontawesome-all.min.css', array(), '5.8.2', false);
  wp_register_style('owlcarouselcss', get_stylesheet_directory_uri().'/sources/css/owl.carousel.css', array(), '2.3.4', false);
  wp_register_style('animatecss', get_stylesheet_directory_uri().'/sources/css/animate.css', array(), '2.2.1', false);
  wp_register_style('style_theme', get_stylesheet_directory_uri().'/style.css', array(), '1.0', false);

  //archivos js
  wp_register_script('script_bootstrap', get_stylesheet_directory_uri().'/sources/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
  wp_register_script('script_popper', get_stylesheet_directory_uri().'/sources/js/popper.min.js', array('jquery'), '4.3.1', true);
  wp_register_script('owlcarouseljs', get_stylesheet_directory_uri().'/sources/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
  wp_register_script('script_custom', get_stylesheet_directory_uri().'/sources/js/customScript.js', array('jquery'), '1.0', true);
  wp_register_script('react', get_stylesheet_directory_uri().'/sources/js/index.js', array(),'1',true);

  wp_enqueue_style('google_font');
  wp_enqueue_style('style_bootstrap');
  wp_enqueue_style('style_fontawesome');
  wp_enqueue_style('owlcarouselcss');
  wp_enqueue_style('animatecss');
  wp_enqueue_style('style_theme');

  wp_enqueue_script('script_bootstrap');
  wp_enqueue_script('script_popper');
  wp_enqueue_script('owlcarouseljs');
  wp_enqueue_script('script_custom');
  wp_enqueue_script('react');
  
  wp_localize_script('script_custom','postUrl',array(
    'url_home'=>get_home_url()
  ));
}

add_action('wp_enqueue_scripts','NovaguasScript');

function wpdocs_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
  return sprintf( ' ... <a class="read-more" href="%1$s">%2$s</a>',
      get_permalink( get_the_ID() ),
      __( 'Leer más', 'textdomain' )
  );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more', 999 );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
 
  if (in_array('current-menu-item', $classes) ){
      $classes[] = 'active ';
  }
  return $classes;
}

function transformar_a_slug($str, $delimiter = '-'){
  $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
  return $slug;
}


function obtener_id($titulo) {
    $page = get_page_by_title( $titulo );
    $id=$page->ID;
    return $id;
}


function hs_image_editor_default_to_gd( $editors ) {
$gd_editor = 'WP_Image_Editor_GD';
$editors = array_diff( $editors, array( $gd_editor ) );
array_unshift( $editors, $gd_editor );
return $editors;
}

add_filter( 'wp_image_editors', 'hs_image_editor_default_to_gd' );

flush_rewrite_rules();
add_action('after_switch_theme','flush_rewrite_rules');




?>
