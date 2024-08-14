<?php
/**
* Block preview that is displayed on the real page.
*/
?>
<?php if ( empty($attributes['hidden']) || !$attributes['hidden'] ) : ?>
<section
    <?php if ( !empty( $attributes['id'] ) ) : ?>
        id="section-<?php echo esc_attr(sanitize_title_with_dashes($attributes['id'])) ?>"
    <?php endif; ?>
    class="section full-width"
>
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
<?php endif; ?>