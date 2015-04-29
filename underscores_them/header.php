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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-affix.js"></script>

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
<header>
    <nav class="navbar navbar-default wrapper" style="margin-bottom: 0px;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="rssfeed hidden-xs hidden-sm navbar-right" href="#"><img class="img-responsive rssico" style="float:right ;padding-left:5px;border:none" src="content/07.png"></a></li>
                <li><a class="rssfeed hidden-xs hidden-sm navbar-right" href="#"><img class="img-responsive rssico-you" style="float:right ;padding-left:5px;border:none" src="content/12.jpg"></a></li>
                <li><a class="rssfeed hidden-xs hidden-sm navbar-right" href="#"><img class="img-responsive rssico" style="float:right ;padding-left:5px;border:none" src="content/11.png"></a></li>
            </ul>
          <ul class="nav navbar-nav navbar-left">
            <form class="form-group navbar-right">
                <div class="input-group">
                  <input type="search" class="form-control" id="Search" placeholder="Search">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
                </div>
            </form>
            <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</header>
<!-- /header -->
	<div id="content" class="site-content">