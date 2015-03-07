<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @Nicole L.L. www.hirenicolell.info
 * @Version 1.0
 */
?><!DOCTYPE html>
<head>
<title>Sparky 87</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body>
<h1 id="sitetitle"><?php echo get_bloginfo( 'name' ); ?></h1>
<h2 id="tagline"><?php bloginfo('description'); ?> </h2>
<div id="wrapper">
<div id="header">
<img class="logo" alt="logo" src="http://localhost/wp-content/uploads/2015/03/logo.jpg">
	<div id="search">
                  <?php include (TEMPLATEPATH . "/searchform.php"); ?>
     </div>

<nav id="nav"><?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?></nav>

<script type="text/javascript">

</script>
</div>
</div>
