<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200..1000&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script>
	document.documentElement.dataset.javascript = "enabled";
	const theme = localStorage.getItem("theme");
	if (theme) document.documentElement.dataset.theme = theme;
</script>
<?php wp_body_open(); ?>
	<a class="skip-link visually-hidden-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'dyspraxic-me' ); ?></a>
	<header>
		<div class="container">
			<a
				class="logo"
				href="<?php echo esc_url( home_url( '/' ) ); ?>"
				aria-label="<?php bloginfo( 'name' ); ?>"
			>
				<?php $image_url = esc_url( get_template_directory_uri() . '/logo.svg' ); ?>
				<?php if (!empty($image_url)): ?>
					<img
						height="60"
						src="<?php echo esc_url( $image_url ) ?>"
						alt=""
					/>
				<?php else: ?>
					<?php echo bloginfo( 'name' ) ?>
				<?php endif; ?>
			</a>
			<nav>
				<?php wp_nav_menu([
					'theme_location' => 'nav',
					'menu_id'        => 'nav',
				]); ?>
			</nav>
		</div>
	</header>
	<main id="content">
		<div class="container">
