<?php
/**
 * @package gold-parent_s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
<!-- Create a 300px wide og-logo.png and upload it to http://realfavicongenerator.net/ in order to generate a family of touch icons corresponding to the links below -->
<!-- A 144x144px customIcon.png will need to be created separately -->
<!-- All touch icons should be added to the child theme folder -->
 <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-60x60.png">
 <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-76x76.png">
 <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114.png">
 <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-120x120.png">
 <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-144x144.png">
 <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-152x152.png">
 <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-180x180.png">
 <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
 <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/android-chrome-192x192.png" sizes="192x192">
 <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png" sizes="96x96">
 <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
 <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/manifest.json">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/mstile-144x144.png">
 <meta name="theme-color" content="#ffffff">
 
  <?php if( is_front_page() ) { ?>
  <meta property="og:image" content="<?php bloginfo('stylesheet_directory') ?>/og-logo.png" />
  <meta property="og:description" content="<?php bloginfo('description') ?>" />
  <?php } ?>
	
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?></a></h1>
		</div>
    
    <?php if ( is_active_sidebar( 'extra-widgets' ) ) : ?>
        <div class="extrawidgets">
        <?php dynamic_sidebar( 'extra-widgets' ); ?>
        </div>
    <?php endif; ?>

		<nav id="topnav" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'gold-parent_s' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gold-parent_s' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">