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
<a id="top"></a>
<script>
	const colorScheme = window.localStorage.getItem("color-scheme");
	if (colorScheme) document.documentElement.style.colorScheme = colorScheme;
</script>
<?php wp_body_open(); ?>
	<!-- Inline SVG sprite -->
	<svg aria-hidden="true" style="position: absolute; height: 0; width: 0;">
		<clipPath id="squiggle-bottom" clipPathUnits="objectBoundingBox">
			<path d="M0,0 v1 c0.043,-0.04,0.087,0.014,0.13,-0.05 c0.045,0.02,0.089,0.008,0.133,0.019 c0.077,0.016,0.153,-0.034,0.23,0.002 c0.038,0.003,0.077,-0.038,0.116,-0.01 c0.082,0.013,0.185,0.025,0.245,0.003 c0.06,-0.023,0.101,0.008,0.108,0.015 c0.007,0.007,0.026,-0.01,0.037,-0.025 V0 H0"></path>
		</clipPath>
		<clipPath id="squiggle-top" clipPathUnits="objectBoundingBox">
			<path d="M1,1 V0 C0.957,0.1,0.913,0,0.87,0.052 C0.826,0.031,0.781,0.044,0.737,0.033 C0.66,0.016,0.583,0.068,0.507,0.031 C0.468,0.028,0.429,0.071,0.391,0.041 C0.309,0.028,0.227,0.039,0.146,0.039 C0.11,0.03,0.052,0.016,0.041,0.019 C0.031,0.022,0,0.049,0,0.049 V1 H1"></path>
		</clipPath>
	</svg>
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
