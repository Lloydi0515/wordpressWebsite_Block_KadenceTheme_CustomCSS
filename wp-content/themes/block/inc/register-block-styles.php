<?php
/**
 * Block styles.
 *
 * @package block
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function block_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'block-flat-button',
			'label' => __( 'Flat button', 'block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'block-shadow-button',
			'label' => __( 'Button with shadow', 'block' ),
		)
	);
}
add_action( 'init', 'block_register_block_styles' );
