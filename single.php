<?php get_header(); ?>
    <div class="back-to-link">
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
            <svg role="presentation" focusable="false" width="16.700001" height="13" viewBox="0 0 16.700001 13" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M 0,6.5 6.5,13 8,11.6 4,7.6 h 12.7 v -2 H 4 L 8,1.3 6.4,0 Z" />
            </svg>
            Back to <?php echo strtolower(get_the_title(get_option('page_for_posts'))) ?> overview
        </a>
    </div>
    <h1 class="post-title"><?php the_title(); ?></h1>
    <div class="post-meta"><?php the_time('jS F Y') ?>, <?php echo get_the_author_meta('display_name', get_post_field('post_author')); ?></div>
    <?php the_content(); ?>
    <?php
        $previous_post = get_adjacent_post(false, '', true);
        $next_post = get_adjacent_post(false, '', false);
    ?>
    <?php if($previous_post || $next_post): ?>
        <hr class="post-rule">
        <div class="post-navigation">
            <div class="post-navigation__previous">
                <?php if($previous_post): ?>
                    <a href="<?php echo get_permalink($previous_post) ?>">
                        <svg role="presentation" focusable="false" width="16.700001" height="13" viewBox="0 0 16.700001 13" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M 0,6.5 6.5,13 8,11.6 4,7.6 h 12.7 v -2 H 4 L 8,1.3 6.4,0 Z" />
                        </svg>
                        <?php echo $previous_post->post_title ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="post-navigation__next">
                <?php if($next_post): ?>
                    <a href="<?php echo get_permalink($next_post) ?>">
                        <?php echo $next_post->post_title ?>
                        <svg role="presentation" focusable="false" width="16.700001" height="13" viewBox="0 0 16.700001 13" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m 16.7,6.5 -6.5,6.5 -1.5,-1.4 4,-4 H 0 v -2 H 12.7 L 8.7,1.3 10.3,0 Z" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php
get_footer();
