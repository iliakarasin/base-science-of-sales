<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Base:_Science_of_Sales
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="outer-container">
            <a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                &nbsp;
            </a><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <!-- @TODO: add hamburger for mobile -->
                <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button> -->

                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

                <a href="#" class="button start-course">Start Course</a>

                <div class="clear-both"></div>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->
    <div id="content" class="site-content">
