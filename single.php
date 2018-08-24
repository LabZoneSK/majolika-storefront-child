<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

$leadimage = get_post_custom_values( 'leadimage' )[0];
if($leadimage === null) {
	$leadimage = 'banner-o-nas.jpg';
}

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post();

			do_action( 'storefront_single_post_before' );

			get_template_part( 'content', 'single' );

			do_action( 'storefront_single_post_after' );

		endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
