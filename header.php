<?php
/**
 * Inmotion Theme Header File
 *
 */
?><!DOCTYPE html>
<html class="no-js" <?php languages_attributes(); ?>>
	<head>
		<meta charset="<php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!--HTML5 SHIV for IE --><!-- If using Modeernizr you can remove this script! -->
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js
"></script>
                <![endif]-->

                <?php wp_head(); ?>
	</head>
	<body <? php body_class(); ?>>
		<header class="site-header">
			<h1>
				<a href="<?php echo home_url(); ?>">
					InMotion Hosting
				</a>
			</h1>
		</header>