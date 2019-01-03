<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package House_Leading
 */

?>



		<?php the_title(); ?>


	<?php house_leading_post_thumbnail(); ?>


		<?php

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'house-leading' ),
			'after'  => '</div>',
		) );
		?>
<!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
	
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'house-leading' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
	<?php endif; ?>
<!-- #post-<?php the_ID(); ?> -->
