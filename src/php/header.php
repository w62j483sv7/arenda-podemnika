<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?php the_title();?></title>
	<?php if (get_field('description')): ?>
	<meta name="description" content="<?php the_field('description'); ?>">
	<?php endif; ?>
	<?php if (get_field('keywords')): ?>
	<meta name="keywords" content="<?php the_field('keywords'); ?>">
	<?php endif; ?>
	<?php if (get_field('verification_1', 'option')): ?>
	<!-- verification 1 -->
	<?php the_field('verification_1', 'option'); ?>
	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon-180x180.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-mobile-web-app-title">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon/favicon-16x16.png">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon/favicon.ico">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic');
		@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic');
	</style>
	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/script.js"></script>
</head>
	<body class="body body_style body_scrolling_yes">
	<?php if (get_field('counter', 'option')): ?>
	<?php the_field('counter', 'option'); ?>
	<?php endif; ?>
	<div class="sidebar sidebar_style sidebar_hidden">
		<div class="sidebar__close button js-sidebar_hide">&times;</div>
		<div class="sidebar__call">
			<div class="call call_style">
				<a href="tel:84993470707" rel="nofollow" class="call__number link call__number_color_white"><?php the_field('7589449637', 'option'); ?></a>
				<div class="call__hours call__hours_color_white">ежедневно с 8:00 до 20:00</div>
			</div>
		</div>
		<?php if (have_rows('8587373545', 'option')): ?>
		<div class="sidebar__menu">
			<div class="menu menu_style">
				<?php while (have_rows('8587373545', 'option')) : the_row(); ?>
				<a href="<?php the_sub_field('2349683552'); ?>" class="menu__item" title="<?php the_sub_field('5435483534'); ?>" rel="nofollow"><?php the_sub_field('5435483534'); ?></a>
				<?php endwhile; ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<header class="header header_style header_fixed header_size_large">
		<div class="container header__container">
			<div class="header__left">
				<a href="/" class="logo link logo_size_large" title="<?php the_title();?>" rel="nofollow"></a>
			</div>
			<div class="header__right">
				<div class="header__menu">
					<div class="button menu-button__icon js-sidebar_show"></div>
				</div>
				<div class="header__call">
					<div class="call call_style">
						<a href="tel:84993470707" rel="nofollow" class="call__number link call__number_color_white"><?php the_field('7589449637', 'option'); ?></a>
						<div class="call__hours call__hours_color_white call__hours_scrolling_hidden">ежедневно с 8:00 до 20:00</div>
					</div>
				</div>
			</div>
		</div>
	</header>
