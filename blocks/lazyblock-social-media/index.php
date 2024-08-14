<?php
add_action( 'lzb/init', function() {
    lazyblocks()->add_block([
        'id' => 1001,
        'title' => 'Social media',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M3 6v11.5h8V6H3Zm11 3h7V7.5h-7V9Zm7 3.5h-7V11h7v1.5ZM14 16h7v-1.5h-7V16Z"></path></svg>',
        'keywords' => ['section'],
        'slug' => 'lazyblock/social-media',
        'description' => 'Share social media links',
        'category' => 'design',
        'category_label' => 'design',
        'controls' => [],
        'code' => ['output_method' => 'template']
    ]);   
});
?>