<?php
/**
 * Header file for the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/aa36ddf53c.js" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>


<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>



<div class="sticky header-mobile" id="stickyBottom">
    <ul>
        <li><a class = "current-menu-item container" href="#"><i class="fas fa-home"></i></a></li>
        <li><a href="#"><i class="fas fa-play-circle"></i></a></li>
    </ul>
</div>









<body <?php body_class(); ?>>