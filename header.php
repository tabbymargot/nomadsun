<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nomadsun
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Cardo:ital@0;1&family=Tenor+Sans&display=swap|Archivo" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="barba-wrapper">

<?php wp_body_open(); ?>
<div id="page" class="barba-container relative">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nomadsun' ); ?></a>

	<header id="masthead" class="site-header">
		

		<nav id="site-navigation" class="main-navigation">
			
			<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
