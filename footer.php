<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package House_Leading
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer main-footer">
  <div class="footer-layout">
      <div class="container flex-footer">

        <!-- About Us Start -->
        <div class="footer-items about-us footer-div-alignments">
          <?php dynamic_sidebar('footer-3')?>
        </div>
        <!-- About Us End -->

        <!-- Contact Details Start -->
        <div class="footer-items contact-details footer-div-alignments">
          <?php dynamic_sidebar('footer-2')?>
        </div>
        <!-- Contact Details End -->

        <!-- Useful Links Start -->
        <div class="footer-items useful-links footer-div-alignments">
          <?php dynamic_sidebar('footer-1')?>
        </div>
		  <!-- Useful Links End -->


      </div>
      </div>

<?php wp_footer(); ?>

</body>
</html>
