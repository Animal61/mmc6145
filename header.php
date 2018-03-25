<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>

	<!-- Links to the style.css file -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

</head>

<body>
	<header>
		<div class="wrapper">
			<h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
		<?php if(function_exists('the_custom_logo')){
			the_custom_logo();
				}?>
			<h2><?php bloginfo('description'); ?></h2>
			
			<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'header-menu')); ?>
		</div>
	</header>
	
