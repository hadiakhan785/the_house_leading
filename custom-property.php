<?php
/**
 * Template Name: Custom Property
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

<h2 class="section-heading">PROPERTIES</h2>

  <div class="tabs">
          <button class="tab-links btn-primery tab-links" onclick="openTab(event, 'houses')" id="default-open">HOUSES</button><button class="tab-links btn-primery tab-links" onclick="openTab(event, 'appartments')">APPARTMENTS</button>
        </div>


  <div class="container latest-posts-wrapper">  
		</main><!-- #main -->
  </div><!-- #primary -->
  <?php 
    $args = array( 'post_type' => 'post' ,'cat' => 18);
    $loop = new WP_Query( $args );
  ?>
  <div class="latest-posts-wrapper container">
  <div class="houses-container tab-content" id="houses">
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
<?php endif;wp_reset_query(); ?>
  </div>

  <div class="houses-container tab-content" id="appartments">
  <?php 
    $args = array( 'post_type' => 'post' ,'cat' => 19);
    $loop = new WP_Query( $args );
  ?>
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
</div>
<?php get_footer(); ?>