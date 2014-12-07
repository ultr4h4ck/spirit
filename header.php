<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--meta name="viewport" content="width=device-width, initial-scale=1"-->

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/seed.css?seed" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?seed" type="text/css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">

	<header id="masthead">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
		<nav class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">