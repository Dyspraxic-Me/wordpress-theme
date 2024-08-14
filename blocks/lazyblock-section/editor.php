<?php
/**
* Block preview that is displayed in the WordPress editor.
*/
?>
<?php if ( !empty($attributes['hidden']) && $attributes['hidden'] ) : ?>
    <strong>This section is hidden.</strong>
<?php endif; ?>
<div
    style="
        <?php if ( !empty($attributes['hidden']) && $attributes['hidden'] ) : ?>
            cursor: not-allowed;
            opacity: 0.6;
        <?php endif; ?>
        <?php if ( isset( $attributes['image']['url'] ) ) : ?>
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 1rem;
        <?php endif; ?>
    "

>
    <div>
        <InnerBlocks
        template="[
            [ 'core/heading', {
                content: 'Section heading',
                level: 2,
                lock: {
                    remove: true,
                    move: true,
                }
            } ],
            [ 'core/paragraph', {
                content: 'Section summary',
                lock: {
                    remove: true,
                    move: true,
                }
            } ],
            [ 'core/buttons', {
                lock: {
                    move: true,
                }
            } ]
        ]"
        />
    </div>
    <?php if ( isset( $attributes['image']['url'] ) ) : ?>
        <div>
            <img
                style="max-width: 100%"
                src="<?php echo esc_url( $attributes['image']['url'] ); ?>"
                alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>"
            />
        </div>
    <?php endif; ?>
</div>

