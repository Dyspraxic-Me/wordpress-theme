<?php get_header(); ?>
	<h1
	<?php if (is_front_page()): ?>
		class="visually-hidden"
	<?php endif; ?>
	><?php the_title(); ?></h1>
	<?php the_content(); ?>
<?php
get_footer();
