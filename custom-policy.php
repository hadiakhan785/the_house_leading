<?php
/**
 * Template Name: Custom Policy
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package House_Leading
 */

get_header();
?>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
    <div class="banner-section">
      <h1>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'custom' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
    ?>
    </h1>
</div>
<article class="privacy">
        <div class="container">
<?php the_content();?>
        </div>
      </article>
      <!-- Policy Container Start -->
<?php get_footer(); ?>