<?php
/**
 * The template for displaying the Cashback Offer page.
 *
 * @package challenge
 */

get_header();
?>
  <div class="banner">
    <img class="wide" src="<?php echo get_template_directory_uri(); ?>/assets/img/Fleetguard-banner-form-1920x541.jpg">
    <img class="narrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/Fleetguard-banner-form-576x615.jpg">
  </div>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
