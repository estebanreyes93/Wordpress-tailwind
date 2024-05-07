<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oye
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page">
		<a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'oye'); ?></a>

		<?php get_template_part('template-parts/layout/header', 'content'); ?>

		<div id="content">

			<?php get_template_part('template-parts/layout/content', 'header'); ?>
			<header>
				<div class="topbar">
					<div class="container">
						<div class="topbar-cont">
							<a href="./index.html" class="logo">
								<div class="logo-icon">
									<img src="./images/gob-icon.svg" alt="" />
								</div>
								<span class="logo-text">Ejemplo</span>
							</a>
							<div class="topbar-right">
								<div class="lang-select dropdown-simple">
									<a href="#"><img src="https://flagcdn.com/do.svg" alt="" /><span>ES</span><i class="ri-arrow-down-s-line"></i></a>
									<div class="dropdown-list">
										<a href="#"><img src="https://flagcdn.com/do.svg" alt="" /><span>ES</span></a>
										<a href="./en/"><img src="https://flagcdn.com/us.svg" alt="" /><span>EN</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-menu">
					<div class="container">
						<div class="main-menu-cont">
							<span class="menu-toggle"><i class="ri-menu-line"></i></span>
							<div class="menu">
								<a href="./index.html" class="menu-item">Ejemplo 1</a>
								<a href="./banners.html" class="menu-item">Ejemplo 2</a>
							</div>
							<form class="search-bar">
								<label class="search-bar-toggle" for="searchMain"><i class="ri-search-line"></i></label>
								<input id="searchMain" type="search" placeholder="¿Qué quieres buscar?" />
								<button type="submit">
									<i class="ri-search-line"></i><span>Buscar</span>
								</button>
							</form>
						</div>
					</div>
				</div>
			</header>