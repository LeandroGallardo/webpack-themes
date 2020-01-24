<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novaguas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>" />
  <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
  <meta name="description" content="<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>" />
  <meta name="keywords" content=""/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/sources/img/favicon.png ?>"/>
  <link rel="canonical" href="<?php the_permalink(); ?>"/>
  <?php wp_head(); ?>
 
 <script src="https://kit.fontawesome.com/e38d0084fb.js" crossorigin="anonymous"></script>
</head>
</head>
<body <?php body_class(); ?>>
   <nav class="navbar navbar-expand-lg navbar-dark w-100 bg_color_primary_light position-fixed zi-Up ">
    <div class="container-fluid col-10 offset-1">

            <a class="navbar-brand " href="<?php echo get_site_url(); ?>" style=" float: left;">
                <img id="logo1" class="" src="<?php echo get_stylesheet_directory_uri(); ?>/sources/img/logo_novaguas.png" alt="logo novaguas">      
            </a>
            <a class="navbar-brand " href="<?php echo get_site_url(); ?>" style=" float: left;">
                <img id="logo2" class="" src="<?php echo get_stylesheet_directory_uri(); ?>/sources/img/logo_bbc.png" alt="logo bcc">      
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacionPrincipal" aria-controls="menuNavegacionPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'main',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'menuNavegacionPrincipal',
                    'menu_class'      => 'navbar-nav nav ml-auto ',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
    </div>
  </nav>