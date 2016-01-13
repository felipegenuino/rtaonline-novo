<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/animate/animate.css">

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/owl-carousel/owl.theme.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
 		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,700italic,300italic,100italic,100,900,900italic">
 




		<link rel="canonical" href="<?php bloginfo('url'); ?>" />
		<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
		<meta name="keywords" content="Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing, elit">
		<meta property="og:locale" content="pt_PT" />
		<meta property="og:type" content="website">
		<meta property="og:title" content="titulo da página" />
		<meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." />
		<meta property="og:url" content="<?php bloginfo('url'); ?>" />
		<meta property="og:site_name" content="Sobre a página" />

		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seo/facebook.jpg">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">

		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:site" content="<?php bloginfo('url'); ?>"/>
		<meta name="twitter:domain" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."/>


		<meta name="twitter:image:src" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seo/facebook.jpg"/>





		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

	<?php do_action( 'foundationpress_layout_start' ); ?>

 

	<?php get_template_part( 'parts/off-canvas-menu' ); ?>

	<?php get_template_part( 'parts/top-bar' ); ?>

	<?php if (  !( is_home() )   ): ?>
		<?php get_template_part( 'parts/banner-page' ); ?>
	<?php endif; ?>


<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>



<?php // estiver na home mostrar banner da home, senao mostrar banner páginas ?>
<?php if ( is_home() ): ?>
	<?php get_template_part( 'parts/slider-banner-home' ); ?>

<?php endif; ?>
