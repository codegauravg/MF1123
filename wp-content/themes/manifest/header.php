<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Education_Sector_Website_Modal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Education Sector Website Modal</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Load Roboto font -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!-- Load css styles -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/pluton.css" />
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/jquery.cslider.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/jquery.bxslider.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/animate.css" />
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/images/ico/apple-touch-icon-144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/images/ico/apple-touch-icon-114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/images/apple-touch-icon-72.png">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/images/ico/apple-touch-icon-57.png">
<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/images/ico/favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'manifest' ); ?></a>
<header>
    <div class="navbar">
    <div class="navbar-inner">
    <div class="container">
    <a href="#" class="brand">
        <img src="<?php bloginfo( 'stylesheet_directory' )?>/assets/images/logo.png" width="120" height="40" alt="Logo" />
        <!-- This is website logo -->
    </a>
    <!-- Navigation button, visible on small resolution -->
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <i class="icon-menu"></i>
    </button>     
<?php
      
  wp_nav_menu(array(
  
      'theme_location'  =>  'primary',
      'container'       =>  'nav',
      'container_class' =>  'nav-collapse collapse pull-right',
      'menu_class'      =>  'nav navbar-nav'
  
    )  );  
?>
</div>
</div>
</div>
</header>
<div id="content" class="site-content">
