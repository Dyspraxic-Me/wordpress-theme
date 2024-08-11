<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="visually-hidden" href="#content"><?php esc_html_e( 'Skip to content', 'dyspraxic-me' ); ?></a>
	<header>
		<div class="container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
			<nav>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main',
						'menu_id'        => 'main-menu',
					)
				);
				?>
			</nav>
		</div>
	</header>
	<main id="content">
		<div class="container">
