<?php
/**
* Block preview that is displayed on the real page.
*/
?>
<section class="full-width">
    <div class="container">
        <InnerBlocks className="section-summary" />
        <?php if ( !empty( $attributes['image']['url'] ) ) : ?>
            <img
                src="<?php echo esc_url( $attributes['image']['url'] ); ?>"
                alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>"
            />
        <?php endif; ?>
    </div>
</section>