<?php
/**
 * Template Name: Custom Home
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
<div class="latest-posts-container">

<h2 class="section-heading">FEATURED PROPERTIES</h2> 
		</main><!-- #main -->
  </div><!-- #primary -->
  <?php 
    $args = array( 'post_type' => 'post', 'posts_per_page' => 6 );
    $loop = new WP_Query( $args );
  ?>
  <div class="container latest-posts-wrapper">
  <?php if ( $loop->have_posts() ) : ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>    
       <!-- Card End-->
    <div class="card">
      <div class="card-head">
      <?php the_post_thumbnail('post-size');?>
        <div class="cost">
          <p class="cost-btn">
          $<?php echo get_field('cost_of_the_house') ?>
          </p>
        </div>
      </div>

      <div class="card-body">
        <h5><?php the_title();?></h5>
        <p class="location">
          <i class="icon-hl-gps"></i> <?php echo get_field('street_address') ?>, <?php echo get_field('city_name') ?>, <?php echo get_field('country__select') ?>
        </p>

        <p class="description">
          <?php the_excerpt();?>
        </p>

        <div class="property-meta-data flex-d">
          <div class="new-tag flex-d">
            <i class="icon-hl-new"></i>
          </div>

          <div class="bathroom flex-d">
            <i class="icon-hl-bathroom"></i>
            <span class="bathroom-quantity"><?php echo get_field('washrooms'); ?></span>
          </div>
          <div class="bedroom flex-d">
            <i class="icon-hl-bed"></i>
            <span class="rooms-quantity"><?php echo get_field('rooms'); ?></span>
          </div>
          <div class="space flex-d">
            <i class="icon-hl-resize"></i>
            <span class="space-measurement"><?php echo get_field('area_unit');?> sq ft</span>
            
          </div>
        </div>  
      </div>
    </div>
<!-- Card End -->
<?php endwhile; ?>
<?php endif; ?>
</div>
<section class="call-to-action-area bg-fixed bg-overlay-black">
      <div class="text-center">
          <h2>Are you looking for a place to rent?</h2>
          <h6>Suspendisse dictum enim sit amet libero malesuada feugiat.</h6>
          <a href="http://houseleading.onlinewebshop.net/properties/" class="btn-secndry search-btn">SEARCH</a>
      </div>
    </section>
    <section class="south-editor-area flex-d">
        <!-- Editor Content -->
        <div class="editor-content-area">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>Our Team</h2>
                
            </div>
            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
            <div class="address">
                <h6><i class="icon-hl-phone"></i> +92 21 38993000-223</h6>
                <h6><i class="icon-hl-mail"></i> house_leading_official@abc.com</h6>
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">

        </div>
    </section>

<?php
get_footer();
