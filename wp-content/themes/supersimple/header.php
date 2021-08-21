<?php

/**
 *
 * @package Rohan_Menon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<link rel="preload" href="<?php echo get_theme_file_uri('fonts/WhyteInktrap-Thin.woff2'); ?>" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_theme_file_uri('fonts/WhyteInktrap-Medium.woff2'); ?>" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_theme_file_uri('fonts/WhyteInktrap-Bold.woff2'); ?>" as="font" type="font/woff2" crossorigin>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>
	<meta name="viewport" content="width=100%, initial-scale=1">
</head>

<body <?php body_class(); ?>>
	<script>
		var d = new Date()
		console.log(d.getHours())
		if (d.getHours() >= 19 || d.getHours() < 7) {
			document.body.classList.add('dark')
		}
	</script>
	<?php wp_body_open(); ?>
	<div class="content">
		<?php
		get_template_part('template-parts/header/site-header');
		?>
		<main id="main" class="site-main" role="main">