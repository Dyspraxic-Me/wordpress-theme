<?php
/**
* Block preview that is displayed on the real page.
*/
?>
<section class="full-width">
    <div class="container">
        <div class="section-split">
            <InnerBlocks className="section-summary" />
            <?php if ( !empty( $attributes['image']['url'] ) ) : ?>
                <div class="section-image">
                    <img
                        src="<?php echo esc_url( $attributes['image']['url'] ); ?>"
                        alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>"
                    />
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>