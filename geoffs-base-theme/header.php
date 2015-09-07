<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chris Was Here... so was Mike <?php bloginfo('name'); ?>  <?php wp_title(''); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

<?php wp_head(); ?>

</head>

<body>
<!-- fixed navigation bar at top of screen -->
<div id="navbar">
<nav> 

<?php wp_nav_menu('primary'); ?>

</nav>
</div> <!-- close navbar -->

<div id="container">
	<header>
		<h1><?php bloginfo('name'); ?></h1>
	</header>


