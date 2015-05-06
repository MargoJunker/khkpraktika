<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Underscores_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-affix.js"></script>

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body data-spy="scroll" <?php body_class(); ?>>
<!--<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'underscores_theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

<!--		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'underscores_theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	<!--</header><!-- #masthead -->
<!-- Header -->

    <div class="wrapper">
        <!-- Site-header -->
        <header class="site-header">
            <nav id="site-navigation" class="main-navigation" role="navigation">
            <a class="navbar-brand" href="http://178.62.65.175"><img class="navbar-brand" alt="Logo" src="http://www.upload.ee/image/4691422/01.png"></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                <div class="navbar-left header-widget hidden-xs">
                    <?php if( dynamic_sidebar( 'header_widget' ) ) : else : endif; ?>
                </div>
                <div class="navbar-left rss-widget hidden-xs hidden-sm">
                    <?php if( dynamic_sidebar( 'rss_widget' ) ) : else : endif; ?>
                </div>
		</nav><!-- #site-navigation -->
        </header>
        
<!-- /header -->