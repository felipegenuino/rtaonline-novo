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
 

 		<title>RTA Online | O Cuidado Global começa com uma respiração tranquila</title>

		<link rel="canonical" href="<?php bloginfo('url'); ?>" />
		<meta name="description" content="O Método RTA pode ser aplicado a pacientes de todas as idades e patologias que resultem em disfunção respiratória, desde o prematuro até o adulto.">
		<meta name="keywords" content="metodo rta, rta, cuidado global, mariângela pinheiro de lima, fisioterapia, fisioterapia adulto, fisioterapia neonatal, fisioterapia pediatrica, rta online">
		<meta property="og:locale" content="pt_PT" />
		<meta property="og:type" content="website">
		<meta property="og:title" content="O Cuidado Global começa com uma respiração tranquila - RTA" />
		<meta property="og:description" content="O Método RTA pode ser aplicado a pacientes de todas as idades e patologias que resultem em disfunção respiratória, desde o prematuro até o adulto." />
		<meta property="og:url" content="<?php bloginfo('url'); ?>" />
		<meta property="og:site_name" content="RTA Online | O Cuidado Global começa com uma respiração tranquila" />

		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seo/facebook.jpg">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">

		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:site" content="<?php bloginfo('url'); ?>"/>
		<meta name="twitter:domain" content="O Método RTA pode ser aplicado a pacientes de todas as idades e patologias que resultem em disfunção respiratória, desde o prematuro até o adulto."/>

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
