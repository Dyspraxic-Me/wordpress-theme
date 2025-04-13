<?php get_header(); ?>
<h1><?php echo get_the_title(get_option('page_for_posts')) ?></h1>
<?php
$custom_query = new WP_Query(array(
    'post_type' => 'post', 
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => get_query_var('paged') ?: 1,
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date'
));
?>
<?php if ($custom_query->have_posts()) : ?>
    <?php while($custom_query->have_posts()) : ?>
        <?php $custom_query->the_post(); ?>
        <article class="post">
            <h2 class="post-title post-title--summary"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-meta"><?php the_time('jS F Y') ?>, <?php the_author() ?></div>
            <div class="post-excerpt"><?php the_excerpt(); ?></div>
            <div><a class="post-read-more-link" href="<?php the_permalink(); ?>">Read more</a></div>
        </article>
    <?php endwhile; ?>
    <?php if ($custom_query->max_num_pages > 1): ?>
        <hr class="post-rule">
        <div class="post-navigation">
            <?php if(get_previous_posts_link()): ?>
                <div class="post-navigation__previous">
                    <a href="<?php echo get_previous_posts_page_link(); ?>">
                        <svg role="presentation" focusable="false" width="16.700001" height="13" viewBox="0 0 16.700001 13" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M 0,6.5 6.5,13 8,11.6 4,7.6 h 12.7 v -2 H 4 L 8,1.3 6.4,0 Z" />
                        </svg>
                        Newer posts
                    </a>
                </div>
            <?php endif; ?>
            <?php if(get_next_posts_link()): ?>
                <div class="post-navigation__next">
                    <a href="<?php echo get_next_posts_page_link($custom_query->max_num_pages); ?>">
                        Older posts
                        <svg role="presentation" focusable="false" width="16.700001" height="13" viewBox="0 0 16.700001 13" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m 16.7,6.5 -6.5,6.5 -1.5,-1.4 4,-4 H 0 v -2 H 12.7 L 8.7,1.3 10.3,0 Z" />
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php wp_reset_postdata(); // reset the query ?>
<?php else: ?>
    <p>No blog posts yet, check back later!</p>
<?php endif; ?>
<?php
get_footer();
