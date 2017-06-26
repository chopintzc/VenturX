<?php
/**
 * The header for our theme
 *
 *
 * @package WordPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="style.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php //_e( 'Skip to content', 'jcsandbox' ); ?></a>

	<header id="masthead">
		<div id="headerRow" class="row">
            <ul>
                <li style="float: left;">
                   	<img class="portalLogo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
                	<strong>VenturX: Prototype</strong>
                </li>
	            <li style="float: right;">Log Out</li>
	  			<li style="float: right;">Hello, 16@test.com</li>
	        </ul>
        </div>
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
